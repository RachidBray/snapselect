<?php

/**
 * SnapSelect functions and definitions
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/**
 * Enqueue the style.css file.
 *
 * @since 1.0.0
 */

 add_action( 'wp_enqueue_scripts', 'snapselect_enqueue_styles' );
 function snapselect_enqueue_styles() {
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/assets/styles/style.css');
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
 }

/**
 * Loads the translation files for WordPress.
 *
 * @since 1.0.0
 */

function snapselect_theme_setup()
{
	load_child_theme_textdomain( 'snapselect', get_stylesheet_directory() . '/languages' );
}

add_action('after_setup_theme', 'snapselect_theme_setup');
