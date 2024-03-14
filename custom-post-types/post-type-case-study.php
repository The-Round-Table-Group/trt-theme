<?php

$labels = [
	'name'               => __( 'Case Studies', 'trt' ),
	'singular_name'      => __( 'Case Study', 'trt' ),
	'add_new'            => _x( 'Add Case Study', 'trt', ),
	'add_new_item'       => __( 'Add Case Study', 'trt' ),
	'edit_item'          => __( 'Edit Case Study', 'trt' ),
	'new_item'           => __( 'New Case Study', 'trt' ),
	'view_item'          => __( 'View Case Study', 'trt' ),
	'search_items'       => __( 'Search Case Studies', 'trt' ),
	'not_found'          => __( 'No Case Studies found', 'trt' ),
	'not_found_in_trash' => __( 'No Case Studies found in Trash', 'trt' ),
	'parent_item_colon'  => __( 'Parent Case Study:', 'trt' ),
	'menu_name'          => __( 'Case Studies', 'trt' ),
];

$args = [
	'labels'              => $labels,
	'hierarchical'        => false,
	'description'         => '',
	'taxonomies'          => [],
	'public'              => true,
	'show_ui'             => true,
	'show_in_menu'        => true,
	'show_in_admin_bar'   => true,
	'show_in_rest'		  => true,
	'menu_icon'           => 'dashicons-category',
	'show_in_nav_menus'   => false,
	'publicly_queryable'  => true,
	'exclude_from_search' => false,
	'has_archive'         => false,
	'query_var'           => true,
	'can_export'          => true,
	'rewrite'             => true,
	'capability_type'     => 'post',
	'supports'            => [ 'title', 'thumbnail', 'editor' ],
];
register_post_type( 'case-study', $args );
