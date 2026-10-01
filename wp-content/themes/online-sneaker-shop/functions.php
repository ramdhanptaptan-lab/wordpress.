<?php
/**
 * Online Sneaker Shop functions
 */

if ( ! function_exists( 'online_sneaker_shop_setup' ) ) :
function online_sneaker_shop_setup() {

    load_theme_textdomain( 'online-sneaker-shop', get_template_directory() . '/languages' );

	// Set up the WordPress core custom background feature.
    add_theme_support( 'custom-background', apply_filters( 'online_sneaker_shop_custom_background_args', array(
	    'default-color' => 'ffffff',
	    'default-image' => '',
    ) ) );

	/**
	 * About Theme Function
	 */
	require get_theme_file_path( '/about-theme/about-theme.php' );

	/**
	 * Customizer
	 */
	require get_template_directory() . '/inc/customizer.php';

	/**
	 * TGM
	 */
	require get_template_directory() . '/tgm.php';
}
endif; 
add_action( 'after_setup_theme', 'online_sneaker_shop_setup' );

if ( ! function_exists( 'online_sneaker_shop_styles' ) ) :
	function online_sneaker_shop_styles() {
		// Register theme stylesheet.
		wp_register_style('online-sneaker-shop-style',
			get_template_directory_uri() . '/style.css',array(),
			wp_get_theme()->get( 'Version' )
		);

		wp_enqueue_script('online-sneaker-shop-js',
        	get_template_directory_uri() . '/assets/js/effects.js',array(),
        	wp_get_theme()->get('Version'),true 
   		 );

		wp_enqueue_script( 'wow-jquery',
		 get_template_directory_uri() . '/assets/js/wow.js', array('jquery'),'' ,true );

		wp_enqueue_style( 'animate-style',
		 get_template_directory_uri().'/assets/css/animate.css' );

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'online-sneaker-shop-style' );

		wp_enqueue_script( 'online-sneaker-shop-custom-script', get_theme_file_uri( '/assets/js/custom-script.js' ), array( 'jquery' ), true );
	}
endif;
add_action( 'wp_enqueue_scripts', 'online_sneaker_shop_styles' );