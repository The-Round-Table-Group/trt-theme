<?php
// Template Name: Clients & Partners Template
$context = Timber::get_context();
$post = Timber::get_post();
$context['post'] = $post;

$context['clients_partners'] = Timber::get_posts([
    'post_type' => 'client',
    'posts_per_page' => -1,
    'orderby' => 'date',
    'order' => 'DESC'
]);

$templates = ['pages/clients-and-partners.twig'];
Timber::render( $templates, $context );
