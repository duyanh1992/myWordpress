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
define('DB_NAME', 'wordpress_demo');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '<^o @{XpJeDy3|oH.r:U^}Y1n)=+_%.a8|L5E*;_0%I}WddGteO6{y9w*^e!WGDv');
define('SECURE_AUTH_KEY',  'u*&-)AJYon-E>;6F/vNtpro5L5l8Agx&a|;ZC9=@ ^X&X3TgCkg=CbLAv 44aQiV');
define('LOGGED_IN_KEY',    'jD,n>5|{y^,OUX!m>k@lk3p=TVVva%orNC%;W]5J[;xT%Jva.]rZ*d`Ag;!5-pQw');
define('NONCE_KEY',        '4ft/BapPKEHOKz+4HlkOxEBEAhsZ6Za+y?SM_m7?jw.ZB^X+phs%uSXEyVk%l%s8');
define('AUTH_SALT',        '(hm^v)w#QP2j/?8{JO<eJQp0la.ZR24TLqW=_o? wysHxwZ$k`&r<LNtCp}JT*<@');
define('SECURE_AUTH_SALT', 'LN3*IjgjaT POPT*9Nn{lfU/W)nz0*lTC:c@RGtKV;5w]Z2U>o<~Qvmq&qCuHH=)');
define('LOGGED_IN_SALT',   'z:4F8+Ks`B7/6TzGB[kr/1bs`CxBwVMt^bg)$ ^oDrq%Hz$>y16IU%a6nGGN1#ga');
define('NONCE_SALT',       'SA[bhtuJ.Y=zXaaPmxF- K}.kWX;$jB*D4|6A|o*HY:r]BX[eHJ<OGSg?$N4X2GZ');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
