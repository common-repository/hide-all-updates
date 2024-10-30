<?php
/*
Plugin Name: Hide All Updates
Plugin URI: https://wpza.net/how-to-remove-all-updates-core-plugins-themes-in-wordpress/
Description: WPZA Hide All Updates provides your website with functionality to hide all updates.
Version: 1.0.0
Author: WPZA
Author URI: https://www.wpza.net/
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/
defined( 'ABSPATH' ) or die();

function wpza_hau__hide_updates() {
	global $wp_version;
	return( object ) array( 'last_checked'=> time(),'version_checked'=> $wp_version );
}
add_filter( 'pre_site_transient_update_core', 'wpza_hau__hide_updates' );
add_filter( 'pre_site_transient_update_plugins', 'wpza_hau__hide_updates' );
add_filter( 'pre_site_transient_update_themes', 'wpza_hau__hide_updates' );
