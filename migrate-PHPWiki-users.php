<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
/*
Plugin Name: Migrate PHPWiki Users
Description: A plugin to migrate users from PHPWiki to WordPress.
Author: Ramlal Solanki
Author URI: https://about.me/ramlal
Version: 1.0
*/
//to add custom page in admin section
add_action('admin_menu', 'migrate_PHPWiki_users_plugin');
function migrate_PHPWiki_users_plugin(){
	$plugins_url = plugin_dir_url( __FILE__ ) . 'images/phpwiki.png' ;
	add_menu_page( 'Migrate PHPWiki Users', 'Migrate PHPWiki Users', 'manage_options', 'migrate-PHPWiki-users-plugin', 'migrate_PHPWiki_users_init', $plugins_url );
}

function migrate_PHPWiki_users_init(){
	require plugin_dir_path( __FILE__ ) . 'migrate_PHPWiki_users.php';
}


?>