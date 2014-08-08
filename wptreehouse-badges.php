<?php 
/**
 * Plugin Name: Treehouse Badge Plugin
 * Plugin URI: http://aaronjcksn.net/wptreehouse-badges-plugin/
 * Description: This plugin provides both widgets and shortcodes to display your Treehouse profile badges.
 * Version: 1.0
 * Author: Aaron Jackson
 * Author URI: http://aaronjcksn.net
 * License: GPL2
 */

// Assign global variables
$plugin_url = WP_PLUGIN_URL . '/wptreehouse-badges';


// Add a link to your plugin in the admin menu
// under "Settings > Treehouse Badges"


function wptreehouse_badges_menu() { 

// Uses the add_opitions_page function to the options page in WP
//	add_options_page ( $page_title, $menu_title, $capability, $menu-slug, $function ) <= perms

	add_options_page(
		'Official Treehouse Badges Plugin',
		'Treehouse Badges',
		'manage_options',
		'wptreehouse-badges',
		'wptreehouse_badges_options_page' 
	);

}

add_action('admin_menu' , 'wptreehouse_badges_menu' );

function wptreehouse_badges_options_page() { 

	if( !current_user_can( 'manage_options') ) {
		wp_die( 'You do not have permissions to access this page.');
	}

	global $plugin_url;

	require ( 'inc/options-page-wrapper.php' );	
}

?>