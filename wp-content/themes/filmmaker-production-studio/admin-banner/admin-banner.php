<?php
/**
 * Admin banner bootstrap.
 *
 * The only file the theme needs to require. It sets up the paths used by the
 * rest of the module and pulls in the config and the renderer, so adding or
 * removing a piece of the banner only ever touches this folder.
 *
 * @package filmmaker-production-studio
 */

defined( 'ABSPATH' ) || exit;

define( 'FILMMAKER_PRODUCTION_STUDIO_BANNER_DIR', trailingslashit( __DIR__ ) );
define( 'FILMMAKER_PRODUCTION_STUDIO_BANNER_URI', trailingslashit( get_theme_file_uri( 'admin-banner' ) ) );

require_once FILMMAKER_PRODUCTION_STUDIO_BANNER_DIR . 'inc/banner-config.php';
require_once FILMMAKER_PRODUCTION_STUDIO_BANNER_DIR . 'inc/banner-assets.php';
require_once FILMMAKER_PRODUCTION_STUDIO_BANNER_DIR . 'inc/banner-render.php';
