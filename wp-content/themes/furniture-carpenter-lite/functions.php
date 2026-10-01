<?php
/**
 * Furniture Carpenter Lite functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Furniture Carpenter Lite
 */

if ( ! defined( 'FURNITURE_CARPENTER_LITE_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'FURNITURE_CARPENTER_LITE_VERSION', wp_get_theme()->get( 'Version' ) );
}

if ( ! function_exists( 'furniture_carpenter_lite_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function furniture_carpenter_lite_setup() {

		load_theme_textdomain( 'furniture-carpenter-lite', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		add_theme_support( 'align-wide' );

		add_theme_support( 'woocommerce' );

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Add support for core custom logo.
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 192,
				'width'       => 192,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);

		// Experimental support for adding blocks inside nav menus
		add_theme_support( 'block-nav-menus' );

		// Add support for experimental link color control.
		add_theme_support( 'experimental-link-color' );

	}
endif;
add_action( 'after_setup_theme', 'furniture_carpenter_lite_setup' );

function furniture_carpenter_lite_scripts() {
    wp_enqueue_style('furniture-carpenter-lite-style', get_stylesheet_uri(), array() );
    wp_enqueue_script('jquery-wow', get_template_directory_uri() . '/js/wow.js', array('jquery'), FURNITURE_CARPENTER_LITE_VERSION );
    wp_enqueue_style('animate-css', get_template_directory_uri() . '/css/animate.css', array(), FURNITURE_CARPENTER_LITE_VERSION );

    wp_enqueue_style( 'owl.carousel-style', get_template_directory_uri().'/css/owl.carousel.css', array(), FURNITURE_CARPENTER_LITE_VERSION );
	wp_enqueue_script( 'owl.carousel-js', get_template_directory_uri(). '/js/owl.carousel.js', array('jquery') ,FURNITURE_CARPENTER_LITE_VERSION,true);

    //font-awesome
    wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/font-awesome/css/all.css', array(), '6.7.0' );

    // Custom scripts should depend 
    wp_enqueue_script(
        'furniture-carpenter-lite-custom-scripts', 
        get_template_directory_uri() . '/js/custom.js', 
        array('jquery',), 
        FURNITURE_CARPENTER_LITE_VERSION, // Consistent versioning
        true 
    );
    
    wp_style_add_data( 'furniture-carpenter-lite-style', 'rtl', 'replace' );
}
add_action( 'wp_enqueue_scripts', 'furniture_carpenter_lite_scripts' );

/**
 * Enqueue block editor style
 */
function furniture_carpenter_lite_block_editor_styles() {

	wp_enqueue_style( 'furniture-carpenter-lite-block-patterns-style-editor', get_theme_file_uri( '/css/block-editor.css' ), false, '1.0', 'all' );
}
add_action( 'enqueue_block_editor_assets', 'furniture_carpenter_lite_block_editor_styles' );


function furniture_carpenter_lite_init_setup() {

	// Add block patterns
	require get_template_directory() . '/inc/block-patterns.php';
	
	require_once get_theme_file_path( '/inc/customizer.php' );

	/**
     * Demo Import
     */
    require get_parent_theme_file_path( '/inc/get-started/demo-import-settings.php' );

    if ( ! defined( 'FURNITURE_CARPENTER_LITE_FREE_THEME_URL' ) ) {
        define( 'FURNITURE_CARPENTER_LITE_FREE_THEME_URL', 'https://www.seothemesexpert.com/products/furniture-carpenter-lite' );
    }
    if ( ! defined( 'FURNITURE_CARPENTER_LITE_PRO_THEME_URL' ) ) {
        define( 'FURNITURE_CARPENTER_LITE_PRO_THEME_URL', 'https://www.seothemesexpert.com/products/woodworking-website-template' );
    }
    if ( ! defined( 'FURNITURE_CARPENTER_LITE_FREE_DOC_URL' ) ) {
        define( 'FURNITURE_CARPENTER_LITE_FREE_DOC_URL', 'https://demo.seothemesexpert.com/documentation/woodworking-workshop-pro/' );
    }
    if ( ! defined( 'FURNITURE_CARPENTER_LITE_DEMO_THEME_URL' ) ) {
        define( 'FURNITURE_CARPENTER_LITE_DEMO_THEME_URL', 'https://demo.seothemesexpert.com/woodworking-workshop-pro/' );
    }
    if ( ! defined( 'FURNITURE_CARPENTER_LITE_RATE_THEME_URL' ) ) {
        define( 'FURNITURE_CARPENTER_LITE_RATE_THEME_URL', 'https://wordpress.org/support/theme/furniture-carpenter-lite/reviews/' );
    }
    if ( ! defined( 'FURNITURE_CARPENTER_LITE_SUPPORT_THEME_URL' ) ) {
        define( 'FURNITURE_CARPENTER_LITE_SUPPORT_THEME_URL', 'https://wordpress.org/support/theme/furniture-carpenter-lite/' );
    }
    if ( ! defined( 'FURNITURE_CARPENTER_LITE_THEME_BUNDLE_URL' ) ) {
        define( 'FURNITURE_CARPENTER_LITE_THEME_BUNDLE_URL', 'https://www.seothemesexpert.com/products/wordpress-theme-bundle' );
    }

}
add_action( 'after_setup_theme', 'furniture_carpenter_lite_init_setup' );


// Show Admin Notice
function furniture_carpenter_lite_promo_notice() {
    if (get_option('furniture_carpenter_lite_notice_dismissed')) {
        return;
    }

    if (isset($_GET['page']) && $_GET['page'] === 'furniturecarpenterlite-wizard') {
        return;
    }

    $furniture_carpenter_lite_theme = wp_get_theme();
    $furniture_carpenter_lite_theme_title = $furniture_carpenter_lite_theme->get( 'Name' );
    $furniture_carpenter_lite_theme_version = $furniture_carpenter_lite_theme->get( 'Version' );

    ?>
    <div class="notice furniture-carpenter-lite-notice is-dismissible">
        <div>
            <h3>
                <span><?php echo esc_html( '(Version: ' . $furniture_carpenter_lite_theme_version . ')' ); ?></span><br>
                <?php esc_html_e( 'Thank you for choosing,', 'furniture-carpenter-lite'); ?>
                <?php echo esc_html( $furniture_carpenter_lite_theme_title ); ?> <?php esc_html_e( '!!!', 'furniture-carpenter-lite'); ?>
            </h3>
            <p><?php esc_html_e( 'Welcome! You can now easily start building your website using our beautiful and user-friendly themes. No need to worry about setup — with our one-click demo importer, your site can look just like the demo in minutes. All the tools and information you need to get started are right here!', 'furniture-carpenter-lite'); ?></p>
            <a class="button button-primary furniture-carpenter-lite-buy-now" href="<?php echo esc_url(admin_url('themes.php?page=furniturecarpenterlite-wizard')); ?>" target="_blank">
                <?php esc_html_e( 'Get Started', 'furniture-carpenter-lite') ?>
            </a>
            <a class="button button-primary furniture-carpenter-lite-bundle-button" target="_blank" href="<?php echo esc_url( FURNITURE_CARPENTER_LITE_THEME_BUNDLE_URL ); ?>">
                <?php echo esc_html__( 'Get All 70+ Themes @ $79', 'furniture-carpenter-lite' ); ?>
            </a>
        </div>
        <div class="furniture-carpenter-lite-image-wrap">
            <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/screenshot.png'); ?>">
        </div>
        <canvas id="furniture-carpenter-lite-notice-confetti"></canvas>
    </div>
    <?php
}
add_action('admin_notices', 'furniture_carpenter_lite_promo_notice');

add_action('wp_ajax_furniture_carpenter_lite_dismiss_notice', 'furniture_carpenter_lite_dismiss_notice');
function furniture_carpenter_lite_dismiss_notice() {
    update_option('furniture_carpenter_lite_notice_dismissed', true);
    wp_send_json_success();
}

add_action('after_switch_theme', 'furniture_carpenter_lite_reset_notice_on_activation');
function furniture_carpenter_lite_reset_notice_on_activation() {
    delete_option('furniture_carpenter_lite_notice_dismissed');
}

function furniture_carpenter_lite_enqueue_admin_assets() {
    wp_enqueue_script(
        'furniture-carpenter-lite-confetti',
        get_template_directory_uri() . '/inc/get-started/assets/js/confetti/confetti.min.js',
        ['jquery'],
        null,
        true
    );

    wp_enqueue_script(
        'furniture-carpenter-lite-notice-confetti-js',
        get_template_directory_uri() . '/inc/get-started/assets/js/plugin-update-notice.js',
        ['furniture-carpenter-lite-confetti'],
        null,
        true
    );

    wp_enqueue_script(
        'furniture-carpenter-lite-notice-dismiss',
        get_template_directory_uri() . '/inc/get-started/assets/js/notice-dismiss.js',
        ['jquery'],
        null,
        true
    );
}
add_action('admin_enqueue_scripts', 'furniture_carpenter_lite_enqueue_admin_assets');