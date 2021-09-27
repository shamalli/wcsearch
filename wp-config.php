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
define( 'DB_NAME', 'wordpress_search' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'n;rq/N]4!D0:ThZ2K4$&T(zq4yn{|#@I&/g(ayS@|[h(n5TETSfp)B5;^jwWxt=u' );
define( 'SECURE_AUTH_KEY',  'Bnq/Sk!D5:L3FU~#x=b.5YIGk_/xW4LYEU/#PPx#OM0a:0-3(!3Z_=1t}[oS,TDD' );
define( 'LOGGED_IN_KEY',    '_?;S}8!?yvuu#+?5_:]h2D1Bq-)Xam/4Btfc;*?>z08F0u@i0aQ>wSYQw5JD3UW}' );
define( 'NONCE_KEY',        'mAf|bw*ZF<H4jxU+|Go<$,RzTP56v6m*..)QaQth8ZSLngS>3^f]^8X>!ULPmw[5' );
define( 'AUTH_SALT',        'V:cb=2VMRMG.7z_|]^d^n.*xuy)C~#aC}Be2eOcTPx~TamAVjiGpLW,wk5Ha{kZz' );
define( 'SECURE_AUTH_SALT', 'hrgmL,av>UbqDpD$rH0Iq+:7hwM;[._+znH`4xSiwlc@Qsa7=hVHGl&O5klpbSE|' );
define( 'LOGGED_IN_SALT',   'm[,.QWds?_[Q`E7`OD,<}LQS&7D5rbeE|7vETzsI.@.Tbuj#i(_$}t<T?1]pzjf>' );
define( 'NONCE_SALT',       '?sH;zwy>khsy%R(&:FT{Mpmp+S~vm<e?P^mh|^^o2dvkHW!=G{^*lCSy{C.m1t!>' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
