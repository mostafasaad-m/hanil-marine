<?php
/**
 * Bayrak - Standalone WordPress Theme Functions
 * Author: VitalDC (https://vitaldc.com)
 * Text Domain: bayrak
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Theme Setup
 */
function bayrak_theme_setup() {
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 120,
			'width'       => 300,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);
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
}
add_action( 'after_setup_theme', 'bayrak_theme_setup' );

/**
 * Enqueue Theme Stylesheet
 */
function bayrak_enqueue_scripts() {
	wp_enqueue_style( 'bayrak-style', get_stylesheet_uri(), array(), '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'bayrak_enqueue_scripts' );

/**
 * Register Quotation Request Custom Post Type
 */
function bayrak_register_quotation_cpt() {
	$labels = array(
		'name'                  => _x( 'Quotation Requests', 'Post Type General Name', 'bayrak' ),
		'singular_name'         => _x( 'Quotation Request', 'Post Type Singular Name', 'bayrak' ),
		'menu_name'             => __( 'Quotations', 'bayrak' ),
		'all_items'             => __( 'All Quotations', 'bayrak' ),
		'add_new_item'          => __( 'Add New Quotation Request', 'bayrak' ),
		'edit_item'             => __( 'Edit Quotation Request', 'bayrak' ),
		'view_item'             => __( 'View Quotation Request', 'bayrak' ),
		'search_items'          => __( 'Search Quotations', 'bayrak' ),
		'not_found'             => __( 'No Quotations found', 'bayrak' ),
	);
	$args = array(
		'label'                 => __( 'Quotation Request', 'bayrak' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'custom-fields' ),
		'public'                => false,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-clipboard',
		'capability_type'       => 'post',
		'has_archive'           => false,
		'hierarchical'          => false,
		'show_in_rest'          => true,
	);
	register_post_type( 'quotation_request', $args );
}
add_action( 'init', 'bayrak_register_quotation_cpt' );

/**
 * AJAX Handler for Quotation Submission
 */
function bayrak_submit_quotation_handler() {
	$service_type  = isset( $_POST['service_type'] ) ? sanitize_text_field( $_POST['service_type'] ) : '';
	$full_name     = isset( $_POST['full_name'] ) ? sanitize_text_field( $_POST['full_name'] ) : '';
	$email         = isset( $_POST['email'] ) ? sanitize_email( $_POST['email'] ) : '';
	$company_name  = isset( $_POST['company_name'] ) ? sanitize_text_field( $_POST['company_name'] ) : '';
	$job_title     = isset( $_POST['job_title'] ) ? sanitize_text_field( $_POST['job_title'] ) : '';
	$phone         = isset( $_POST['phone'] ) ? sanitize_text_field( $_POST['phone'] ) : '';
	$vessel_name   = isset( $_POST['vessel_name'] ) ? sanitize_text_field( $_POST['vessel_name'] ) : '';
	$imo_number    = isset( $_POST['imo_number'] ) ? sanitize_text_field( $_POST['imo_number'] ) : '';
	$port_of_call  = isset( $_POST['port_of_call'] ) ? sanitize_text_field( $_POST['port_of_call'] ) : '';
	$eta           = isset( $_POST['eta'] ) ? sanitize_text_field( $_POST['eta'] ) : '';
	$etd           = isset( $_POST['etd'] ) ? sanitize_text_field( $_POST['etd'] ) : '';
	$notes         = isset( $_POST['notes'] ) ? sanitize_textarea_field( $_POST['notes'] ) : '';

	if ( empty( $full_name ) || empty( $email ) || empty( $vessel_name ) ) {
		wp_send_json_error( array( 'message' => 'Please fill in all required fields.' ) );
	}

	$ref_id = 'HM-' . date( 'Y' ) . '-' . rand( 1000, 9999 );
	$title  = sprintf( '%s - %s (%s)', $ref_id, $vessel_name, $company_name ? $company_name : $full_name );

	$post_id = wp_insert_post( array(
		'post_type'    => 'quotation_request',
		'post_title'   => $title,
		'post_status'  => 'publish',
		'post_content' => sprintf(
			"Reference ID: %s\nService Type: %s\nContact Name: %s (%s)\nEmail: %s | Phone: %s\nCompany: %s\nVessel Name: %s (IMO: %s)\nPort of Call: %s\nETA: %s | ETD: %s\nAdditional Notes: %s",
			$ref_id, $service_type, $full_name, $job_title, $email, $phone, $company_name, $vessel_name, $imo_number, $port_of_call, $eta, $etd, $notes
		),
	) );

	if ( is_wp_error( $post_id ) ) {
		wp_send_json_error( array( 'message' => 'Error saving quotation request.' ) );
	}

	// Save Meta Fields
	update_post_meta( $post_id, 'ref_id', $ref_id );
	update_post_meta( $post_id, 'service_type', $service_type );
	update_post_meta( $post_id, 'full_name', $full_name );
	update_post_meta( $post_id, 'email', $email );
	update_post_meta( $post_id, 'company_name', $company_name );
	update_post_meta( $post_id, 'job_title', $job_title );
	update_post_meta( $post_id, 'phone', $phone );
	update_post_meta( $post_id, 'vessel_name', $vessel_name );
	update_post_meta( $post_id, 'imo_number', $imo_number );
	update_post_meta( $post_id, 'port_of_call', $port_of_call );
	update_post_meta( $post_id, 'eta', $eta );
	update_post_meta( $post_id, 'etd', $etd );
	update_post_meta( $post_id, 'notes', $notes );

	wp_send_json_success( array(
		'ref_id'  => $ref_id,
		'message' => 'Quotation request submitted successfully!',
	) );
}
add_action( 'wp_ajax_bayrak_submit_quotation', 'bayrak_submit_quotation_handler' );
add_action( 'wp_ajax_nopriv_bayrak_submit_quotation', 'bayrak_submit_quotation_handler' );

