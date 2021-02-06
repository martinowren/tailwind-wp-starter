<?php
/**
 * Theme setup
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 */
require_once __DIR__ . '/src/helpers/assets.php';
require_once __DIR__ . '/src/helpers/filters.php';

/**
 * Register the theme assets.
 *
 * @return void
 */
add_action(
	'wp_enqueue_scripts',
	function () {
		wp_enqueue_script(
			'dist/main.js',
			theme_asset_complete_uri('dist/main.js'),
			[],
			filemtime(theme_asset_complete_path('dist/main.js')),
			true
		);
		wp_enqueue_style(
			'dist/style.css',
			theme_asset_complete_uri('dist/style.css'),
			[],
			filemtime(theme_asset_complete_path('dist/style.css'))
		);
	},
	100
);

/**
 * Register the initial theme setup.
 *
 * @return void
 */
add_action(
	'after_setup_theme',
	function () {
		/**
		 * Enable features from Soil when plugin is activated
		 * @link https://roots.io/plugins/soil/
		 */
		add_theme_support('soil', [
			'clean-up',
			'disable-trackbacks',
			'google-analytics' => [
				'should_load' => true,
				'anonymize_ip' => false,
				'google_analytics_id' => 'UA-XXXYYY',
			],
			'js-to-footer',
			'nav-walker',
			'nice-search',
			'relative-urls',
		]);

		/**
		 * Enable plugins to manage the document title
		 * @link https://developer.wordpress.org/reference/functions/add_theme_support/#title-tag
		 */
		add_theme_support('title-tag');

		/**
		 * Register navigation menus
		 * @link https://developer.wordpress.org/reference/functions/register_nav_menus/
		 */
		register_nav_menus([
			'primary_navigation' => __('Primary Navigation', 'replace-me-lang'),
		]);

		/**
		 * Enable post thumbnails
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');

		/**
		 * Add theme support for Wide Alignment
		 * @link https://wordpress.org/gutenberg/handbook/designers-developers/developers/themes/theme-support/#wide-alignment
		 */
		add_theme_support('align-wide');

		/**
		 * Enable responsive embeds
		 * @link https://wordpress.org/gutenberg/handbook/designers-developers/developers/themes/theme-support/#responsive-embedded-content
		 */
		add_theme_support('responsive-embeds');

		/**
		 * Enable HTML5 markup support
		 * @link https://developer.wordpress.org/reference/functions/add_theme_support/#html5
		 */
		add_theme_support('html5', [
			'caption',
			'comment-form',
			'comment-list',
			'gallery',
			'search-form',
			'script',
			'style',
		]);

		/**
		 * Enable selective refresh for widgets in customizer
		 * @link https://developer.wordpress.org/themes/advanced-topics/customizer-api/#theme-support-in-sidebars
		 */
		add_theme_support('customize-selective-refresh-widgets');

		/**
		 * Enable theme color palette support
		 * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#block-color-palettes
		 */
		add_theme_support('editor-color-palette', [
			[
				'name' => __('Primary', 'replace-me-lang'),
				'slug' => 'primary',
				'color' => '#525ddc',
			],
		]);
	},
	20
);
