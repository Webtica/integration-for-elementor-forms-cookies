<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit; 
}

add_action( 'elementor_pro/init', function() {
	// Here its safe to include our action class file
	include_once( dirname(__FILE__).'/includes/class-cookies-integration-action.php' );

	// Instantiate the action class
	$cookies_integration_action = new Cookies_Integration_Action_After_Submit();

	// Register the action with form widget
	\ElementorPro\Plugin::instance()->modules_manager->get_modules( 'forms' )->add_form_action( $cookies_integration_action->get_name(), $cookies_integration_action );
});