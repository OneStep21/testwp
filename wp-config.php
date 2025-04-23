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
define( 'DB_NAME', 'u212137908_testwp' );

/** Database username */
define( 'DB_USER', 'u212137908_testwp' );

/** Database password */
define( 'DB_PASSWORD', '9Ha]OUMSO' );

/** Database hostname */
define( 'DB_HOST', 'srv924.hstgr.io' );

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
define( 'AUTH_KEY',          '_|qZkgi!>zy{6llr,JK+,/x/Dy?^DwpSnk?&SRF9U:tU-dJ?<h?f<AT*tQ#t:wR,' );
define( 'SECURE_AUTH_KEY',   '`sj+8,Vm1xVc_!@O(0#_v_+:.OqNpdMXE&D.O(>>/R(x5JwkAAx2V@$(~JjB8L6X' );
define( 'LOGGED_IN_KEY',     'FTv~9ss&wXa@p-a1jqkO6Qm)+G~0CBHOv=8;>JYNFLMZCic5E?-m Z[*t=4}q,A=' );
define( 'NONCE_KEY',         'd4(wi!bO]RV2Ub{23KyGi.t=`Y2>j;hqc$)%U(-Ejh!Fh2Q~]<<_gUmN,1RPUL>8' );
define( 'AUTH_SALT',         'y`c]O_A N`U0W<]#Gyd4ehl~a`XGp ^ohD*Y!3D+r.~-j~iIDM(N{AgC_&hS$qGu' );
define( 'SECURE_AUTH_SALT',  'q)9dOn=S`5b1H1NrF?-/+o$5~EK-NU{f#qoE{0!e8r+}L|NX3kf*X)j/79^ GU$m' );
define( 'LOGGED_IN_SALT',    'I^#pzF[j~^?~Pz}Z8<Jfo=Zl@?:2dgEFZA!xj;:$?W3 $YH=[$y==XMsbTtfhgp.' );
define( 'NONCE_SALT',        '&S9w+?-&sk7zmDUeQN*wzJs=9|:!0#~dGf?Kzcn/<-_Kx3>k_nb0QBTc3+EJHfcv' );
define( 'WP_CACHE_KEY_SALT', 'i,/8((u;2n*ZF(T.Sk38G!=>|/)r,cQ|904eQj&r1-2!dAbR(/N;sR<z?)@DtUrh' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */


define('WP_HOME', 'http://testwp.local');
define('WP_SITEURL', 'http://testwp.local');

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
