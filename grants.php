<?php
/*
Plugin Name: Custom Post Type: Grants
Plugin URI: 
Description: Grants post type
Version: 1.0
Author: Michael W. Delaney
Author URI: 
License: MIT
*/
// Register Custom Post Type
function Grants_post_type() {
	$labels = array(
		'name'                  => _x( 'Grants', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Grant', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Grants', 'text_domain' ),
		'name_admin_bar'        => __( 'Grant', 'text_domain' ),
		'archives'              => __( 'Grants Archives', 'text_domain' ),
		'parent_item_colon'     => __( 'Grant Item:', 'text_domain' ),
		'all_items'             => __( 'All Grants', 'text_domain' ),
		'add_new_item'          => __( 'Add New Grant', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Grant', 'text_domain' ),
		'edit_item'             => __( 'Edit Grant', 'text_domain' ),
		'update_item'           => __( 'Update Grant', 'text_domain' ),
		'view_item'             => __( 'View Grant', 'text_domain' ),
		'search_items'          => __( 'Search Grant', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into Grant', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Grant', 'text_domain' ),
		'items_list'            => __( 'Grants list', 'text_domain' ),
		'items_list_navigation' => __( 'Grants list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Grant list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Grant', 'text_domain' ),
		'description'           => __( 'Grants', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', ),
		'taxonomies'            => array( 'category' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-yes',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'Grants', $args );
}
add_action( 'init', 'Grants_post_type', 0 );
