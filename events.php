<?php
// Template Name: Events Template
$context = Timber::get_context();
$post = Timber::get_post();
$context['post'] = $post;

$context['news'] = Timber::get_posts([
    'post_type' => 'event',
    'posts_per_page' => -1,
    'orderby' => 'date',
    'order' => 'DESC'
]);

$templates = ['pages/events.twig'];
Timber::render( $templates, $context );