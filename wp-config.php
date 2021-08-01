<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'test-site' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:8889' );

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
define( 'AUTH_KEY',         'Nb*$PS nDU*N~b?ti9BcGVaP*}fuPFBkgEj0|akR5X@9[.d4~g?e5E^2a~CcNTL?' );
define( 'SECURE_AUTH_KEY',  'Vc5Ug 5G%[OiHrFBzKMnB1{zN]VM+S|DivSo@Ln2W+eO)pVgk4S,tl=Ux6lxPkWu' );
define( 'LOGGED_IN_KEY',    'J:+NQqNT^!T&v*/_*SkBmfzEKg%8{M_MISALXY!joRh9$[C&LJwDskfYvSFDPd}X' );
define( 'NONCE_KEY',        '<B [mn#KRAr:}$)uY2F):3z?m{ :<$hj^VnO@tyG2tqiJ%C)4ehsREVHE8Oyhq!W' );
define( 'AUTH_SALT',        '3>3%i:4@HQPC_}R-kxXzqdd&%-h|0Ub9,G^<~G{T-fRZ^w6`9`2K:iH|JRIvJ]@d' );
define( 'SECURE_AUTH_SALT', '/?%Guz#[FSNP@A!s[,}&8x>?f<QH^7|u=EsI7DKdFR0kRGt](.0-eJ5$4B2v]D(=' );
define( 'LOGGED_IN_SALT',   '20X-zNOC7c=B)Y}1F[W&m7zfm]CPk*dE[s~D mc/rj+kA@N`v X.Vf3`uDOv3kW}' );
define( 'NONCE_SALT',       'Dus&BVlx w:ce.8=~Asvr@sn,rd3}C|8y>bWO<z=l.*K)zs .hXv+X6$6C$%N3uZ' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
