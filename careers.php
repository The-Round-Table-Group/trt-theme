<?php
// Template Name: Careers Template
$context = Timber::get_context();
$post = Timber::get_post();
$context['post'] = $post;

$context['careers'] = Timber::get_posts([
    'post_type'      => 'career',
    'post_status'    => 'publish',
    'posts_per_page' => -1,
    'orderby'        => 'title',
    'order'          => 'ASC'
]);

$templates = ['pages/careers.twig'];
Timber::render( $templates, $context );
