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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'darul_hikmah' );

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
define( 'AUTH_KEY',         'DTxD4LyO%CG0Fu|1K_+#l{&A25Tr)IN2el[pEyUR7>Yfcg-;{gOH$F~QR=}+)e5Q' );
define( 'SECURE_AUTH_KEY',  ']EO<_UM7[*/BIjuEI1-=zwoHIpF?SEnq>Pz^_oofLrb4`*t+/>/=LeP%hY=/xCcU' );
define( 'LOGGED_IN_KEY',    'G|I0LZKH&/^q#,EfF4ka,_.UpF[2dCoUfGwh?{M;NHPeIG9xk1C}o{QF%,myag~=' );
define( 'NONCE_KEY',        's?5vx&sw7meqe6@N7~P,*|4,/e%Urnk,!%E6}iaj{Xe)sN,t7}C94W.l`(dp(g;[' );
define( 'AUTH_SALT',        'R] Rdxzn~z{!cT0Q y#FGEwQ?JLFA|lBm;<%eDwt_C_hGjBt5 Fxwm)HYUFDC{={' );
define( 'SECURE_AUTH_SALT', 'c2z(,%+lP;8 WfwVx T:dja$k.?@m`P[3~@H 3&+AJwP ]vI#,e_Ssjo!4;7[RH!' );
define( 'LOGGED_IN_SALT',   'bXYQ&17LCx;p-)8`pFIUA<Fqx|sRN=BeBtIlPbI/d-tjB(bmo?$?nXg3&$i{l<V8' );
define( 'NONCE_SALT',       ' @6v@xc7*{E2T^?5^p7{*UI~aSj2wGuGy#?1,[pTZA5;PqXcppGm37gdO_%Z}N$%' );

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
