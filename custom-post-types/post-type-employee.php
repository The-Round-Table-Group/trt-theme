<?php

$labels = [
	'name'               => __( 'Team Members', 'trt' ),
	'singular_name'      => __( 'Team Member', 'trt' ),
	'add_new'            => _x( 'Add Team Member', 'trt', ),
	'add_new_item'       => __( 'Add Team Member', 'trt' ),
	'edit_item'          => __( 'Edit Team Member', 'trt' ),
	'new_item'           => __( 'New Team Member', 'trt' ),
	'view_item'          => __( 'View Team Member', 'trt' ),
	'search_items'       => __( 'Search Team Members', 'trt' ),
	'not_found'          => __( 'No Team Members found', 'trt' ),
	'not_found_in_trash' => __( 'No Team Members found in Trash', 'trt' ),
	'parent_item_colon'  => __( 'Parent Team Member:', 'trt' ),
	'menu_name'          => __( 'Team Members', 'trt' ),
];

$args = [
	'labels'              => $labels,
	'hierarchical'        => false,
	'description'         => '',
	'taxonomies'          => [ 'employee-department' ],
	'public'              => false,
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
	'supports'            => [ 'title', 'thumbnail' ],
];
register_post_type( 'employee', $args );

$tax_labels = [
	'name' 				=> _x( 'Departments', 'trt' ),
	'singular_name' 	=> _x( 'Department', 'trt' ),
	'search_items' 		=> __( 'Search Departments', 'trt' ),
	'all_items' 		=> __( 'All Departments', 'trt' ),
	'edit_item' 		=> __( 'Edit Department', 'trt' ),
	'update_item' 		=> __( 'Update Department', 'trt' ),
	'add_new_item' 		=> __( 'Add Department', 'trt' ),
	'new_item_name' 	=> __( 'Create Department', 'trt' ),
	'menu_name' 		=> __( 'Departments', 'trt' ),
	'parent_item'		=> __( 'Parent Department:', 'trt' ),
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
register_taxonomy( 'employee-department', 'employee', $tax_args );
