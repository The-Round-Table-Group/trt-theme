<?php
// Template Name: News Template
$context = Timber::get_context();
$post = Timber::get_post();
$context['post'] = $post;

$context['news_tax'] = Timber::get_terms([
    'taxonomy'   => 'news-tax',
    'orderby'    => 'name',
    'order'      => 'DESC',
    'hide_empty' => false
]);

$context['news'] = Timber::get_posts([
    'post_type'      => 'news',
    'post_status'    => 'publish',
    'posts_per_page' => -1,
    'orderby'        => 'date',
    'order'          => 'DESC'
]);

$templates = ['pages/news.twig'];
Timber::render( $templates, $context );
