<?php
/**
 * Banner content and display rules.
 *
 * Everything an editor is likely to change — copy, links, which screens the
 * banner skips — lives here so the markup and CSS can stay untouched.
 *
 * @package filmmaker-production-studio
 */

defined( 'ABSPATH' ) || exit;

/**
 * Text, links and buttons shown in the banner.
 *
 * @return array
 */
function filmmaker_production_studio_banner_config() {
	$config = array(
		'eyebrow' => esc_html__( 'BlockWPThemes', 'filmmaker-production-studio' ),
		'title'   => esc_html__( 'Filmmaker Production Studio', 'filmmaker-production-studio' ),
		'text'    => esc_html__( 'Thank you for choosing Filmmaker Production Studio. Go Pro for the full library, extra templates and priority support — or take the bundle and get every BlockWPThemes theme at once.', 'filmmaker-production-studio' ),
		'logo'    => FILMMAKER_PRODUCTION_STUDIO_BANNER_URI . 'assets/images/blockwpthemes-logo.png',
		'buttons' => array(
			array(
				'label' => esc_html__( 'Buy Now', 'filmmaker-production-studio' ),
				'url'   => 'https://blockwpthemes.com/product/filmmaker-wordpress-theme/?utm_source=wordpress&utm_medium=theme&utm_campaign=free_admin_page',
				'style' => 'accent',
			),
			array(
				'label' => esc_html__( 'Buy Bundle', 'filmmaker-production-studio' ),
				'url'   => 'https://blockwpthemes.com/product/wordpress-theme-bundle/?utm_source=wordpress&utm_medium=theme&utm_campaign=free_admin_page',
				'style' => 'dark',
			),
			array(
				'label' => esc_html__( 'Live Demo', 'filmmaker-production-studio' ),
				'url'   => 'https://blockwpthemes.com/demo/bwp-filmmaker-pro/?utm_source=wordpress&utm_medium=theme&utm_campaign=free_admin_page',
				'style' => 'outline',
			),
		),
	);

	/**
	 * Filters the banner content.
	 *
	 * @param array $config Banner config.
	 */
	return apply_filters( 'filmmaker_production_studio_banner_config', $config );
}

/**
 * Whether the banner should render on the current admin screen.
 *
 * Skipped for users who cannot act on the offer, for AJAX and iframe based
 * screens where a banner would break the layout, and for the block editor and
 * site editor, which take over the whole viewport anyway.
 *
 * @return bool
 */
function filmmaker_production_studio_banner_is_visible() {
	if ( ! is_admin() || wp_doing_ajax() ) {
		return false;
	}

	if ( ! current_user_can( 'edit_theme_options' ) ) {
		return false;
	}

	$skip = array(
		'customize.php',
		'site-editor.php',
		'post.php',
		'post-new.php',
		'media-upload.php',
		'async-upload.php',
	);

	$pagenow = isset( $GLOBALS['pagenow'] ) ? $GLOBALS['pagenow'] : '';

	/**
	 * Filters the admin screens the banner is hidden on.
	 *
	 * @param array  $skip    Screen file names.
	 * @param string $pagenow Current screen file name.
	 */
	$skip = apply_filters( 'filmmaker_production_studio_banner_skip_screens', $skip, $pagenow );

	if ( in_array( $pagenow, $skip, true ) ) {
		return false;
	}

	return true;
}
