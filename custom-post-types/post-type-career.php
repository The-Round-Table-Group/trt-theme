<?php

$labels = [
	'name'               => __( 'Careers', 'trt' ),
	'singular_name'      => __( 'Career', 'trt' ),
	'add_new'            => _x( 'Add Career', 'trt', ),
	'add_new_item'       => __( 'Add Career', 'trt' ),
	'edit_item'          => __( 'Edit Career', 'trt' ),
	'new_item'           => __( 'New Career', 'trt' ),
	'view_item'          => __( 'View Career', 'trt' ),
	'search_items'       => __( 'Search Careers', 'trt' ),
	'not_found'          => __( 'No Careers found', 'trt' ),
	'not_found_in_trash' => __( 'No Careers found in Trash', 'trt' ),
	'parent_item_colon'  => __( 'Parent Career:', 'trt' ),
	'menu_name'          => __( 'Careers', 'trt' ),
];

$args = [
	'labels'              => $labels,
	'hierarchical'        => false,
	'description'         => '',
	'taxonomies'          => [ 'career-tax' ],
	'public'              => true,
	'show_ui'             => true,
	'show_in_menu'        => true,
	'show_in_admin_bar'   => true,
	'show_in_rest'		  => true,
	'menu_icon'           => 'dashicons-businessperson',
	'show_in_nav_menus'   => false,
	'publicly_queryable'  => true,
	'exclude_from_search' => false,
	'has_archive'         => false,
	'query_var'           => true,
	'can_export'          => true,
	'rewrite'             => true,
	'capability_type'     => 'post',
	'supports'            => [ 'title', 'thumbnail', 'editor', 'author' ],
];
register_post_type( 'career', $args );

$tax_labels = [
	'name' 				=> _x( 'Career Types', 'trt' ),
	'singular_name' 	=> _x( 'Career Type', 'trt' ),
	'search_items' 		=> __( 'Search Career Types', 'trt' ),
	'all_items' 		=> __( 'All Career Types', 'trt' ),
	'edit_item' 		=> __( 'Edit Career Type', 'trt' ),
	'update_item' 		=> __( 'Update Career Type', 'trt' ),
	'add_new_item' 		=> __( 'Add Career Type', 'trt' ),
	'new_item_name' 	=> __( 'Create Career Type', 'trt' ),
	'menu_name' 		=> __( 'Career Types', 'trt' ),
	'parent_item'		=> __( 'Parent Career Type:', 'trt' ),
];

$tax_args = [
	'hierarchical' 	    => true,
	'labels' 	    	=> $tax_labels,
	'show_ui' 	    	=> true,
	'show_admin_column' => true,
	'has_archive'		=> false,
	'query_var'	    	=> true,
	'show_in_rest'		=> true,
	'rewrite'			=> true,
];
register_taxonomy( 'career-tax', 'career', $tax_args );
