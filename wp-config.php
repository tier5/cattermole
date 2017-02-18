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
define('DB_NAME', 'cattermole');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'toor');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'wlly55O},-^xy>q2!l:A<jwl!d<KN0h,_5XT|&4Y`xgA2sZW?gPm}SlO{7%ZNbSM');
define('SECURE_AUTH_KEY',  'jm9;EI@OWUx]D{GkZ@LeLBvVRv=YX>OsjT~^N``8w&(UI}PpoEy=mA!KccgRSXlt');
define('LOGGED_IN_KEY',    't6R,e`XShj2_unuv!-)R: A:n[l5hv1^6v`N-X[3#`I]e1>iGR{0F%ujZ<.m0Vdj');
define('NONCE_KEY',        '~:m5b<z7_8 Lj*PDX~,~[T9E[pV!uLN#]&?X_LTul>_%`QK6^ lzBS/WK/D!i;t.');
define('AUTH_SALT',        '9AxUSqi-uXi3u`eS=`l8I!{mf>Bkg&l?OrK]+N6)`p3P`E1ugB;0J*O7tSHPN<Y>');
define('SECURE_AUTH_SALT', 'jqf<e !-K;P%zYyO;Lx1`dB)/gf1#f|y|AZR_C?7xc)JAHGhV~@Y@AAJU2Cj<~[>');
define('LOGGED_IN_SALT',   't~b3:FZTVdqZYRX#Oy:xvPM:i>9+A^0U?DAcnF<:1IsNDmXb?*XYvUE8 `7t4J[2');
define('NONCE_SALT',       'MK^5X`w,/t(@7,OkbC5:k!!(a(`?h2q%vC(^3|W*)l.AUVnI!3CA#nQo7lkgHg(.');

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
