<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://prepareddevelopment.com
 * @since      1.0.0
 *
 * @package    Animated_Wordpress_Login
 * @subpackage Animated_Wordpress_Login/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Animated_Wordpress_Login
 * @subpackage Animated_Wordpress_Login/includes
 * @author     Jamil Ahmed <jamil@prepareddevelopment.com>
 */
class Animated_Wordpress_Login_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'animated-wordpress-login',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
