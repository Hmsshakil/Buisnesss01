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
define( 'DB_NAME', 'business_wp' );

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
define( 'AUTH_KEY',         'Hn5OSUM@RmwXU>;Gx~4X<4dUDd(Zl2A-]_{}Uj-YI}qntZQ>M?LF&3[^lk@GB9+j' );
define( 'SECURE_AUTH_KEY',  '*hV6gzGg*%^w4:~@J|t[lk,WAG`kyCQNmmXaX<qoNL+|t2)D?;DTT=)bK.@T8ZL|' );
define( 'LOGGED_IN_KEY',    'TL?&:F!ec}.y^#utts-W>Z)U18BEE!eS~gg?ZsvHmsIv`QN9pj&g:>d)rwzy5ZEH' );
define( 'NONCE_KEY',        'xB{`DT*oowHf|61r@;hf_,yV|ouqAh]xj;F1/tpfXmIHD5Vk6maRe[=/?/?5cCh-' );
define( 'AUTH_SALT',        '5%p+Hb<!gXxfvl0=se=1hnNVnB8VlExu4|wCl~4HAf8A9>Jn?c~.!w8#{D6>H:vo' );
define( 'SECURE_AUTH_SALT', 'CX1NYwle/XZQ-u)OX2$50R)s0D7[^I>$i35=:sg!5SPTp%_e^m7cJQ1Pq|AAuSxS' );
define( 'LOGGED_IN_SALT',   ',@R1l_:A7nFO+9@@m4ibM$Ic}r1gnvSBl(</=e*cy]Yb8@8JVeM&b5ai ]^E~7$|' );
define( 'NONCE_SALT',       'lbPZ>42$O!s7~J5-9>mf9yJx2_8=$-TEs!CFusDxDhY|hDR:a69#MvJ0_&eA0p4l' );

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
