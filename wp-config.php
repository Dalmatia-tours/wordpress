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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '[<GU:FRfbZ3HAtcJ^KayM2,2bvDSImS(+if.`8xC3hWU]atqB()[~rv<JQ~z=2[0' );
define( 'SECURE_AUTH_KEY',  '5J)RhM!VoWx0|?hf3DzOXOfYPb4qCL9A=a-MDE`G/O$1/YL<&3IRex!h2ON.O(UN' );
define( 'LOGGED_IN_KEY',    'AA+i&.)s+IXCav~|={2#+UiBo[Y)#EwbRZ;Yy-q>V#9N,l b(76cz+ l4z6sVT{c' );
define( 'NONCE_KEY',        'x9,H]9J%3`W^__u}t,)u7/!`?OmU$;xcmvi`O#v{]YPZ#;t@qIQ1!Yq|t`Nm-BU.' );
define( 'AUTH_SALT',        '-@!kvs 5:iMe_yETI8<3ymi5&.IH/z*{pnWEnj*:od#el{ts>FP{uxfP@r$L=bcH' );
define( 'SECURE_AUTH_SALT', 'G#<+$G(D0m:Gybv>5t!<4z|0h?4tv.MH!vuV/_-~h(jKYv>GwtLj1>^9ADib:a2a' );
define( 'LOGGED_IN_SALT',   'EDqG!I!eidx{71d-)8ftXI|.BFy_m1+VF8Y>s%1xRsis0D(0Z?`90~0Wa=,-@sV<' );
define( 'NONCE_SALT',       '7G0Eo -ugmi1*`~]Zj]e!.Tg9ma]?|x}uu8jC]p`o?v}Y}`y&MD7,& REqwq;Esl' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
