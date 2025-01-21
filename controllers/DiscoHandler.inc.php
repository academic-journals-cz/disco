<?php

/**
 * @file controllers/DiscoHandler.inc.php
 *
 * Copyright (c) 2014-2020 Simon Fraser University
 * Copyright (c) 2003-2020 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class DiscoHandler
 * @ingroup controllers_disco
 *
 *
 */

import('classes.handler.Handler');

class DiscoHandler extends Handler {

    static $plugin;
    var $parentPlugin;

    /**
     * Set the static pages plugin.
     * @param $plugin StaticPagesPlugin
     */
    static function setPlugin($plugin) {
        self::$plugin = $plugin;
    }

    /**
     * Constructor
     */
    function __construct() {
        parent::__construct();
        $this->addRoleAssignment(
                array(ROLE_ID_MANAGER),
                array('index', 'updateDisco', 'delete')
        );
    }

    //
    // Overridden template methods
    //

    /**
     * @copydoc PKPHandler::authorize()
     */
    function authorize($request, &$args, $roleAssignments) {
        import('lib.pkp.classes.security.authorization.ContextAccessPolicy');
        $this->addPolicy(new ContextAccessPolicy($request, $roleAssignments));
        return parent::authorize($request, $args, $roleAssignments);
    }

    /**
     * Update a disco
     * @param $args array
     * @param $request PKPRequest
     * @return string Serialized JSON object
     */
    function updateDisco($args, $request) {
        $discoId = $request->getUserVar('discoId');
        $category = $request->getUserVar('category');
        $context = $request->getContext();
        $this->setupTemplate($request);
        // Create and populate the form
        import('plugins.generic.disco.controllers.form.DiscoForm');
        $discoForm = new DiscoForm(self::$plugin, $context->getId(), $discoId, $category);
        $discoForm->readInputData();

        // Check the results
        if ($discoForm->validate()) {
            // Save the results
            $discoForm->execute();
            
            $redirectUrl = $request->getDispatcher()->url($request, ROUTE_PAGE, null, 'management', 'settings', array('website'), null, 'disco');
            return $request->redirectUrl($redirectUrl);

        } else {
            // Present any errors
            $redirectUrl = $request->getDispatcher()->url($request, ROUTE_PAGE, null, 'management', 'settings', array('website'), null, 'disco');
            return $request->redirectUrl($redirectUrl);;
        }
    }

    /**
     * Delete a disco
     * @param $args array
     * @param $request PKPRequest
     * @return string Serialized JSON object
     */
    function delete($args, $request) {
        $discoId = $request->getUserVar('discoId');
        $context = $request->getContext();

        // Delete the static page
        $discoDao = DAORegistry::getDAO('DiscoDAO');
        $disco = $discoDao->getById($discoId, $context->getId());
        $discoDao->deleteObject($disco);

        return DAO::getDataChangedEvent();
    }

}
