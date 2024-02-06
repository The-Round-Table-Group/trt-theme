<?php

$labels = [
	'name'               => __( 'Events', 'trt' ),
	'singular_name'      => __( 'Event', 'trt' ),
	'add_new'            => _x( 'Add Event', 'trt', ),
	'add_new_item'       => __( 'Add Event', 'trt' ),
	'edit_item'          => __( 'Edit Event', 'trt' ),
	'new_item'           => __( 'New Event', 'trt' ),
	'view_item'          => __( 'View Event', 'trt' ),
	'search_items'       => __( 'Search Events', 'trt' ),
	'not_found'          => __( 'No Events found', 'trt' ),
	'not_found_in_trash' => __( 'No Events found in Trash', 'trt' ),
	'parent_item_colon'  => __( 'Parent Event:', 'trt' ),
	'menu_name'          => __( 'Events', 'trt' ),
];

$args = [
	'labels'              => $labels,
	'hierarchical'        => false,
	'description'         => '',
	'taxonomies'          => [ 'event-tax' ],
	'public'              => true,
	'show_ui'             => true,
	'show_in_menu'        => true,
	'show_in_admin_bar'   => true,
	'show_in_rest'		  => true,
	'menu_icon'           => 'dashicons-calendar',
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
register_post_type( 'event', $args );

$tax_labels = [
	'name' 				=> _x( 'Event Types', 'trt' ),
	'singular_name' 	=> _x( 'Event Type', 'trt' ),
	'search_items' 		=> __( 'Search Event Types', 'trt' ),
	'all_items' 		=> __( 'All Event Types', 'trt' ),
	'edit_item' 		=> __( 'Edit Event Type', 'trt' ),
	'update_item' 		=> __( 'Update Event Type', 'trt' ),
	'add_new_item' 		=> __( 'Add Event Type', 'trt' ),
	'new_item_name' 	=> __( 'Create Event Type', 'trt' ),
	'menu_name' 		=> __( 'Event Types', 'trt' ),
	'parent_item'		=> __( 'Parent Event Type:', 'trt' ),
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
register_taxonomy( 'event-tax', 'event', $tax_args );
