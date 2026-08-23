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

	// Process file upload if provided
	if ( ! empty( $_FILES['quotation_file'] ) && ! empty( $_FILES['quotation_file']['name'] ) ) {
		require_once( ABSPATH . 'wp-admin/includes/file.php' );
		require_once( ABSPATH . 'wp-admin/includes/image.php' );
		require_once( ABSPATH . 'wp-admin/includes/media.php' );

		$uploaded = wp_handle_upload( $_FILES['quotation_file'], array( 'test_form' => false ) );
		if ( isset( $uploaded['url'] ) && ! isset( $uploaded['error'] ) ) {
			update_post_meta( $post_id, 'attached_file_url', $uploaded['url'] );

			$attachment = array(
				'guid'           => $uploaded['url'],
				'post_mime_type' => $uploaded['type'],
				'post_title'     => sanitize_file_name( $_FILES['quotation_file']['name'] ),
				'post_content'   => '',
				'post_status'    => 'inherit'
			);

			$attach_id = wp_insert_attachment( $attachment, $uploaded['file'], $post_id );
			if ( ! is_wp_error( $attach_id ) ) {
				$attach_data = wp_generate_attachment_metadata( $attach_id, $uploaded['file'] );
				wp_update_attachment_metadata( $attach_id, $attach_data );
				update_post_meta( $post_id, 'attached_file_id', $attach_id );
			}
		}
	}

	wp_send_json_success( array(
		'ref_id'  => $ref_id,
		'message' => 'Quotation request submitted successfully!',
	) );
}
add_action( 'wp_ajax_bayrak_submit_quotation', 'bayrak_submit_quotation_handler' );
add_action( 'wp_ajax_nopriv_bayrak_submit_quotation', 'bayrak_submit_quotation_handler' );

/**
 * Add WordPress Admin Meta Box for Quotation Requests
 */
function bayrak_quotation_admin_meta_box() {
	add_meta_box(
		'bayrak_quotation_details',
		__( 'Quotation Request Details & File Attachment', 'bayrak' ),
		'bayrak_render_quotation_admin_meta_box',
		'quotation_request',
		'normal',
		'high'
	);
}
add_action( 'add_meta_boxes', 'bayrak_quotation_admin_meta_box' );

function bayrak_render_quotation_admin_meta_box( $post ) {
	$ref_id       = get_post_meta( $post->ID, 'ref_id', true );
	$service_type = get_post_meta( $post->ID, 'service_type', true );
	$full_name    = get_post_meta( $post->ID, 'full_name', true );
	$email        = get_post_meta( $post->ID, 'email', true );
	$company_name = get_post_meta( $post->ID, 'company_name', true );
	$job_title    = get_post_meta( $post->ID, 'job_title', true );
	$phone        = get_post_meta( $post->ID, 'phone', true );
	$vessel_name  = get_post_meta( $post->ID, 'vessel_name', true );
	$imo_number   = get_post_meta( $post->ID, 'imo_number', true );
	$port_of_call = get_post_meta( $post->ID, 'port_of_call', true );
	$eta          = get_post_meta( $post->ID, 'eta', true );
	$etd          = get_post_meta( $post->ID, 'etd', true );
	$notes        = get_post_meta( $post->ID, 'notes', true );
	$file_url     = get_post_meta( $post->ID, 'attached_file_url', true );
	?>
	<style>
		.bayrak-admin-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 15px; margin-bottom: 20px; }
		.bayrak-admin-card { background: #f8fafc; padding: 15px; border: 1px solid #e2e8f0; border-radius: 6px; }
		.bayrak-admin-card h4 { margin: 0 0 10px 0; color: #004aad; font-size: 14px; text-transform: uppercase; }
		.bayrak-file-btn { display: inline-block; background: #004aad; color: #fff !important; text-decoration: none; padding: 10px 18px; border-radius: 4px; font-weight: bold; margin-top: 10px; }
		.bayrak-file-btn:hover { background: #002b66; }
	</style>

	<div class="bayrak-admin-grid">
		<div class="bayrak-admin-card">
			<h4>📋 General Details</h4>
			<p><strong>Reference ID:</strong> <?php echo esc_html( $ref_id ? $ref_id : 'N/A' ); ?></p>
			<p><strong>Service Category:</strong> <?php echo esc_html( $service_type ); ?></p>
			<p><strong>Contact Name:</strong> <?php echo esc_html( $full_name ); ?> (<?php echo esc_html( $job_title ); ?>)</p>
			<p><strong>Company:</strong> <?php echo esc_html( $company_name ); ?></p>
			<p><strong>Email:</strong> <a href="mailto:<?php echo esc_attr( $email ); ?>"><?php echo esc_html( $email ); ?></a></p>
			<p><strong>Phone:</strong> <?php echo esc_html( $phone ); ?></p>
		</div>

		<div class="bayrak-admin-card">
			<h4>🚢 Vessel Logistics</h4>
			<p><strong>Vessel Name:</strong> <?php echo esc_html( $vessel_name ); ?></p>
			<p><strong>IMO Number:</strong> <?php echo esc_html( $imo_number ); ?></p>
			<p><strong>Port of Call:</strong> <?php echo esc_html( $port_of_call ); ?></p>
			<p><strong>ETA:</strong> <?php echo esc_html( $eta ); ?></p>
			<p><strong>ETD:</strong> <?php echo esc_html( $etd ); ?></p>
		</div>
	</div>

	<?php if ( $notes ) : ?>
		<div class="bayrak-admin-card" style="margin-bottom:15px;">
			<h4>📝 Additional Specifications / Notes</h4>
			<p><?php echo nl2br( esc_html( $notes ) ); ?></p>
		</div>
	<?php endif; ?>

	<div class="bayrak-admin-card" style="background:#eff6ff; border-color:#bfdbfe;">
		<h4>📎 Attached Requisition File</h4>
		<?php if ( $file_url ) : ?>
			<p>A file attachment was uploaded with this quotation request:</p>
			<a href="<?php echo esc_url( $file_url ); ?>" target="_blank" class="bayrak-file-btn">
				📥 Download Attached Requisition File
			</a>
		<?php else : ?>
			<p><em>No file attachment uploaded for this request.</em></p>
		<?php endif; ?>
	</div>
	<?php
}


