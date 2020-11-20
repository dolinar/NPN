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
define( 'DB_NAME', 'npn' );

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
define( 'AUTH_KEY',         'GAY9Nq/g:x`8 m:LTJFqo[}=mM03{o!q{K-gV3^YK* T@)nRTM|,):;w#>,M1Mnd' );
define( 'SECURE_AUTH_KEY',  'Ct]EVF@i~Ts}PC%!@Ao)Cs4Mlq4)P2?Ruw3d`jk7D,k1q4+@23x&4uh=nQT`Ew4+' );
define( 'LOGGED_IN_KEY',    'qQ o{OJJ?sq7u;]f/.<fcr.kH:MTLm!d#K#lr[!X-qp~UjEIC]#r<_vVeSN_hI:P' );
define( 'NONCE_KEY',        'mb`yz](;8(ntCuotI| P DZ{(IdVZP%jY9XlPcrksVH)[Bv*UT SfpkI6,q|omY_' );
define( 'AUTH_SALT',        '< Xx%!^@LFn2oYe]!x;(jy PL[qe;?x.kd`7upJF+#rVJXoTx}U(<Wm..=}1}Sqg' );
define( 'SECURE_AUTH_SALT', '$6rJ?lrZ=(ajm ?)I^cv[UXAcwd>ogR6qO2}nO#A]2FA!rJ?u(LY^$oN`Td)u3e=' );
define( 'LOGGED_IN_SALT',   'WwdZ$ 0?U7~#Tiu@<yHW,Kal^7V{hNY7bVj7}Qbi-pfSj:X}VQSTcY[c7`dixsX*' );
define( 'NONCE_SALT',       'vz<g7Rc_0:HtMI&TlHNc]4-_NW|MLS*ltayC vpD4?}=~uaIUQ1@*.<Gk`!g8x96' );

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
