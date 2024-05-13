<?php

$labels = [
	'name'               => __( 'Clients/Partners', 'trt' ),
	'singular_name'      => __( 'Client/Partner', 'trt' ),
	'add_new'            => _x( 'Add Client/Partner', 'trt', ),
	'add_new_item'       => __( 'Add Client/Partner', 'trt' ),
	'edit_item'          => __( 'Edit Client/Partner', 'trt' ),
	'new_item'           => __( 'New Client/Partner', 'trt' ),
	'view_item'          => __( 'View Client/Partner', 'trt' ),
	'search_items'       => __( 'Search Clients/Partners', 'trt' ),
	'not_found'          => __( 'No Clients/Partners found', 'trt' ),
	'not_found_in_trash' => __( 'No Clients/Partners found in Trash', 'trt' ),
	'parent_item_colon'  => __( 'Parent Client/Partner:', 'trt' ),
	'menu_name'          => __( 'Clients/Partners', 'trt' ),
];

$args = [
	'labels'              => $labels,
	'hierarchical'        => false,
	'description'         => '',
	'taxonomies'          => [ 'client-tax' ],
	'public'              => false,
	'show_ui'             => true,
	'show_in_menu'        => true,
	'show_in_admin_bar'   => true,
	'show_in_rest'		  => true,
	'menu_icon'           => 'dashicons-groups',
	'show_in_nav_menus'   => false,
	'publicly_queryable'  => false,
	'exclude_from_search' => false,
	'has_archive'         => false,
	'query_var'           => true,
	'can_export'          => true,
	'rewrite'             => false,
	'capability_type'     => 'post',
	'supports'            => [ 'title', 'thumbnail' ],
];
register_post_type( 'client', $args );

$tax_labels = [
	'name' 				=> _x( 'Client/Partner Types', 'trt' ),
	'singular_name' 	=> _x( 'Client/Partner Type', 'trt' ),
	'search_items' 		=> __( 'Search Client/Partner Types', 'trt' ),
	'all_items' 		=> __( 'All Client/Partner Types', 'trt' ),
	'edit_item' 		=> __( 'Edit Client/Partner Type', 'trt' ),
	'update_item' 		=> __( 'Update Client/Partner Type', 'trt' ),
	'add_new_item' 		=> __( 'Add Client/Partner Type', 'trt' ),
	'new_item_name' 	=> __( 'Create Client/Partner Type', 'trt' ),
	'menu_name' 		=> __( 'Client/Partner Types', 'trt' ),
	'parent_item'		=> __( 'Parent Client/Partner Type:', 'trt' ),
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
	'rewrite'			=> false,
];
register_taxonomy( 'client-tax', 'client', $tax_args );
