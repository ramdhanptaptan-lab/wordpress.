<?php
function filmmaker_production_studio_enqueue_assets() {
    $style_path = get_theme_file_path('style.css');

    // Version off the file mtime so edits are never served from a stale cache.
    wp_enqueue_style(
        'filmmaker-production-studio-style',
        get_theme_file_uri('style.css'),
        array(),
        file_exists($style_path) ? filemtime($style_path) : wp_get_theme()->get('Version')
    );

}
add_action('wp_enqueue_scripts', 'filmmaker_production_studio_enqueue_assets');

add_action('after_setup_theme', function () {
    add_editor_style( array( 'editor-style.css', 'style.css' ) );
});

// Menus in Admin menu
function filmmaker_production_studio_setup() {
    load_theme_textdomain( 'filmmaker-production-studio', get_template_directory() . '/languages' );

    add_theme_support( 'menus' );
    add_theme_support( 'custom-logo', array(
        'height'      => 33,
        'width'       => 93,
        'flex-width'  => true,
        'flex-height' => true,
    ) );

    register_nav_menus( array(
        'primary' => esc_html__( 'Primary Menu', 'filmmaker-production-studio' ),
    ) );
}
add_action( 'after_setup_theme', 'filmmaker_production_studio_setup' );

// Register Custom Pattern Category
function filmmaker_production_studio_register_custom_pattern_cat() {
	register_block_pattern_category(
		'filmmaker-production-studio',
		array( 'label' => esc_html__( 'Filmmaker Production Studio', 'filmmaker-production-studio' ) )
	);
}
add_action( 'init', 'filmmaker_production_studio_register_custom_pattern_cat' );

/**
 * Button variants used across the theme. The CSS lives in style.css, which is
 * loaded on the front end and in the editor, so each style only needs to point
 * at that handle.
 */
function filmmaker_production_studio_register_block_styles() {
	if ( ! function_exists( 'register_block_style' ) ) {
		return;
	}

	$button_styles = array(
		'fps-light'    => esc_html__( 'Bone', 'filmmaker-production-studio' ),
		'fps-ghost'    => esc_html__( 'Ghost', 'filmmaker-production-studio' ),
		'fps-ember'    => esc_html__( 'Ember', 'filmmaker-production-studio' ),
		'fps-textlink' => esc_html__( 'Text Link', 'filmmaker-production-studio' ),
		'fps-small'    => esc_html__( 'Small', 'filmmaker-production-studio' ),
	);

	foreach ( $button_styles as $name => $label ) {
		register_block_style(
			'core/button',
			array(
				'name'         => $name,
				'label'        => $label,
				'style_handle' => 'filmmaker-production-studio-style',
			)
		);
	}
}
add_action( 'init', 'filmmaker_production_studio_register_block_styles' );

/**
 * Admin banner promoting the Pro theme. All of its files live in
 * /admin-banner/, so this single require is the only theme-level touch point.
 */
require_once get_theme_file_path( 'admin-banner/admin-banner.php' );
