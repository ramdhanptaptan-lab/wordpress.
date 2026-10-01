<?php
/**
 * Banner styles and script.
 *
 * @package filmmaker-production-studio
 */

defined( 'ABSPATH' ) || exit;

/**
 * Enqueue the banner CSS and JS on the screens that show the banner.
 *
 * Versions come off the file mtime so an edit is never served from a stale
 * browser cache.
 */
function filmmaker_production_studio_banner_enqueue_assets() {
	if ( ! filmmaker_production_studio_banner_is_visible() ) {
		return;
	}

	$css_path = FILMMAKER_PRODUCTION_STUDIO_BANNER_DIR . 'assets/css/admin-banner.css';
	$js_path  = FILMMAKER_PRODUCTION_STUDIO_BANNER_DIR . 'assets/js/admin-banner.js';

	wp_enqueue_style(
		'filmmaker-production-studio-admin-banner',
		FILMMAKER_PRODUCTION_STUDIO_BANNER_URI . 'assets/css/admin-banner.css',
		array(),
		file_exists( $css_path ) ? filemtime( $css_path ) : wp_get_theme()->get( 'Version' )
	);

	wp_enqueue_script(
		'filmmaker-production-studio-admin-banner',
		FILMMAKER_PRODUCTION_STUDIO_BANNER_URI . 'assets/js/admin-banner.js',
		array(),
		file_exists( $js_path ) ? filemtime( $js_path ) : wp_get_theme()->get( 'Version' ),
		true
	);
}
add_action( 'admin_enqueue_scripts', 'filmmaker_production_studio_banner_enqueue_assets' );
