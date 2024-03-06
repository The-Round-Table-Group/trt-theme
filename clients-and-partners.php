<?php
// Template Name: Clients & Partners Template
$context = Timber::get_context();
$post = Timber::get_post();
$context['post'] = $post;

$context['client_tax'] = Timber::get_terms([
    'taxonomy'   => 'client-tax',
    'orderby'    => 'name',
    'order'      => 'DESC',
    'hide_empty' => false
]);

$context['clients_and_partners'] = Timber::get_posts([
    'post_type'      => 'client',
    'posts_per_page' => -1,
    'orderby'        => 'menu_order',
    'facetwp'        => true
]);

$templates = ['pages/clients-and-partners.twig'];
Timber::render( $templates, $context );
