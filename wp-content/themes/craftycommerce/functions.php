<?php
/**
 * CraftyCommerce functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage CraftyCommerce
 * @since CraftyCommerce 1.0
 */


if ( ! function_exists( 'craftycommerce_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since CraftyCommerce 1.0
	 *
	 * @return void
	 */
	function craftycommerce_support() {
		add_filter( 'woocommerce_get_image_size_thumbnail', function( $size ) {
			return array(
				'width'  => 800,
				'height' => 800,
				'crop'   => 1,
			);
		} );
		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Experimental support for adding blocks inside nav menus
		add_theme_support( 'block-nav-menus' );

		// Add support for experimental link color control.
		add_theme_support( 'experimental-link-color' );
	}

endif;

add_action( 'after_setup_theme', 'craftycommerce_support' );

if ( ! function_exists( 'craftycommerce_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since CraftyCommerce 1.0
	 *
	 * @return void
	 */
	function craftycommerce_styles() {
		// Enqueue theme stylesheet.
		wp_enqueue_style(
			'craftycommerce-style',
			get_template_directory_uri() . '/style.css',
			array(),
			craftycommerce_file_version( '/style.css' )
		);
	}

endif;

add_action( 'wp_enqueue_scripts', 'craftycommerce_styles' );

if ( ! function_exists( 'craftycommerce_admin_editor_styles' ) ) :

	/**
	 * Enqueue admin editor styles.
	 *
	 * @since 1.0
	 *
	 * @return void
	 */
	function craftycommerce_admin_editor_styles() {
		// Enqueue theme stylesheet.
		wp_enqueue_style(
			'craftycommerce-admin-style',
			get_template_directory_uri() . '/assets/css/editor.css',
			array(),
			craftycommerce_file_version( '/assets/css/editor.css' )
		);

	}

endif;

add_action( 'admin_enqueue_scripts', 'craftycommerce_admin_editor_styles' );

/**
 * Get file version with respect to file modified date.
 */
function craftycommerce_file_version( $file_path ) {
	// create my own version codes
	return gmdate('ymd-Gis', filemtime( get_theme_file_path( $file_path ) ) );
}

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';

/**
 * Load Theme About Page
 */
require get_theme_file_path( '/inc/about-admin/theme-info.php' );

/**
 * Load TGMPA
 */
require get_parent_theme_file_path( '/inc/tgmpa/tgmpa.php' );