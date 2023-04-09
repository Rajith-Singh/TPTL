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
define( 'DB_NAME', 'tptl' );

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
define( 'AUTH_KEY',         'pX,sC^tXc+VdO.[ o!i!XFkB3Lr#%}2|tS$ENlG05Ewx>$f_|2{%9[)raHm+wBLr' );
define( 'SECURE_AUTH_KEY',  '213i[d(X7LFxjU/1PVqL Q(.F0ei0C,GQ]*~/,tS/C}15mXEh%-$.f8LRq{2[t2V' );
define( 'LOGGED_IN_KEY',    '&n2@NIbMwa&s.yqw0R/cZuX:u*_>(CyOgOrzN)w$z9pYLr|},kl=bl6nN+(tK;jq' );
define( 'NONCE_KEY',        'j)SHHRSm_X-9R|z`m}[wpt,02ew(#.+FY+euCqd4w[J?ZZQW;sL@4TMF(}[8-v|Q' );
define( 'AUTH_SALT',        '(_(d- +24hazwM3IH+oMlm-7cvH-<T} iYgC)0Os|+!]KFiqG90U]Q::vOz<v~-&' );
define( 'SECURE_AUTH_SALT', 'Li}b;I?hlS]ds+cx<cUyAQ,.~*<5^/Rs< dr2Cq}WAF*@2u6]c+1NeAF!p8l?ijv' );
define( 'LOGGED_IN_SALT',   'hi}fw!Fo3Pm=Oh;>(A,7zIc0=th[7t5M|a72 qws2.&H@Z~8e8G/{3n9h =C;xkj' );
define( 'NONCE_SALT',       'KNIxEOC^2^}ja!Zn](hQOei3A!`M^*7.Su.zcD1]Y@9iZR}p*1=;j$$Zd~(pO%.Y' );

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
