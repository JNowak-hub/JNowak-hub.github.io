<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:8888' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('WP_ALLOW_REPAIR', true);
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '64X7&HZSh,UzO0Kd5s9vC2U#izcROilPdKxG&Bn7{&rhUBxI3,mMYbUZU)(o}ulK' );
define( 'SECURE_AUTH_KEY',  '/ds&Thz+,>) eh<+`H)K?nFYD~k<Z<1 1c!v/^,!^:JV#yw!z{o|b9Du=lASxW|T' );
define( 'LOGGED_IN_KEY',    'j&;y 0``P_z&wA({0HHHV3~(XA/gk7`6BSH(_AF75cV!(H:g CGG3%7p*-.Ehk0M' );
define( 'NONCE_KEY',        'DO2:4a6jPD?yEqB:KE1qpFNO[tHECHSP!A{p4+N.k5qe4e2HklL017b A?PaezM>' );
define( 'AUTH_SALT',        '=t`o zD2Tn|ic5f?Jq!1T-nUl36_.pz4nm9FB7vcALb^>LFN7?hwYsm<I[=OTKRJ' );
define( 'SECURE_AUTH_SALT', '}$;yjM.8.GSdmunTAx$q75IrJ;4kQ_wN{Ln^wi1N,mDscs!-D3Iv<R`walT+~1Xi' );
define( 'LOGGED_IN_SALT',   '>{BQr<^?f}>wc4[}u(& P|f<Ls5^/#xGB]>BlzLEOj_ruK`R-Sf&jU<Dw%w](+<c' );
define( 'NONCE_SALT',       ')&oP}TtXJ<Mpd&Ylqr:<;}e*qb9)~[jY/B7xM?XN4mlm/YIs8``iGh@Z}dshOPO=' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
