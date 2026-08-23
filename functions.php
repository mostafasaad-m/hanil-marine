<?php
/**
 * Bayrak - Standalone WordPress Theme Functions
 * Author: Mostafa Saad (https://vitaldc.com)
 * Text Domain: bayrak
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Theme Setup
 */
function bayrak_theme_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// Support Custom Logo
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 120,
			'width'       => 300,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);

	// Switch default core markup to output valid HTML5.
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Register Navigation Menus
	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'bayrak' ),
			'footer'  => __( 'Footer Menu', 'bayrak' ),
		)
	);
}
add_action( 'after_setup_theme', 'bayrak_theme_setup' );

/**
 * Enqueue scripts and styles.
 */
function bayrak_enqueue_scripts() {
	// Theme main stylesheet
	wp_enqueue_style( 'bayrak-style', get_stylesheet_uri(), array(), '1.0.0' );

	// Google Fonts
	wp_enqueue_style( 'bayrak-google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Montserrat:wght@600;700&display=swap', array(), null );
	wp_enqueue_style( 'bayrak-material-symbols', 'https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap', array(), null );

	// Tailwind CSS CDN
	wp_enqueue_script( 'bayrak-tailwind', 'https://cdn.tailwindcss.com?plugins=forms,container-queries', array(), null, false );
}
add_action( 'wp_enqueue_scripts', 'bayrak_enqueue_scripts' );
