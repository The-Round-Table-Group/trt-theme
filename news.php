<?php
// Template Name: News Template
$context = Timber::get_context();
$post = Timber::get_post();
$context['post'] = $post;

$context['news'] = Timber::get_posts([
    'post_type' => 'news',
    'posts_per_page' => -1,
    'post_status' => 'publish',
    'orderby' => 'date',
    'order' => 'DESC'
]);

$templates = ['pages/news.twig'];
Timber::render( $templates, $context );
