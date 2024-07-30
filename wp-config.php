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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'U2jYeUXhzCs}<</YX~X+BDs>{niF1Phr=Y5W1Wr>RJLN^c~oIW;XxO8E>:6}-|z/' );
define( 'SECURE_AUTH_KEY',   '9v*IaBkC[q=<oN$PU>bl8x$yOy![Xo{$)e&7gYewG4fkTtN8I3PI r_>_4mOO8z=' );
define( 'LOGGED_IN_KEY',     'g[Fi~N<qwcb59i^bzOon7+T74QQf20!XtaR6:pAmuK.g&&06k1=#G*g^|gGV?Hnz' );
define( 'NONCE_KEY',         'v,5f6oXNuYjV~.jbyFk MIJK+gVHx[IUrLgzgQA9y@FZo qVOBkbk2=w&`AX|1Xy' );
define( 'AUTH_SALT',         'MXO!Lmg&rj7f:MUd.Dq08 [h.i!#dWF&3RNA[_F?[]`L=yS&QD*va%w2l7.v!>]M' );
define( 'SECURE_AUTH_SALT',  '#S<o?r&:}<|?hpus>i6{go<:xZB*(^tBhB<,6ib</M%7lCi,nKGM<=|in?lTaZD(' );
define( 'LOGGED_IN_SALT',    'SNCr=01iTm74-e,;L{=)IXcUpq2wTtU||]rP:?Huicm+Ao4+(|m$#am nrB,^ %X' );
define( 'NONCE_SALT',        'E8]LWL~BIX;ZO:bTwdKQ)M}3!.z/4k?*o6I4LM/b{y2kQY{1ve-JCqO>cGwQbV.u' );
define( 'WP_CACHE_KEY_SALT', 'H9&$=n[zY>LO@~`(Y;!@G2QaN$`-t[K(M<`7VbO{rIdO_L0NV8W+B7RM.Nu,S:RV' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
