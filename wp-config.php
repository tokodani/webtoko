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
define( 'DB_NAME', 'toko' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'R>4O4~<</T7W~Oj2tyu&}xrqk6ib#G~@$:z;L$#a;Y])ndp4>E2};[Sm~Zc/Fi:O' );
define( 'SECURE_AUTH_KEY',  'gh@9:Ao]NVT]}UX9]$#b-%f5AL)iisJrz888Fq`Luw#Vf#nYj(;Cuqs8l[W+NwnY' );
define( 'LOGGED_IN_KEY',    'j|U5CuwD/W>Z3cK?*N-6.o/=i`k]&)o`.|t$F_sY3:#h~W{h=K[xp.d|?!NEhfk1' );
define( 'NONCE_KEY',        '#rkkmMJ8dl-ynw!]^HM1-&lj@vM_ &Z|Fd)rQhooi;GDhoVk`&/l;9F5.MCG/&}c' );
define( 'AUTH_SALT',        'MNR-w1Y;yg<Dov9hgyx/aw59Jj1~3uk]Y!hKGD1j^ bLE }+n)~fUJT2NU`W}#}`' );
define( 'SECURE_AUTH_SALT', 'i<11$ikN,b1e-rjXCeS,Neb.|#!!cp7d+GF0dcni31AR);KuQ[a-i2p??5b,3zj;' );
define( 'LOGGED_IN_SALT',   '2T{2`_/)UOGj45`dBEfUi@H,+6F9}0{DN,&tPfC,J}/Q@TAD!T[or-ua~^Tgj)xQ' );
define( 'NONCE_SALT',       's:`p|rqVJHWd:iEi?ac},LYoN& oVAA)qphV&$S.A`(Xk9edBE5bPjl.#jm~dN,y' );

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
