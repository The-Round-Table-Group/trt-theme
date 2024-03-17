<?php
// This functions file is for all custom blocks added via ACF
// Reference: https://advancedcustomfields.com/resources/acf_register_block_type/

if( function_exists('acf_register_block_type') ) :
	include 'custom-block-callback.php'; // pass-off to let Timber render the blocks

	// inline button block
	$button_block = [
		'name' => 'button-block',
		'title' => __( 'Button Block', 'trt' ),
		'description' => __( 'Creates an inline button with text/background colors of your choice. Limited to theme colors for consistency.', 'trt' ),
		'render_callback' => 'custom_block_callback',
		'category' => 'trt-blocks',
		'align' => 'wide',
		'icon' => 'button',
		'mode' => 'auto',
		'supports' => [ 'mode' => true ],
		'keywords' => [ 'trt', 'block', 'button', 'a', 'href', 'link', 'url' ]
	];
	acf_register_block_type( $button_block );

    // split image and text block
    $image_text_block = [
		'name' => 'image-text-block',
		'title' => __( 'Image/Text Block', 'trt' ),
		'description' => __( 'Creates a split block with image left/right and text options.', 'trt' ),
		'render_callback' => 'custom_block_callback',
		'category' => 'trt-blocks',
		'align' => 'wide',
		'icon' => 'align-left',
		'mode' => 'auto',
		'supports' => [ 'mode' => true ],
		'keywords' => [ 'trt', 'block', 'split', 'image', 'text' ]
	];
	acf_register_block_type( $image_text_block );

    // call to action block
    $cta_block = [
		'name' => 'call-to-action-block',
		'title' => __( 'Call To Action Block', 'trt' ),
		'description' => __( 'Global CTA or option for custom content.', 'trt' ),
		'render_callback' => 'custom_block_callback',
		'category' => 'trt-blocks',
		'align' => 'wide',
		'icon' => 'welcome-view-site',
		'mode' => 'auto',
		'supports' => [ 'mode' => true ],
		'keywords' => [ 'trt', 'block', 'cta', 'call', 'action' ]
	];
	acf_register_block_type( $cta_block );

    // centered, short header block
    $short_width_header = [
		'name' => 'short-width-header',
		'title' => __( 'Short Width Header', 'trt' ),
		'description' => __( 'H2 or H3 header, centered, with ~35% viewport width.', 'trt' ),
		'render_callback' => 'custom_block_callback',
		'category' => 'trt-blocks',
		'align' => 'wide',
		'icon' => 'fullscreen-exit-alt',
		'mode' => 'auto',
		'supports' => [ 'mode' => true ],
		'keywords' => [ 'trt', 'block', 'short', 'width', 'header', 'h2', 'h3' ]
	];
	acf_register_block_type( $short_width_header );

    // client logo slider block
    $client_slider = [
		'name' => 'client-slider',
		'title' => __( 'Client Slider', 'trt' ),
		'description' => __( 'Slider with client logos, infinite loop. Optional custom slider.', 'trt' ),
		'render_callback' => 'custom_block_callback',
		'category' => 'trt-blocks',
		'align' => 'wide',
		'icon' => 'slides',
		'mode' => 'auto',
		'supports' => [ 'mode' => true ],
		'keywords' => [ 'trt', 'block', 'client', 'slider', 'logo', 'carousel', 'custom' ]
	];
	acf_register_block_type( $client_slider );

    // text box (multi-paragraph)
    $text_box_block = [
		'name' => 'text-box-block',
		'title' => __( 'Text Box', 'trt' ),
		'description' => __( 'Bordered text box with multiple paragraphs.', 'trt' ),
		'render_callback' => 'custom_block_callback',
		'category' => 'trt-blocks',
		'align' => 'wide',
		'icon' => 'editor-paste-text',
		'mode' => 'auto',
		'supports' => [ 'mode' => true ],
		'keywords' => [ 'trt', 'block', 'text', 'box', 'paragraph', 'bordered' ]
	];
	acf_register_block_type( $text_box_block );

    // countup stats block
    $countup_stats = [
		'name' => 'countup-stats',
		'title' => __( 'CountUp Stats', 'trt' ),
		'description' => __( 'Stat with a start/end value that counts up when scrolled into view.', 'trt' ),
		'render_callback' => 'custom_block_callback',
		'category' => 'trt-blocks',
		'align' => 'wide',
		'icon' => 'chart-line',
		'mode' => 'auto',
		'supports' => [ 'mode' => true ],
		'keywords' => [ 'trt', 'block', 'count', 'up', 'stat', 'counter' ]
	];
	acf_register_block_type( $countup_stats );


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
