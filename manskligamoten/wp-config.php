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
define( 'DB_NAME', 'example' );

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
define( 'AUTH_KEY',         '3S2<5C1IZ30Ve]|EDyRzVtTqx]jStMn o.;7K&E[Et{rnllNaU&V|t5RG3KfveN4' );
define( 'SECURE_AUTH_KEY',  'S9;0D>76t&yQ*qScEF3%1XtkA|d5|m<m<cQ`2hF`sG,Fh-[mcF(qZx#D^*&{kYw3' );
define( 'LOGGED_IN_KEY',    '-e>~OC%%kygDK?L &R+K,W+;AzUuH8D!iJc*M:XYbCYcYWwp@bFINjHR~Z7Kx^oa' );
define( 'NONCE_KEY',        '-o}Mu$ zzH48f 9IEFTF?CfYaA Far,<L&/XWWDabf4xFrHNzB?x$7Cn)xJ#~*7F' );
define( 'AUTH_SALT',        '>Xanjy]UO]398)aDh)@Am3x{k7Ik4}}{dZyvl*Q/bVQxwTb3i}2fZ_xnY]d*t[;B' );
define( 'SECURE_AUTH_SALT', '>z2vn0nx=n*ljK|4BO^rx!3tCV3]^3+|Lw*p@^9cpfak<%.^t(eTZ;`|4#4MEa^j' );
define( 'LOGGED_IN_SALT',   '/f=*VR;JJ&|n%<Lq}m/l9)YX%]8y2&7P>>|-XC.uEv?%L}-EiyeV2h3?!RD5AIcJ' );
define( 'NONCE_SALT',       'vsRk_^|_{9//n`zNH0O#x~ZH[`KI9hjgESr5B1#Q4d[<I rhzH4+L8{1EAlFqjI[' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
