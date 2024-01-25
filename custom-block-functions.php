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

    // $accordion_group = [
	// 	'name' => 'accordion-group',
	// 	'title' => __( 'Accordion Group', 'trt' ),
	// 	'description' => __( 'Creates 1 or more accordions with a dropdown that folds into the title.', 'trt' ),
	// 	'render_callback' => 'custom_block_callback',
	// 	'category' => 'trt-blocks',
	// 	'align' => 'wide',
	// 	'icon' => 'insert',
	// 	'mode' => 'auto',
	// 	'supports' => [ 'mode' => true ],
	// 	'keywords' => [ 'trt', 'block', 'accordion', 'dropdown', 'faq', 'question', 'answer']
	// ];
	// acf_register_block_type( $accordion_group );
endif;