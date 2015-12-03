<?php
defined('ABSPATH') or die("No script kiddies please!");

/**
 * Plugin Name: KB - testimonials Post Type
 * Description: Creates the testimonial post type so that it can be activated / deactivated.
 * Version: 1.0
 * Author: Kirsty Burgoine
 * Author URI: http://www.kirstyburgoine.co.uk
 */


function kb_register_testimonial_post_type() {

	$labels = array(
		'name'               => _x( 'Testimonials', 'post type general name' ),
		'singular_name'      => _x( 'Testimonial Item', 'post type singular name' ),
		'menu_name'          => _x( 'Testimonials', 'admin testimonials' ),
		'name_admin_bar'     => _x( 'Testimonials', 'add new on admin bar' ),
		'add_new'            => _x( 'Add New', 'Testimonial' ),
		'add_new_item'       => __( 'Add New Testimonial' ),
		'new_item'           => __( 'New Testimonial' ),
		'edit_item'          => __( 'Edit Testimonial' ),
		'view_item'          => __( 'View Testimonial' ),
		'all_items'          => __( 'All Testimonials' ),
		'search_items'       => __( 'Search Testimonials' ),
		'parent_item_colon'  => __( 'Parent Testimonial:' ),
		'not_found'          => __( 'No Testimonials found.' ),
		'not_found_in_trash' => __( 'No Testimonials found in Trash.' )
	);

	$args = array(

		'labels'				=> $labels,
		'public'				=> TRUE,
		'query_var'				=> TRUE,
		'rewrite'				=> array('slug' => 'testimonial', 'with_front' => FALSE),
		'capability_type'		=> 'post',
		'taxonomies'			=> array(),
		'supports'				=> array('title', 'editor', 'thumbnail',),
		'has_archive'			=> TRUE,
		'show_in_nav_menus'		=> FALSE

	);

	register_post_type('testimonial', $args );

}

add_action( 'init', 'kb_register_testimonial_post_type' );

/*

function kb_register_business_taxonomies() {

	register_taxonomy(
		'sectors',
		'business',
		array(
			'labels' => array(
				'name' => 'Sectors',
				'add_new_item' => 'Add New Sector',
				'new_item_name' => "New Sector"
			),
			'show_ui' => true,
			'show_tagcloud' => false,
			'hierarchical' => true,
			'show_in_nav_menus'	=> false

		)
	);

	

}

add_action( 'init', 'kb_register_business_taxonomies' );

*/

?>