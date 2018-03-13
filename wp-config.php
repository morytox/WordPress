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
define('DB_NAME', getenv('DB_NAME'));

/** MySQL database username */
define('DB_USER', getenv('DB_USER'));

/** MySQL database password */
define('DB_PASSWORD', getenv('DB_PASSWORD'));

/** MySQL hostname */
define('DB_HOST', getenv('DB_HOST'));

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'pV{x|=UZ$ijIK;(7w{4e+}8Sv89-X89tSLAf{2N&pb+gf+sM?NNlXpzL!L%g{T?F');
define('SECURE_AUTH_KEY',  '8eUMP9Rsb:d%d0/63c7,H{ZQeOSHX#;4%!T^kMF9nB[r-2gQaKpD5sK+dC,KZD:C');
define('LOGGED_IN_KEY',    'Ni/9<b`o+2{I] GHnSb`NkTllm_e|lal7h3[Xd-QF~m{OB;p[mCgec9W$Devsy7j');
define('NONCE_KEY',        'S[/u_+-]X/)2_}y/vp`hkXr93N5~8X%Pvome~lDpvsA?}G`pK[j6/LJFcj(rom<{');
define('AUTH_SALT',        'Dr+S/!U$5XDc+ykzOUG}LTk#jR$!b@/cUlAI6(cp4k`dhf7Fi>Fm,r7g%|p_kP/:');
define('SECURE_AUTH_SALT', '>0u3!iF=[M]cZ|ik<3931L:v~ogf6Nlkg2x`M!eE96Qk]T&cQ< ZTv-c N#6p(L6');
define('LOGGED_IN_SALT',   'wIuHOm:Xe1igT{[k_CaKUCx4%}&BO.7@$IgNz;rODd{a?W?-VLc--5vs%Zh5VM-N');
define('NONCE_SALT',       '. v2:ueHHiZaDT1fc; R>hnK[T/^&,$,,Zg}+M(G-Xp|,u&+jyrr@I}|^v/|D^%h');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
