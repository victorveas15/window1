<?php
	/*
		Plugin name: Pwork
		Plugin URI: http://www.primerplugin.com
		Description: mi primer plugin 
		Author: Victor Veas
		Version: 1.0.0
		Author URI: http://www.victorveas.com
	*/

		add_action( 'admin_menu', 'Pwork_add_new_menu_option' );
			function Pwork_add_new_menu_option() {
				add_management_page( 'Pwork', 'Pwork', 'install_plugins', 'Pwork', 'Pwork_admin_page' );
}
		function Pwork_admin_page() {
				$text = 'Bienvenido';
					echo '<h1>' . $text . '</h1>';
}
?>