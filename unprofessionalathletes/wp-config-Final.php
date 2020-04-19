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
define( 'DB_NAME', 'unpro-1u0-u-263636' );

/** MySQL database username */
define( 'DB_USER', 'unpro-1u0-u-263636' );

/** MySQL database password */
define( 'DB_PASSWORD', '0MrW4les-URtWimS!' );

/** MySQL hostname */
define( 'DB_HOST', '46.32.240.41' );

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
define( 'AUTH_KEY',         'VB!Q|%i_MTFA[ambY`XjSY(*S0dk2JNJ^j[qc5A)ADwPugpjz%mm*<)d,5>Qv/o2' );
define( 'SECURE_AUTH_KEY',  '<!oR#Sp-g#*SO|^yF+]}$Wq[fLtYV-sM7hf6SZGQb|;b7$[v2$CH|3`{>j`bcf%e' );
define( 'LOGGED_IN_KEY',    'F._DUM=~~3*}HjU/-Zd;vz8<w) /oJQk:hx=#D<E29-@-JidW5xb9cl#hcoce7)D' );
define( 'NONCE_KEY',        '9ZbZ:@sB>ZBj}NfY*Co qap@i^SiQWDQ}EO=[c? )l11,q7(ZWk5;tu~V-l+bRMg' );
define( 'AUTH_SALT',        'P.CFT*Q:wy${ea;sYUD4|,D@cK<R(yIo!l42_&7SSbb1_FN9bS6]9!j|=>IokyL8' );
define( 'SECURE_AUTH_SALT', 'n[v4XiL}7yBjAzIsJmfYABS*9}rFR9UP*srTd|{s4YfMSJl2^F2uiS5UU+S$r?X#' );
define( 'LOGGED_IN_SALT',   'xDn59VI*n@Sp)!F+J1r?M?;i=N1Tqa,4#<H8*2-l,+Pt^kj|*i~Cz2n:RTNWB[7}' );
define( 'NONCE_SALT',       'yoICk|npih{N]4yd&C3eSn)9h;ZR,vqh_&9-BA([m^,:Dk<EFssxPQiGUHhgr$xQ' );

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
