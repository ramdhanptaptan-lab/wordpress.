<?php
/**
 * Theme functions and definitions
 *
 * @package ShopZone
 */

/**
 * After setup theme hook
 */
function shopzone_theme_setup(){
    /*
     * Make child theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    load_child_theme_textdomain( 'shopzone' );	
}
add_action( 'after_setup_theme', 'shopzone_theme_setup' );

/**
 * Load assets.
 */

function shopzone_theme_css() {
	wp_enqueue_style( 'shopzone-parent-theme-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'shopzone_theme_css', 99);

require get_stylesheet_directory() . '/theme-functions/controls/class-customize.php';

/**
 * Import Options From Parent Theme
 *
 */
function shopzone_parent_theme_options() {
	$shopzone_mods = get_option( 'theme_mods_shopire' );
	if ( ! empty( $shopzone_mods ) ) {
		foreach ( $shopzone_mods as $shopzone_mod_k => $shopzone_mod_v ) {
			set_theme_mod( $shopzone_mod_k, $shopzone_mod_v );
		}
	}
}
add_action( 'after_switch_theme', 'shopzone_parent_theme_options' );

/**
 * Sample implementation of the Custom Header feature
 */
function shopzone_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'shopzone_custom_header_args', array(
		'default-image'          => '',
		'default-text-color'     => 'ffffff',
		'width'                  => 1920,
		'height'                 => 200,
		'flex-height'            => true,
		'wp-head-callback'       => 'shopire_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'shopzone_custom_header_setup' );