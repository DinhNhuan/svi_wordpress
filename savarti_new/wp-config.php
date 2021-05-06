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
define( 'DB_NAME', 'svi_ver1' );

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
define( 'AUTH_KEY',         '9@fo,%3`B-:>Iz D(?IE8SI~0!lnsPh>p%[l#X{]e#/>`GH[bxPRGE4ISSUhh:(%' );
define( 'SECURE_AUTH_KEY',  'r+^RLb9VTZVfk~fd4-be)q0k^29RMz1JF#R(P)Jwzuf-OWI<vXIux`L{HTM&SA8d' );
define( 'LOGGED_IN_KEY',    '2Der60&do/|2,?R<b7i821)2}1bA0S-;Z*!H7Kp=FD?29W#XdH,rab[d--s&<u5b' );
define( 'NONCE_KEY',        '6znmH1)O/{y+3#2g&8(DlVZ^%G]rBG}Gu MG;&)/#Okt5R_/gyydhFmBbg72W]&{' );
define( 'AUTH_SALT',        'wc*oZ+emFg5>,B%_,6Bo]>*I&jSY(f5At3+j; .r(/cKP #L)8+=I=H`r&v4IfY1' );
define( 'SECURE_AUTH_SALT', 'Bv=jZvztJfhk,`M5|/!Iv3/9J;+gfKp?kc7c^L)mJ~=v=*Td2C[)tf$H]hr;mgD^' );
define( 'LOGGED_IN_SALT',   'g_ajX/]K%)C5oxF4]51;2wxI=#Bg5~JYK.Bu@4ZPM+yI+gZ!VS3RuBz5qoV/d_k{' );
define( 'NONCE_SALT',       'tO)eDItB]C:5eBQ3}+[oo0)q ?{CY3de(;sOVdUbozR(rkM}cB$G5f-rMr3Dl|Kt' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'svi_';

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
