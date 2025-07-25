<?php

/**
 * @file /disco/DiscoPageHandler.inc.php
 *
 * Copyright (c) 2014-2020 Simon Fraser University
 * Copyright (c) 2003-2020 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class DiscoPageHandler
 * @ingroup pages_disco
 *
 * @brief 
 */
import('classes.handler.Handler');

class DiscoPageHandler extends Handler {

    /** @var StaticPagesPlugin The static pages plugin */
    static $plugin;

    /**
     * Provide the static pages plugin to the handler.
     * @param $plugin StaticPagesPlugin
     */
    static function setPlugin($plugin) {
        self::$plugin = $plugin;
    }

    /**
     * Generate an XML sitemap for webcrawlers
     * Creates a sitemap index if in site context, else creates a sitemap
     * @param $args array
     * @param $request Request
     */
    function index($args, $request) {
        $path = array_shift($args);

        AppLocale::requireComponents(LOCALE_COMPONENT_PKP_COMMON, LOCALE_COMPONENT_APP_COMMON, LOCALE_COMPONENT_PKP_USER);
        $context = $request->getContext();
        $contextId = $context ? $context->getId() : CONTEXT_ID_NONE;

        // Assign the template vars needed and display
        $templateMgr = TemplateManager::getManager($request);
        $this->setupTemplate($request);
        $templateMgr->assign('title', __("plugin.generic.disco.page.title"));
        self::$plugin->assignBadges();
        $templateMgr->display(self::$plugin->getTemplateResource('discoDescription.tpl'));
    }

}
