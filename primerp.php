<?php
	/*
		Plugin name: primerplugin
		Plugin URI: http://www.primerplugin.com
		Description: mi primer plugin 
		Author: Victor Veas
		Version: 1.0.0
		Author URI: http://www.victorveas.com
	*/

		add_action( 'admin_menu', 'primerplugin_add_new_menu_option' );
			function primerplugin_add_new_menu_option() {
				add_management_page( 'primerplugin', 'primerplugin', 'install_plugins', 'primerplugin', 'primerplugin_admin_page' );
}
		function primerplugin_admin_page() {
				$text = 'Hello';
					echo '<h1>' . $text . '</h1>';
}
?>