<?php
/**
 * ---------------------------------------------------------------------------------------------------------
 * Device Detect plugin
 *
 * Version 1.0.0
 *
 * Copyright (C) 2013 Spletodrom. All rights reserved.
 *
 * Device Detect detector is free software and is distributed under the GNU General Public License,
 * and as distributed it may include or be derivative of works licensed under the GNU
 * General Public License or other free or open source software licenses.
 * ---------------------------------------------------------------------------------------------------------
 **/

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

jimport( 'joomla.plugin.plugin' );
define ('PLG_URL', JURI::root(true).'/plugins/system/plg_devicedetector');

/**
 * Device Detector Plugin
 */
class plgSystemDevicedetect extends JPlugin
{
	public function onAfterInitialise()
	{
		$doc = JFactory::getDocument();
		if ($this->params->get('jsversion', 1)) {
			$doc->addScript(PLG_URL . '/assets/devicejs.min.js');
		}
		else {
			$doc->addScript(PLG_URL . '/assets/devicejs.js');
		}
	}
}