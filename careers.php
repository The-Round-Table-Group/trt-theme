<?php
// Template Name: Careers Template
$context = Timber::get_context();
$post = Timber::get_post();
$context['post'] = $post;

$context['careers_tax'] = Timber::get_terms([
    'taxonomy'   => 'career-tax',
    'orderby'    => 'name',
    'order'      => 'ASC',
    'hide_empty' => false
]);

$context['careers'] = Timber::get_posts([
    'post_type'      => 'career',
    'post_status'    => 'publish',
    'posts_per_page' => -1,
    'orderby'        => 'title',
    'order'          => 'ASC'
]);

$templates = ['pages/careers.twig'];
Timber::render( $templates, $context );
