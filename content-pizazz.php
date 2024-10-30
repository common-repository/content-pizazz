<?php
/*
Plugin Name: Content Pizazz
Plugin URI: http://kevinsspace.ca/content-pizazz/
Description: This plugin gives the user a number of shortcodes to spice up posts and pages. There are shortcoded to add linkable buttons, message boxes, list icons, drop caps, quotes, columns, and text enhancement.
Version: 1.12.3
Author: Kevin Archibald
Author URI: http://kevinsspace.ca
License: GPLv3
*/
/*
===================================================================================================
                       LICENSE
===================================================================================================

License: GNU General Public License V3
License URI: see the license.txt file for license details.

	Content Pizazz is a plugin for WordPress
    Copyright (C) 2012 Kevin Archibald

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

/**
 * This is the main plugin file for Content Pizazz
 *
 * @package		Content Pizazz WordPress Plugin
 * @copyright	Copyright (c) 2012, Kevin Archibald
 * @license		http://www.gnu.org/licenses/quick-guide-gplv3.html  GNU Public License
 * @author		Kevin Archibald <www.kevinsspace.ca/contact/>
 */

/*# ---------------------------------- #
# prevent file from being accessed directly
# ---------------------------------- #*/
if ('content-pizazz.php' == basename($_SERVER['SCRIPT_FILENAME']))
	die ('Please do not access this file directly. Thanks!');

register_activation_hook( __FILE__, 'kacp_content_pizazz_activate' );

function kacp_content_pizazz_activate() {
	//Check version compatibilities
    if ( version_compare( get_bloginfo( 'version' ), '3.3', '<' ) ) {
        deactivate_plugins( basename( __FILE__ ) ); // Deactivate our plugin
        die ('Please Upgrade your WprdPress to use this plugin.');
    }
	
}

add_action( 'plugins_loaded','kacp_content_pizazz_plugin_setup');

function kacp_content_pizazz_plugin_setup() {
	require_once( dirname(__FILE__).'/includes/kacp_shortcodes.php' );
	add_action('wp_enqueue_scripts','kacb_add_user_style');
}

/**
 * Register styles for shortcodes
 *
 * @param int|string $user Either an ID or a username
 * @param PDO $pdo A valid PDO object
 * @return User Returns User object or null if not found
 */

 function kacb_add_user_style(){
	wp_register_style( 'kacb_user_styles',plugin_dir_url(__FILE__).'kacp_user_styles.css' );
	wp_enqueue_style( 'kacb_user_styles' );
}
 
/** ------------- Enqueue Scripts ---------------------------------------
 *
 * When the plugin is activated this function is executed
 * 
 * Loads these files on setup
 * Activates the excerpt jQuery script if needed
 * 
 * ----------------------------------------------------------------------- */
function kacp_load_scripts () {
	wp_enqueue_script( 'content_pizazz_js', plugins_url() . '/content-pizazz/includes/kacp_doc_ready.js', array('jquery'));
}
add_action('wp_enqueue_scripts','kacp_load_scripts');

/** ------------- Load Admin Functions ---------------------------------------
 *
 * The admin functions are loaded if in admin mode
 * 
 * --------------------------------------------------------------------------- */
if( is_admin() ) {
	//load admin functions
	require_once( dirname(__FILE__).'/includes/kacp_functions.php' );
	require_once( dirname(__FILE__).'/includes/kacp_admin.php' );
}
