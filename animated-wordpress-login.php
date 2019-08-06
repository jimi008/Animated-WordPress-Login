<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://jamilahmed.net/
 * @since             1.0.0
 * @package           Animated_Wordpress_Login
 *
 * @wordpress-plugin
 * Plugin Name:       Animated WordPress Login
 * Plugin URI:        https://github.com/jimi008/Animated-WordPress-Login
 * Description:       Customized WordPress login page with unique animation and effects.  
 * Version:           1.0.0
 * Author:            Jamil Ahmed
 * Author URI:        https://jamilahmed.net/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 * Text Domain:       animated-wordpress-login
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'AWL_VER', '1.0.0' );



/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */

// custom login for theme
function childtheme_custom_login() {
?>
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700" rel="stylesheet">
<link href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.min.css" rel="stylesheet" type="text/css" />

<!-- <script type="text/javascript" src="//s3-us-west-2.amazonaws.com/s.cdpn.io/16327/MorphSVGPlugin.min.js?r=182"></script> -->
<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenMax.min.js"></script> -->
<?php
}
 
add_action('login_head', 'childtheme_custom_login');


function awc_login_assets() {
	wp_enqueue_style( 'awc-login', plugin_dir_url( __FILE__ ) . 'public/css/style-login.css' );

    wp_enqueue_script( 'awc-tweenmax', plugin_dir_url( __FILE__ ) . 'public/js/TweenMax.min.js' );
    // wp_enqueue_script( 'awc-morphsvg', plugin_dir_url( __FILE__ ) . 'public/js/MorphSVGPlugin.min.js' );
    wp_enqueue_script( 'awc-login', plugin_dir_url( __FILE__ ) . 'public/js/script-login.min.js', array('jquery', 'jquery-ui-core', 'jquery-ui-dialog') );
}
add_action( 'login_enqueue_scripts', 'awc_login_assets', 20, 2 );

