<?php

/**
 * Plugin Name: Integration for Elementor forms - Cookies
 * Description: Easily set cookies after an elementor form submission.
 * Author: Webtica
 * Author URI: https://webtica.be/
 * Version: 1.0.0
 * Elementor tested up to: 3.4.4
 * Elementor Pro tested up to: 3.4.1
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit; 
}

//load plugins functionallity
require dirname(__FILE__).'/init-cookies-integration-action.php';

//Check if Elementor pro is installed
function cookies_integration_check_elementor_pro_is_active() {

	if ( !is_plugin_active('elementor-pro/elementor-pro.php') ) {
		echo "<div class='error'><p><strong>Cookies for elementor forms</strong> requires <strong> Elementor Pro plugin to be installed and activated</strong> </p></div>";
	}
}
add_action('admin_notices', 'cookies_integration_check_elementor_pro_is_active');