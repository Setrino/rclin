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
define('DB_NAME', 'rclin');

/** MySQL database username */
define('DB_USER', 'rclin');

/** MySQL database password */
define('DB_PASSWORD', 'YcaefqCQRcFbvHED');

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
define('AUTH_KEY',         'x&X&pR~$yKE4DM-^s?V6l3r;/b8Zxdl>*95K2~A(u{CXF7grhA:N5_pfRFbJ:~bD');
define('SECURE_AUTH_KEY',  'LbIgj=y:OTfYS96]YP1V4L?H?)-~gQb+n~LxZ+Z: LCSth$aONmEzuZ;S.x30<p0');
define('LOGGED_IN_KEY',    'cH-b9|^U&f>]1eIKYiP_) zWai+j**wki4_?nP`N#X!;#_7:M,(.DPE] {3III}y');
define('NONCE_KEY',        '=$74dBYvO)yB2Z4p|Ql>>;xEJ}-;/gxaa(_a1j_g]c*}Y=~r-|`}hDiq5H7ZWWN>');
define('AUTH_SALT',        'I,8lG|i*`[:H<`6UH&AJB/HB9{dtjCP%&sSs~ZEvqGlvO>sqe;a*o5QW|cX8<oGw');
define('SECURE_AUTH_SALT', '<<_Z41<+vHOr}dLG:Hzv6Q<]I4)j}cuA[V}lKB1e4[#Z&*}9M=3N?`x3>Kfn`Bn<');
define('LOGGED_IN_SALT',   '^mZ*GI;S^fV&tk-{+|U-{-*eqXx^d 8]{X6v}lqVadGU9P:yuG76jTGk9[aF=T}C');
define('NONCE_SALT',       '=b7)@v`^;B>SJnVUDU#7P*GY%Jb2}=}36Y<P!i[zDy]s?`Ig#-ogH#6m/#Sq6K^P');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'rclin_';

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
