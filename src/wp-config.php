<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_dp' );

/** Database username */
define( 'DB_USER', 'wordpress_user' );

/** Database password */
define( 'DB_PASSWORD', 'sandi_wordpress' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         'qbdPf(=3`3=sr.->@3=>]TzUguP]SM((nb XSL8f6Xcl3mN~eU<=_*%C8:pgSw=U' );
define( 'SECURE_AUTH_KEY',  'nzya[b[!SysCwhzw#Pc] KcY$BGi^sb>fCi4zPQ/:}dYck3o`3e%GmgfoE~F6aJ!' );
define( 'LOGGED_IN_KEY',    'kz8iYc>m@)w.$kr4F*O[[KvcxWWbR59E7@pLSK?6v2dO&Hb[]a*]9x[39XwBOgXE' );
define( 'NONCE_KEY',        '*A%YZ*vFDXS~@`e-;T]JGqYjG1=>zF ;Haf4m89lUr]BD~Uc#QcR|SVG5HEzT6|Z' );
define( 'AUTH_SALT',        'tn8sbKhq-t;jh[8VpE%`3UPrB uOkHud5[*Kg7WSp?pxNXy9w3[Mv`4#H_s=-.O^' );
define( 'SECURE_AUTH_SALT', 'c5+gPux@EhEar]< 0,Nkl*@~30In}+%!6b|e8n}y~xzYem7?bv-B=b|sD^:hCWh*' );
define( 'LOGGED_IN_SALT',   '/)Q:hmv=sz+uluGpV.]KO/wX(VMx(+uxM2Swz}yG#x08bE;0Q^}*[uM6jQ4V#QxB' );
define( 'NONCE_SALT',       '}&Py5?|@1>vX*i:t UNqvO^HE}^NVn0d__wP< 0a%fR0)lgL$R^FA}jOKSX]X@Iv' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */
define('FS_METHOD', 'direct');

define( 'WP_REDIS_HOST', 'redis-server' );
define( 'WP_REDIS_PORT', 6379 );
define( 'WP_REDIS_PREFIX', 'dolanan' );
define( 'WP_REDIS_DATABASE', 0 ); // 0-15
define( 'WP_REDIS_TIMEOUT', 1 );
define( 'WP_REDIS_READ_TIMEOUT', 1 );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';


