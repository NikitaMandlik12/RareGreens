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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'MP34666' );

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
define( 'AUTH_KEY',         '?4KGEzlzg[ay-z%bP*KG:P[8S{Npa_wV$g(~Z5{h5?ey]Ssup&Q[e}V`#LL04tBa' );
define( 'SECURE_AUTH_KEY',  '?=CclMl&:mSiFBFF.-ZASJg^BNla8,~A!Ruw7IW0*/)F.(@%QF<r$$((6K=SVzCP' );
define( 'LOGGED_IN_KEY',    'sO,o~lL:pW(NQp#eWKIlL3Z2zDV9c g}6HuyLZl@:#?JPbYuHKufbV^,bzhZczg-' );
define( 'NONCE_KEY',        'BpC5ZYH|xzP<8Q<}o#+JG|wzI~nRXPaTjFH|Uv{ts)tXWgK#EH7EI^C?dN.DL@^D' );
define( 'AUTH_SALT',        '_N!o%iS-44B{CgUh=[lCthgI>!r]5@=.jkT?i@B /X]wG%.pK)9HOz`R/b>ki*`&' );
define( 'SECURE_AUTH_SALT', '`x8sv|6Md@V:iL|mWrL1s`M_,B|Atf]u w*M#kn)KoD%IF@vVaC6@/.I;~Bi<(rm' );
define( 'LOGGED_IN_SALT',   'X`|umJmKusuYwl[W:Afu.[K>q+X^))T FJ6.]1RPaFB!-pWm2JOv2}un=>~uDv,[' );
define( 'NONCE_SALT',       'fH@lzrKZ5BWRWAi)&$Rg(.(%Oe21xXW#[3WJ#/K:kLA(.nJI7D;H$-C5@Z2cIIRc' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
