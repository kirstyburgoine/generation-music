<?php
defined('ABSPATH') or die("No script kiddies please!");

/**
 * Plugin Name: KB - Exhibitors Post Type
 * Description: Creates the exhibitor post type so that it can be activated / deactivated.
 * Version: 1.0
 * Author: Kirsty Burgoine
 * Author URI: http://www.kirstyburgoine.co.uk
 */


function kb_register_exhibitor_post_type() {

	$labels = array(
		'name'               => _x( 'Exhibitors', 'post type general name' ),
		'singular_name'      => _x( 'Exhibitor Item', 'post type singular name' ),
		'menu_name'          => _x( 'Exhibitors', 'admin Exhibitors' ),
		'name_admin_bar'     => _x( 'Exhibitors', 'add new on admin bar' ),
		'add_new'            => _x( 'Add New', 'Exhibitor' ),
		'add_new_item'       => __( 'Add New Exhibitor' ),
		'new_item'           => __( 'New Exhibitor' ),
		'edit_item'          => __( 'Edit Exhibitor' ),
		'view_item'          => __( 'View Exhibitor' ),
		'all_items'          => __( 'All Exhibitors' ),
		'search_items'       => __( 'Search Exhibitors' ),
		'parent_item_colon'  => __( 'Parent Exhibitor:' ),
		'not_found'          => __( 'No Exhibitors found.' ),
		'not_found_in_trash' => __( 'No Exhibitors found in Trash.' )
	);

	$args = array(

		'labels'				=> $labels,
		'public'				=> TRUE,
		'query_var'				=> TRUE,
		'rewrite'				=> array('slug' => 'exhibitor', 'with_front' => FALSE),
		'capability_type'		=> 'post',
		'taxonomies'			=> array(),
		'supports'				=> array('title', 'editor', 'thumbnail',),
		'has_archive'			=> TRUE,
		'show_in_nav_menus'		=> FALSE

	);

	register_post_type('exhibitor', $args );

}

add_action( 'init', 'kb_register_exhibitor_post_type' );



function kb_register_business_taxonomies() {

	register_taxonomy(
		'fair',
		'exhibitor',
		array(
			'labels' => array(
				'name' => 'Fair',
				'add_new_item' => 'Add New Fair',
				'new_item_name' => "New Fair"
			),
			'show_ui' => true,
			'show_tagcloud' => false,
			'hierarchical' => true,
			'show_in_nav_menus'	=> false

		)
	);

	

}

add_action( 'init', 'kb_register_business_taxonomies' );



?>