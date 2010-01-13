<?php
/**
 * 
 * Backstage Plugin for CakePHP
 * Copyright (c) Iain Mullan 2009
 * 
 * Released under the MIT license.
 * 
 */
class PluginsController extends BackstageAppController {
	var $uses = array();

	function admin_index() {
		$plugins = Configure::listObjects('plugin');
		$this->set('plugins', $plugins);
	}
	
	function admin_view($plugin_name) {
		$readme = file_get_contents(APP.'plugins'.DS.$plugin_name.DS.'README');
		$this->set('readme', $readme);
		$this->set('pluginName', Inflector::humanize($plugin_name));
	}

}
?>