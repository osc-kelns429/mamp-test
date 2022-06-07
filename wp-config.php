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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hoctap' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'v##md2;LlP<]A,-Bo8o*of2rQ @tJ,MDhf}ZGrAi/QT!^p>bvqo=`_oL;-FbE3od' );
define( 'SECURE_AUTH_KEY',  'o#9>v)kdYn 22g.-g)00DWUGyI 9BSM:Mbf3knY>ny;1*.|CTbENeF5F{v/l$.QO' );
define( 'LOGGED_IN_KEY',    'nL1ZG9!.?`(V1YXI}vs*YoLu]+JG}_X8au[G+E4vUD Nio4e!_SLpQ-MEom&yv4K' );
define( 'NONCE_KEY',        '|IW4}$Qv1*iW4]=SOJ+:xjAN5U-B^RI[,;TzPWt?hT!9QJ.3i{d&cP,n/YZmwFCo' );
define( 'AUTH_SALT',        '0dFv2!80<RJ,yv%&Qgge(]u{J;jxpdU(Yi8=Sg4|NsN,WE]UMm>2vX]P|Oz7K~S{' );
define( 'SECURE_AUTH_SALT', 'JEies!)yoEzN;,ieY89p?(_dfkY=^iHe/U&f`ol-9a.=QQAs*,,S_JXJ*MN4M]>X' );
define( 'LOGGED_IN_SALT',   'OQa7XC!|6ORf)-}qs!%I5btX8abapvhpC~Z$NGb((L^+ jO,9lLw!,RC</#@<U~!' );
define( 'NONCE_SALT',       '9|]eayY/`-_e0shg/-7P@u)V,eOo.Aw&]qBsrl;;#W2%2U%Gx@i)fnhSAC<t5;f>' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_hoctap';

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
