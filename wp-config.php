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
define( 'DB_NAME', 'mc' );

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
define( 'AUTH_KEY',         'nTWD]e1Y6GHriI/:U>Xt7ef::j(+L*hCyl!-y`YtHO``3!@I/AOwa.JZ/-+8;P51' );
define( 'SECURE_AUTH_KEY',  'dO3`hr<v#lC/@uxXT}<(h{pG$tP)JZE4f|:]4Bv=Ww9yp] T$m}l4XmlxHw=LO{Y' );
define( 'LOGGED_IN_KEY',    'o8A)rIuKj9w-Su^8l/,j5L(w8hpsK8XPqDY4vnqa+<}FQCrq7$`9:1qY${-6zDfs' );
define( 'NONCE_KEY',        'u!n3?oMfX[|-]}-i[][bKmfRgh X:<YB&7tRg#9G{upQe;}h,BZ/9MhIb>,3DNjC' );
define( 'AUTH_SALT',        'sFw|$=G>Xsx6*.}T8Q`*hp*:Ka@bzr(_mwwC)fK3@p_iEh!kx>}q5]2YR7w2=:(1' );
define( 'SECURE_AUTH_SALT', 'ivV-2*Fra,)L1pQu[{$Y5}EM=F2e<3Te=a2J8xY@y=_j>eegd]Z6Z4HUI]TSO_Bs' );
define( 'LOGGED_IN_SALT',   'iKK,V@SPE$ZCD=nTK|<p4O6,sOm&_g<CRB:d7}b.pa?/|R.]|hyz9WTw;m_b|Ng~' );
define( 'NONCE_SALT',       'js:3Srq$q#.F[e(L@qi()!nXo&hXkGyj8:S!ayll<S^fW=Xxu:Ju$6ue?Z4Q7 K+' );

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
