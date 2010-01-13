<?php
class DashboardController extends AppController {
	var $uses = array();
	function admin_home() {
		$this->view = 'Theme';
		$this->theme = 'backstage';
	}

	/**
	 * Does exactly what it says on the tin.
	 */
	function admin_phpinfo() {
	}

}
?>