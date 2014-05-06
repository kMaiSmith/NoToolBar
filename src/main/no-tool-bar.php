<?php
/*
Plugin Name: No Tool Bar
Plugin URI: 
Description: Simple plugin to remvoe the admin toolbar as long as this plugin is active.
Version:
Author: Kyle Smith
Author URI: http://www.kmaismith.com/
License: Affero GPL
*/

add_filter('show_admin_bar', '__return_false');

?>
