<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package tradespress
 * @since 1.0.0
 */

/**
 * Enqueue the CSS files.
 *
 * @since 1.0.0
 *
 * @return void
 */
function tradespress_styles() {
	wp_enqueue_style(
		'tradespress-style',
		get_stylesheet_uri(),
		[],
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'tradespress_styles' );

function tradespress_theme_support() {
    add_theme_support( 'editor-styles' );
    add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'tradespress_theme_support' );

function tradespress_register_button_styles() {
    register_block_style(
        'core/button',
        array(
            'name'  => 'cta-primary',
            'label' => __('CTA Primary', 'tradespress'),
        )
    );

    register_block_style(
        'core/button',
        array(
            'name'  => 'cta-outline',
            'label' => __('CTA Outline', 'tradespress'),
        )
    );
}
add_action('init', 'tradespress_register_button_styles');

add_filter('show_admin_bar', '__return_false');

function tradespress_scripts() {
    wp_enqueue_script(
        'header-scroll',
        get_theme_file_uri('/assets/js/header-scroll.js'),
        array(),
        null,
        true
    );
}

add_action('wp_enqueue_scripts', 'tradespress_scripts');