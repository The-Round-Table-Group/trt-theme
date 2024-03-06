<?php
// Global Custom Post Type Controller
$context = Timber::get_context();
$post = Timber::get_post();
$context['post'] = $post;
the_post();

// only setup for single posts
if( is_singular() ) :
	if( $post->post_parent != 0 ) {
		$context['is_child'] = true;
	} else {
		$context['is_parent'] = true;
	}
endif;

$context['news'] = Timber::get_posts([
    'post_type'      => 'news',
    'post_status'    => 'publish',
    'posts_per_page' => 3,
    'orderby'        => 'date',
    'order'          => 'DESC'
]);

// attempt to render a corresponding view (.twig) file that matches any of the below patterns
Timber::render([
	'single-' . $post->ID . '.twig',
	'single-' . $post->post_type . '.twig',
	'single.twig'
], $context);
