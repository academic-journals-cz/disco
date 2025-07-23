<?php

/**
 * @file controllers/grid/form/StaticPageForm.inc.php
 *
 * Copyright (c) 2014-2020 Simon Fraser University
 * Copyright (c) 2003-2020 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class StaticPageForm
 * @ingroup controllers_grid_staticPages
 *
 * Form for press managers to create and modify sidebar blocks
 *
 */

import('lib.pkp.classes.form.Form');

class DiscoFromHandler extends Form {
	/** @var int Context (press / journal) ID */
	var $_contextId;

	/** @var int disco setting ID */
	var $_discoSettingId;

	/** @var DiscoPlugin Disco plugin */
	var $_plugin;

	/**
	 * Constructor
	 * @param $discoPlugin DiscoPlugin The disco plugin
	 * @param $contextId int Context ID
	 * @param $discoSettingId int disco Setting ID (if any)
	 */
	function __construct($discoPlugin, $contextId, $discoSettingId = null) {
		parent::__construct($discoPlugin->getTemplateResource('discoTab.tpl'));

		$this->_contextId = $contextId;
		$this->_discoSettingId = $discoSettingId;
		$this->_plugin = $discoPlugin;

		// Add form checks
		$this->addCheck(new FormValidatorPost($this));
		$this->addCheck(new FormValidatorCSRF($this));
	}
}

