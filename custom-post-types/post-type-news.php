<?php

$labels = [
	'name'               => __( 'News Posts', 'trt' ),
	'singular_name'      => __( 'News', 'trt' ),
	'add_new'            => _x( 'Add News Post', 'trt', ),
	'add_new_item'       => __( 'Add News Post', 'trt' ),
	'edit_item'          => __( 'Edit News Post', 'trt' ),
	'new_item'           => __( 'New News Post', 'trt' ),
	'view_item'          => __( 'View News Post', 'trt' ),
	'search_items'       => __( 'Search News Posts', 'trt' ),
	'not_found'          => __( 'No News Posts found', 'trt' ),
	'not_found_in_trash' => __( 'No News Posts found in Trash', 'trt' ),
	'parent_item_colon'  => __( 'Parent News Post:', 'trt' ),
	'menu_name'          => __( 'News Posts', 'trt' ),
];

$args = [
	'labels'              => $labels,
	'hierarchical'        => false,
	'description'         => '',
	'taxonomies'          => [ 'news-tax' ],
	'public'              => true,
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
	'supports'            => [ 'title', 'thumbnail', 'editor', 'author' ],
];
register_post_type( 'news', $args );

$tax_labels = [
	'name' 				=> _x( 'News Types', 'trt' ),
	'singular_name' 	=> _x( 'News Type', 'trt' ),
	'search_items' 		=> __( 'Search News Types', 'trt' ),
	'all_items' 		=> __( 'All News Types', 'trt' ),
	'edit_item' 		=> __( 'Edit News Type', 'trt' ),
	'update_item' 		=> __( 'Update News Type', 'trt' ),
	'add_new_item' 		=> __( 'Add News Type', 'trt' ),
	'new_item_name' 	=> __( 'Create News Type', 'trt' ),
	'menu_name' 		=> __( 'News Types', 'trt' ),
	'parent_item'		=> __( 'Parent News Type:', 'trt' ),
];

$tax_args = [
	'hierarchical' 	    => true,
	'labels' 	    	=> $tax_labels,
    'public' 	    	=> false,
	'show_ui' 	    	=> true,
	'show_admin_column' => true,
	'has_archive'		=> false,
	'query_var'	    	=> true,
	'show_in_rest'		=> true,
	'rewrite'			=> true,
];
register_taxonomy( 'news-tax', 'news', $tax_args );
