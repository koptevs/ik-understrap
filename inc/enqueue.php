<?php
/**
 * Understrap enqueue scripts
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'ikunderstrap_scripts' ) ) {

	/**
	 * Load theme's JavaScript and CSS sources.
	 */
	function ikunderstrap_scripts() {
		// Get the theme data.
		$the_theme     = wp_get_theme();
		$theme_version = $the_theme->get( 'Version' );
		// wp_die($theme_version);
		// wp_die($the_theme);
		// $bootstrap_version = get_theme_mod( 'understrap_bootstrap_version', 'bootstrap4' );
		$suffix = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';
		// wp_die( $suffix );
		// Grab asset urls.
		$theme_styles = "/css/theme{$suffix}.css";

		// $theme_scripts = "/js/main{$suffix}.js";
		$theme_scripts = '/js/main.js';

		// if ( 'bootstrap4' === $bootstrap_version ) {
		// $theme_styles  = "/css/theme-bootstrap4{$suffix}.css";
		// $theme_scripts = "/js/theme-bootstrap4{$suffix}.js";
		// }

		$css_version = $theme_version . '.' . filemtime( get_template_directory() . $theme_styles );
		// wp_die( $css_version );
		wp_enqueue_style( 'ikunderstrap-styles', get_template_directory_uri() . $theme_styles, array(), $css_version );
		// wp_die( get_template_directory_uri(  ) );
		// wp_die( get_theme_file_uri( '/some/test.jpg' ) );

		wp_enqueue_style( 'ikunderstrap-font-open-sans', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap' );
		wp_enqueue_style( 'ikunderstrap-font-jost', 'https://fonts.googleapis.com/css2?family=Jost:wght@400;500;700&display=swap' );

		wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
		wp_enqueue_style( 'font-bs', '//cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css' );

		// wp_enqueue_script( 'jquery' );

		$js_version = $theme_version . '.' . filemtime( get_template_directory() . $theme_scripts );
		// wp_die($js_version);

		// wp_enqueue_script( 'glightbox', get_template_directory_uri() . '/js/glightbox.min.js', array(), $js_version, true );

		// wp_enqueue_script( 'ikunderstrap-scripts', get_template_directory_uri() . $theme_scripts, array('glightbox'), $js_version, true );
		wp_enqueue_script(
			'ikunderstrap-scripts',
			get_template_directory_uri() . $theme_scripts,
			array(),
			$js_version,
			true
		);

		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
} // End of if function_exists( 'understrap_scripts' ).

add_action( 'wp_enqueue_scripts', 'ikunderstrap_scripts' );
