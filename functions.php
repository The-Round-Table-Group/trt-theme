<?php

/**
 * Load Timber
 * Initialize Timber
 * Set the directory Twig loads from
*/
require_once(__DIR__ . '/vendor/autoload.php');
Timber\Timber::init();
Timber::$locations = __DIR__ . '/templates';

// create a new site class and extend the Core Site class from Timber
class TRTSite extends Timber\Site {

	function __construct() {
		// Action Hooks //
		add_action( 'init', [ $this, 'register_post_types' ] );
        add_action( 'acf/init', [ $this, 'render_custom_acf_blocks' ] );
		add_action( 'after_setup_theme', [ $this, 'after_setup_theme' ] );
		add_action( 'wp_enqueue_scripts', [ $this, 'enqueue_scripts' ] );
		add_action( 'admin_head', [ $this, 'admin_head_css' ] );
		add_action( 'admin_menu', [ $this, 'admin_menu_cleanup' ] );
		add_action( 'wp_default_scripts', [ $this, 'remove_jqmigrate' ] );

		// Filter Hooks //
        add_filter( 'block_categories', [ $this, 'trt_block_category' ], 10, 2 );
		add_filter( 'timber_context', [ $this, 'add_to_context' ] );
		add_filter( 'manage_pages_columns', [ $this, 'remove_pages_count_columns' ] );

		parent::__construct();
	}

	// hide nags and cleanup admin bar
	function admin_head_css() {
		?>
		<style type="text/css">
			.update-nag,
			#wp-admin-bar-comments,
			#wp-admin-bar-updates,
			#wp-admin-bar-new-content #comments,
            .column-comments,
            .components-editor-notices__dismissible,
			#adminmenu .update-plugins { display: none !important; }

            /* fix text caret not showing up */
            .wp-block { caret-color: #fff !important; }
            .wp-block .acf-block-fields { caret-color: #000 !important; }
		</style>
		<?php
	}

	// enqueue styles & scripts
	function enqueue_scripts() {
		$version = filemtime( get_stylesheet_directory() . '/style.css' );
		wp_enqueue_style( 'trt-css', get_stylesheet_directory_uri() . '/style.css', [], $version );

        wp_enqueue_script( 'aos', get_template_directory_uri() . '/assets/js/packages/aos.js', [], '3.0.0' );
        wp_enqueue_script( 'cookie', get_template_directory_uri() . '/assets/js/packages/cookie.js', [], '1.4.1' );
        wp_enqueue_script( 'slider', get_template_directory_uri() . '/assets/js/packages/slider.js', ['jquery'], '1.8.1' );

        wp_enqueue_script( 'trt-js', get_template_directory_uri() . '/assets/js/site-dist.js', ['jquery', 'aos', 'cookie', 'slider'], $version );

        // remove inline wp styles from frontend
        if ( ! is_admin() ) {
            wp_dequeue_style( 'global-styles' );
        }

        if ( is_admin() ) {
            wp_enqueue_style( 'trt-block-css', get_stylesheet_directory_uri() . '/block-editor-styles.css', [], $version );
        }
	}

	// remove jqmigrate from frontend
	function remove_jqmigrate( $scripts ) {
		if ( ! is_admin() && isset( $scripts->registered['jquery'] ) ) {
			$script = $scripts->registered['jquery'];

			if ( $script->deps ) {
				$script->deps = array_diff( $script->deps, ['jquery-migrate'] );
			}
		}
	}

	// custom context helper functions
	function add_to_context( $context ) {
		$context['site']           	= $this;
		$context['date'] 			= date('F j, Y');
		$context['date_year']      	= date('Y');
		$context['is_front_page']	= is_front_page();
        $context['options']         = get_fields('option');

		return $context;
	}

	// theme support and options page
	function after_setup_theme() {
		add_theme_support( 'html5' );
		add_theme_support( 'post-thumbnails' );
        add_theme_support( 'align-wide' );
		add_theme_support( 'disable-custom-colors' );
        add_theme_support( 'editor-styles' );
		add_editor_style( 'block-editor-styles.css' );

        if (function_exists('acf_add_options_page')) {
            $parent = acf_add_options_page([
				'page_title' => 'Site Options',
                'menu_title' => 'Site Options',
                'menu_slug'  => 'site-options',
                'capability' => 'edit_posts',
                'redirect'   => false
			]);

            // Social Media Links
			$child = acf_add_options_sub_page([
				'page_title'  => __('Social Media'),
				'menu_title'  => __('Social Media'),
				'parent_slug' => $parent['menu_slug'],
			]);

            // Navigation Menus
			$child = acf_add_options_sub_page([
				'page_title'  => __('Nav Menus'),
				'menu_title'  => __('Nav Menus'),
				'parent_slug' => $parent['menu_slug'],
			]);
        }
	}

    // registers and renders our custom acf blocks
	function render_custom_acf_blocks() {
		require 'custom-block-functions.php';
	}

	// creates a custom category for our theme-specific blocks
	function trt_block_category( $categories, $post ) {
		return array_merge(
			$categories, [[
                'slug'  => 'trt-blocks',
                'title' => 'Custom Blocks'
			]]
		);
	}

	// add custom post types
	function register_post_types() {
		include_once( 'custom-post-types/post-type-news.php' );
        include_once( 'custom-post-types/post-type-event.php' );
	}

	// remove unused items from admin menu
	function admin_menu_cleanup() {
		remove_menu_page( 'edit.php' );
		remove_menu_page( 'edit-comments.php' );
	}

	// removed comment column from posts pages
	function remove_pages_count_columns( $defaults ) {
		unset($defaults['comments']);
		return $defaults;
	}
}

// create a new instance
new TRTSite();

/**
 * Global Functions
 *
 * Functions that return a value need the filter or action hook added with it below
 * Functions that do not return a value are called directly in a template
*/

// Remove gravity forms styles
add_filter( 'gform_disable_css', '__return_true' );

// Move our custom acf options page below the dashboard tab
function custom_menu_order( $menu_ord ) {
	if ( ! $menu_ord ) {
		return true;
	}

	$menu = 'site-options';

	// remove from current menu
	$menu_ord = array_diff( $menu_ord, [$menu] );

	// append after index[0]
	array_splice( $menu_ord, 1, 0, [$menu] );

	return $menu_ord;
}
add_filter( 'custom_menu_order', 'custom_menu_order' );
add_filter( 'menu_order', 'custom_menu_order' );
