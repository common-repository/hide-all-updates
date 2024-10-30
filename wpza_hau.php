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

if( ! class_exists( 'wpza_hau' ) ) {
	final class wpza_hau {
		public function __construct() {
			$this->wpza_hau__define_constants();
			$this->wpza_hau__includes();
		}

		private function wpza_hau__define_constants() {
			define( 'wpza_hau__directory', __DIR__ );
			define( 'wpza_hau__full_name', 'Random File Upload Names' );
		}

		private function wpza_hau__includes() {
			$dir = scandir( wpza_hau__directory . '/includes' );
			if( $dir ) {
				foreach( $dir as $module ) {
					$path = wpza_hau__directory . '/includes';
					if( $path && substr( $module, 0, 1 ) !== '.' ) {
						$file = '/' . $module;
						if( is_readable( $path . $file ) ) {
							include_once( $path . $file );
						}
					}
				}
			}
		}
	}
}

new wpza_hau();