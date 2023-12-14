<?php

$labels = [
	'name'               => __( 'Articles', 'trt' ),
	'singular_name'      => __( 'Article', 'trt' ),
	'add_new'            => _x( 'Add Article', 'trt', ),
	'add_new_item'       => __( 'Add Article', 'trt' ),
	'edit_item'          => __( 'Edit Article', 'trt' ),
	'new_item'           => __( 'New Article', 'trt' ),
	'view_item'          => __( 'View Article', 'trt' ),
	'search_items'       => __( 'Search Articles', 'trt' ),
	'not_found'          => __( 'No Articles found', 'trt' ),
	'not_found_in_trash' => __( 'No Articles found in Trash', 'trt' ),
	'parent_item_colon'  => __( 'Parent Article:', 'trt' ),
	'menu_name'          => __( 'Articles', 'trt' ),
];

$args = [
	'labels'              => $labels,
	'hierarchical'        => false,
	'description'         => '',
	'taxonomies'          => [ 'article-type' ],
	'public'              => false,
	'show_ui'             => true,
	'show_in_menu'        => true,
	'show_in_admin_bar'   => true,
	'show_in_rest'		  => true,
	'menu_icon'           => 'dashicons-edit',
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
register_post_type( 'article', $args );

$tax_labels = [
	'name' 				=> _x( 'Article Types', 'trt' ),
	'singular_name' 	=> _x( 'Article Type', 'trt' ),
	'search_items' 		=> __( 'Search Article Types', 'trt' ),
	'all_items' 		=> __( 'All Article Types', 'trt' ),
	'edit_item' 		=> __( 'Edit Article Type', 'trt' ),
	'update_item' 		=> __( 'Update Article Type', 'trt' ),
	'add_new_item' 		=> __( 'Add Article Type', 'trt' ),
	'new_item_name' 	=> __( 'Create Article Type', 'trt' ),
	'menu_name' 		=> __( 'Article Types', 'trt' ),
	'parent_item'		=> __( 'Parent Article Type:', 'trt' ),
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
register_taxonomy( 'article-type', 'article', $tax_args );
