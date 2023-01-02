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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'onesalone_db' );

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
define( 'AUTH_KEY',         '$qM7uW@;@-=QGKu#sj}&~c5sYhRrQq%/=IY@89w4vxm$`Zehb!)s# Z61;`Ja=qN' );
define( 'SECURE_AUTH_KEY',  ',g]h8::+c|Gw@p$)?#(caNwxz?ts;/`z)>f3IR4/>]w)g3$;tJT]i{}x!VMB-|z^' );
define( 'LOGGED_IN_KEY',    'egL~b :sH.2AKN]l/8O`A2(L)r?]@4I@BckegSlyN8^KiUvWAJIPB~[A_9y-8KJF' );
define( 'NONCE_KEY',        '5T5D*_/yLcCoV2d0v`jxSb|@}jN~=XN>cdY5ndDqrG/DCZ^.OKKAdB48.5VGllnK' );
define( 'AUTH_SALT',        '{:kER=fafXu)y }pGnrn0~h5{[iQ*ySDJ#@`lR(+!]q8Oe|!`JckD6scyTtw[#l%' );
define( 'SECURE_AUTH_SALT', 'M$j&6t:vmqbX-?YlpnKL=OyaDDTm[h5vm4<DeS7L  *R>efBG0u$Zt<`b8E0k+b7' );
define( 'LOGGED_IN_SALT',   'Q0wBwEP;GH1x#*7:C VS5`.[?sL_l}qMp@{ePB;hUmTHNir7qB`]g;2(|c0Kw<jl' );
define( 'NONCE_SALT',       '#(d<il8(-57s]5_O6JbkiW*z|+a-bOo{!oPv5hh8l6D6WfJw#E ]K6[l&Az:jh2o' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
