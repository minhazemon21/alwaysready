<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ar' );

/** MySQL database username */
define( 'DB_USER', 'tuki' );

/** MySQL database password */
define( 'DB_PASSWORD', 'i4T4U0wybkHKyKDc' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '9ZXB7XFx@,V&WqK;-A+u18oaW9U+zN[UVwK-tI]FD]sF9_Q-~b2C5;=n$F:;YP#^' );
define( 'SECURE_AUTH_KEY',  'Q2b*qkBG<50^uryC}q4]n4Pg!09Zr(SYd2!c@kHoH?+@<Q/>0qa3I#/U,KXumMYY' );
define( 'LOGGED_IN_KEY',    'qh(kioMGp[XU&V>QUccHi V,gEGcfDR~4qaK=V+HU.PMVq U90[>h_?0| yp0IBU' );
define( 'NONCE_KEY',        'aI#Y3MK(AWqW12Wq7~]3QX+=l7$Nmxn*3-ZQwJtjDBZr`$TYG!D|c05-9tgY#&;a' );
define( 'AUTH_SALT',        'sx?NQZ;~c=_ly[O-80d;q6%5i[P}-,+(|q06F05HEPT:>+cedw`g]B4qJIfhtg*:' );
define( 'SECURE_AUTH_SALT', '|]E`;h$,h0]p1B*ZFtTUs2pdf8Y>bn:jfFlxp xpvB+d3n`]x51W(og9r-8Q %OA' );
define( 'LOGGED_IN_SALT',   'zq*5_j1dw<y^<?j)j- wUm_jQclAES%@AMQ&w8Mh2Bb?D;Y$VT8[ON=vqeWc;d@3' );
define( 'NONCE_SALT',       'j%$8j%35LaXiH~$/>3wiwK&{nrqW&2wcvRI+4_2F&(z+SP!r>0U?PkX#0=XUgR^T' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ek_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
