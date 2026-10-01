<?php
/**
 * Furniture Carpenter Lite: Block Patterns
 *
 * @since Furniture Carpenter Lite 1.0
 */

 /**
  * Get patterns content.
  *
  * @param string $file_name Filename.
  * @return string
  */
function furniture_carpenter_lite_get_pattern_content( $file_name ) {
	ob_start();
	include get_theme_file_path( '/patterns/' . $file_name . '.php' );
	$output = ob_get_contents();
	ob_end_clean();
	return $output;
}

/**
 * Registers block patterns and categories.
 *
 * @since Furniture Carpenter Lite 1.0
 *
 * @return void
 */
function furniture_carpenter_lite_register_block_patterns() {

	$patterns = array(
		'header-default' => array(
			'title'      => __( 'Default header', 'furniture-carpenter-lite' ),
			'categories' => array( 'furniture-carpenter-lite-headers' ),
			'blockTypes' => array( 'parts/header' ),
		),
		'footer-default' => array(
			'title'      => __( 'Default footer', 'furniture-carpenter-lite' ),
			'categories' => array( 'furniture-carpenter-lite-footers' ),
			'blockTypes' => array( 'parts/footer' ),
		),
		'home-banner' => array(
			'title'      => __( 'Home Banner', 'furniture-carpenter-lite' ),
			'categories' => array( 'furniture-carpenter-lite-banner' ),
		),
		'project-section' => array(
			'title'      => __( 'Project Section', 'furniture-carpenter-lite' ),
			'categories' => array( 'furniture-carpenter-lite-product-section' ),
		),
		'latest-blog-section' => array(
			'title'      => __( 'Latest Blog Section', 'furniture-carpenter-lite' ),
			'categories' => array( 'furniture-carpenter-lite-latest-blog-section' ),
		),
		'primary-sidebar' => array(
			'title'    => __( 'Primary Sidebar', 'furniture-carpenter-lite' ),
			'categories' => array( 'furniture-carpenter-lite-sidebars' ),
		),
		'hidden-404' => array(
			'title'    => __( '404 content', 'furniture-carpenter-lite' ),
			'categories' => array( 'furniture-carpenter-lite-pages' ),
		),
		'post-listing-single-column' => array(
			'title'    => __( 'Post Single Column', 'furniture-carpenter-lite' ),
			//'inserter' => false,
			'categories' => array( 'furniture-carpenter-lite-query' ),
		),
		'post-listing-two-column' => array(
			'title'    => __( 'Post Two Column', 'furniture-carpenter-lite' ),
			//'inserter' => false,
			'categories' => array( 'furniture-carpenter-lite-query' ),
		),
		'post-listing-three-column' => array(
			'title'    => __( 'Post Three Column', 'furniture-carpenter-lite' ),
			//'inserter' => false,
			'categories' => array( 'furniture-carpenter-lite-query' ),
		),
		'post-listing-four-column' => array(
			'title'    => __( 'Post Four Column', 'furniture-carpenter-lite' ),
			//'inserter' => false,
			'categories' => array( 'furniture-carpenter-lite-query' ),
		),
		'feature-post-column' => array(
			'title'    => __( 'Feature Post Column', 'furniture-carpenter-lite' ),
			//'inserter' => false,
			'categories' => array( 'furniture-carpenter-lite-query' ),
		),
		'comment-section-1' => array(
			'title'    => __( 'Comment Section 1', 'furniture-carpenter-lite' ),
			'categories' => array( 'furniture-carpenter-lite-comment-sections' ),
		),
		'cover-with-post-title' => array(
			'title'    => __( 'Cover With Post Title', 'furniture-carpenter-lite' ),
			'categories' => array( 'furniture-carpenter-lite-banner-sections' ),
		),
		'theme-button' => array(
			'title'    => __( 'Theme Button', 'furniture-carpenter-lite' ),
			'categories' => array( 'furniture-carpenter-lite-theme-button' ),
		),
	);

	$block_pattern_categories = array(
		'furniture-carpenter-lite-footers' => array( 'label' => __( 'Footers Section', 'furniture-carpenter-lite' ) ),
		'furniture-carpenter-lite-headers' => array( 'label' => __( 'Headers Section', 'furniture-carpenter-lite' ) ),
		'furniture-carpenter-lite-pages'   => array( 'label' => __( 'Pages', 'furniture-carpenter-lite' ) ),
		'furniture-carpenter-lite-query'   => array( 'label' => __( 'Query', 'furniture-carpenter-lite' ) ),
		'furniture-carpenter-lite-sidebars'   => array( 'label' => __( 'Sidebars', 'furniture-carpenter-lite' ) ),
		'furniture-carpenter-lite-banner'   => array( 'label' => __( 'Slider Section', 'furniture-carpenter-lite' ) ),
		'furniture-carpenter-lite-project-section'   => array( 'label' => __( 'Project Section', 'furniture-carpenter-lite' ) ),
		'furniture-carpenter-lite-latest-blog-section'   => array( 'label' => __( 'Latest Blog Section', 'furniture-carpenter-lite' ) ),
		'furniture-carpenter-lite-comment-section'   => array( 'label' => __( 'Comment Section', 'furniture-carpenter-lite' ) ),
		'furniture-carpenter-lite-theme-button'   => array( 'label' => __( 'Theme Button Section', 'furniture-carpenter-lite' ) ),
	);

	/**
	 * Filters the theme block pattern categories.
	 *
	 * @since Furniture Carpenter Lite 1.0
	 *
	 * @param array[] $block_pattern_categories {
	 *     An associative array of block pattern categories, keyed by category name.
	 *
	 *     @type array[] $properties {
	 *         An array of block category properties.
	 *
	 *         @type string $label A human-readable label for the pattern category.
	 *     }
	 * }
	 */
	$block_pattern_categories = apply_filters( 'furniture_carpenter_lite_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}

	/**
	 * Filters the theme block patterns.
	 *
	 * @since Furniture Carpenter Lite 1.0
	 *
	 * @param array $block_patterns List of block patterns by name.
	 */
	$patterns = apply_filters( 'furniture_carpenter_lite_block_patterns', $patterns );

	foreach ( $patterns as $block_pattern => $pattern ) {
		$pattern['content'] = furniture_carpenter_lite_get_pattern_content( $block_pattern );
		register_block_pattern(
			'furniture-carpenter-lite/' . $block_pattern,
			$pattern
		);
	}
}
add_action( 'init', 'furniture_carpenter_lite_register_block_patterns', 9 );
