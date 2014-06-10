<?php
/*
Plugin Name: No ToolBar
Plugin URI: 
Description: Simple plugin to remove the admin toolbar as long as this plugin is active.
Version:
Author: Kyle Smith
Author URI: http://www.kmaismith.com/
License: Affero GPL
*/

function redirect_if_single() {
	if( is_single() ) {
		wp_redirect( '/', 301 );
	}
}

add_action('wp', 'redirect_if_single');


add_filter('show_admin_bar', '__return_false');
?>
