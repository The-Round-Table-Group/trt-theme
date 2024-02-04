<?php
// This functions file is for all custom blocks added via ACF
// Reference: https://advancedcustomfields.com/resources/acf_register_block_type/

if( function_exists('acf_register_block_type') ) :
	include 'custom-block-callback.php'; // pass-off to let Timber render the blocks

	// accessible and inline button block
	$button_block = [
		'name' => 'button-block',
		'title' => __( 'Button Block', 'trt' ),
		'description' => __( 'Creates an inline button with text/background colors of your choice. Limited to theme colors for consistency.', 'trt' ),
		'render_callback' => 'custom_block_callback',
		'category' => 'trt-blocks',
		'align' => 'wide',
		'icon' => 'insert',
		'mode' => 'auto',
		'supports' => [ 'mode' => true ],
		'keywords' => [ 'trt', 'block', 'button', 'a', 'href', 'link', 'url' ]
	];
	acf_register_block_type( $button_block );

    $image_text_block = [
		'name' => 'image-text-block',
		'title' => __( 'Image/Text Block', 'trt' ),
		'description' => __( 'Creates a split block with image left/right and text left/right options.', 'trt' ),
		'render_callback' => 'custom_block_callback',
		'category' => 'trt-blocks',
		'align' => 'wide',
		'icon' => 'align-left',
		'mode' => 'auto',
		'supports' => [ 'mode' => true ],
		'keywords' => [ 'trt', 'block', 'split', 'image', 'text' ]
	];
	acf_register_block_type( $image_text_block );

    // $ = [
	// 	'name' => '',
	// 	'title' => __( '', 'trt' ),
	// 	'description' => __( '', 'trt' ),
	// 	'render_callback' => 'custom_block_callback',
	// 	'category' => 'trt-blocks',
	// 	'align' => 'wide',
	// 	'icon' => 'insert',
	// 	'mode' => 'auto',
	// 	'supports' => [ 'mode' => true ],
	// 	'keywords' => [ 'trt', 'block' ]
	// ];
	// acf_register_block_type( $ );
endif;
