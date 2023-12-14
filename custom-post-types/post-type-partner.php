<?php

$labels = [
	'name'               => __( 'Partners', 'trt' ),
	'singular_name'      => __( 'Partner', 'trt' ),
	'add_new'            => _x( 'Add Partner', 'trt', ),
	'add_new_item'       => __( 'Add Partner', 'trt' ),
	'edit_item'          => __( 'Edit Partner', 'trt' ),
	'new_item'           => __( 'New Partner', 'trt' ),
	'view_item'          => __( 'View Partner', 'trt' ),
	'search_items'       => __( 'Search Partners', 'trt' ),
	'not_found'          => __( 'No Partners found', 'trt' ),
	'not_found_in_trash' => __( 'No Partners found in Trash', 'trt' ),
	'parent_item_colon'  => __( 'Parent Partner:', 'trt' ),
	'menu_name'          => __( 'Partners', 'trt' ),
];

$args = [
	'labels'              => $labels,
	'hierarchical'        => false,
	'description'         => '',
	'taxonomies'          => [ 'partner-type' ],
	'public'              => true,
	'show_ui'             => true,
	'show_in_menu'        => true,
	'show_in_admin_bar'   => true,
	'show_in_rest'		  => true,
	'menu_icon'           => 'dashicons-groups',
	'show_in_nav_menus'   => false,
	'publicly_queryable'  => true,
	'exclude_from_search' => false,
	'has_archive'         => false,
	'query_var'           => true,
	'can_export'          => true,
	'rewrite'             => true,
	'capability_type'     => 'post',
	'supports'            => [ 'title', 'thumbnail' ],
];
register_post_type( 'partner', $args );

$tax_labels = [
	'name' 				=> _x( 'Partner Types', 'trt' ),
	'singular_name' 	=> _x( 'Partner Type', 'trt' ),
	'search_items' 		=> __( 'Search Partner Types', 'trt' ),
	'all_items' 		=> __( 'All Partner Types', 'trt' ),
	'edit_item' 		=> __( 'Edit Partner Type', 'trt' ),
	'update_item' 		=> __( 'Update Partner Type', 'trt' ),
	'add_new_item' 		=> __( 'Add Partner Type', 'trt' ),
	'new_item_name' 	=> __( 'Create Partner Type', 'trt' ),
	'menu_name' 		=> __( 'Partner Types', 'trt' ),
	'parent_item'		=> __( 'Parent Partner Type:', 'trt' ),
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
register_taxonomy( 'partner-type', 'partner', $tax_args );
