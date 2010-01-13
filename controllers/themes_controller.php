<?php
/**
 * 
 * Backstage Plugin for CakePHP
 * Copyright (c) Iain Mullan 2009
 * 
 * Released under the MIT license.
 * 
 */
class ThemesController extends BackstageAppController {
	var $uses = array();

	function admin_index() {
		$themes = Configure::listObjects('theme');
	}

}
?>