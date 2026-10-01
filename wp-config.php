<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_wordpress_tugas' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'rsLz1m:I*W`94Ow3N7F*dNv]>|fin2{~i!fo3>xNpzak7?+,7bN%$gcJQSfPtRM^' );
define( 'SECURE_AUTH_KEY',  'CD)!9!nIF1=ZVd<{+cy5SR=3(Mg_A{/OX wor)f/=cC|g_,a(!+81{/x86)wUwk0' );
define( 'LOGGED_IN_KEY',    '5Ehyjd4wY4_lw5]QJ;:=i_/|8OwVX]vX$piwd!4%NG@A/FN`j!I|YG6y %|v[nll' );
define( 'NONCE_KEY',        ']0~,e|Y6(>(Yk_p%R? #nvLh>V1nwi_W=],^:@n8luWsNmq42+d8Lj1uKlGf!Y=t' );
define( 'AUTH_SALT',        'mOk8HRCf~WJt,BH3>*N(>.Rv*dFH,$S=sKc_4R5v8sFiJWl9K_(eK67b6Lx6-dep' );
define( 'SECURE_AUTH_SALT', '|Ua|s,ArZ<(Zu{dtW)9DxBT0$@dzr@6/}scS]DA(^T{1s48Ed+!TL9;Xz:r4vjE[' );
define( 'LOGGED_IN_SALT',   '4P91A</>{lGPD38U k.7WF6c#Kq0b_m5~UXc^!!(Ddd0wAd]VSh*N,-a|lEpW1OS' );
define( 'NONCE_SALT',       '.D3H*XZ^AWK@+9+9,{Q)fhcylXTuZg[LeJ`,}D)M@8l[qmM~}Rf>jN9=<HW_CxDF' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
