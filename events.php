<?php
// Template Name: Events Template
$context = Timber::get_context();
$post = Timber::get_post();
$context['post'] = $post;

$context['events'] = Timber::get_posts([
    'post_type'      => 'event',
    'post_status'    => 'publish',
    'posts_per_page' => -1,
    'orderby'        => 'date',
    'order'          => 'DESC'
]);

$templates = ['pages/events.twig'];
Timber::render( $templates, $context );
