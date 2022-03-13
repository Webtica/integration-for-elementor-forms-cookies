<?php

// Link to support and pro page from plugins screen
function filter_action_links_cookies_webtica( $links ) {
	$links['support'] = '<a href="https://plugins.webtica.be/support/?ref=plugin-settings-page" target="_blank">Support</a>';
	$links['proversion'] = '<a href="https://plugins.webtica.be/product/cookies-pro-integration-for-elementor-forms/?ref=plugin-settings-page" target="_blank">Get Pro version</a>';
	return $links;
}
add_filter( 'plugin_action_links_integration-for-elementor-forms-cookies/cookies-elementor-integration.php', 'filter_action_links_cookies_webtica', 10, 3 );