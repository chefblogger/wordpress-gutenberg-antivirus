<?php
/*
Plugin Name: WordPress Gutenberg Antivirus
Plugin URI: http://www.chefblogger.me
Description: Disables features that WordPress 5.8 has enabled 
Version: 0.1
Author: Eric-Oliver Mächler
Author URI: http://www.ericmaechler.com
Requires at least: 5.8
Tested up to: 5.8
*/

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly


/*================================================
 * Unendliches Laden Mediathek aktivieren
 *===============================================*/
add_filter( 'media_library_infinite_scrolling', '__return_true' );

/*================================================
 * WordPress 5.8 Widget Gutenberg System deaktivieren
 *===============================================*/

// Disables the block editor from managing widgets in the Gutenberg plugin.
add_filter( 'gutenberg_use_widgets_block_editor', '__return_false' );

// Disables the block editor from managing widgets.
add_filter( 'use_widgets_block_editor', '__return_false' );





?>