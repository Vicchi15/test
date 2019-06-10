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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'test_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ']wz_F[43VY/:{fwqP^&YmUY#6G9*fo,mj?fiG%W*GGe84r1ZM@2JlUh:QA&q3~hu' );
define( 'SECURE_AUTH_KEY',  ',0dXRWfR%yR+_>-rm_O;]oI7YeMw9m:/&>*B3r@vJ4K5/qcB7xNDeLOzukQaXvm$' );
define( 'LOGGED_IN_KEY',    ']:p~T~wK*Y!C)%2B41UV5LtCNPv[G6g85,0vqVC7X]l8PI7GSML+/x367g7q>6bg' );
define( 'NONCE_KEY',        'Ao%|-!us:#v*DJ9$vh Yn|V$>qt7Hb_~vgb.in&EvAFeRY*|]b4k{ n`q+;`c4U4' );
define( 'AUTH_SALT',        'eHv[)Tn}VRjb97bsPhAZB Xhk)zRjF,!N!pZC>A:m~~XF5w2+;2qcZqUbXAP_WpG' );
define( 'SECURE_AUTH_SALT', 'O}8>Pm_1{390yvUN[B_J_n<b6A720mB;{)J]r:wiwQ9ap,gm+{PtaG[/?lcF%Mc3' );
define( 'LOGGED_IN_SALT',   'nDNBn<v5W.3YBQy],XHH-<FOnz$c(/_V1E9H(05^,CZUe[*z$a=tZz[bl4&vCmyc' );
define( 'NONCE_SALT',       'W<Y))[]yhYT^) ;%I>*#16{7 lThyp&p/HtYj5M7e:fqIOrel$s?.?fUM-whB1dD' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
