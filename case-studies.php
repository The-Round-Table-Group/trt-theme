<?php
// Template Name: Case Studies Template
$context = Timber::get_context();
$post = Timber::get_post();
$context['post'] = $post;

$context['case_studies'] = Timber::get_posts([
    'post_type'      => 'case-study',
    'post_status'    => 'publish',
    'posts_per_page' => -1,
    'orderby'        => 'date',
    'order'          => 'DESC'
]);

$templates = ['pages/case-studies.twig'];
Timber::render( $templates, $context );
