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
define( 'DB_NAME', 'pro-labs' );

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
define( 'AUTH_KEY',         'z#2=kJ@({)It`6txtypUdUx,gHfwJq1P%4z1o7N@(f`QDkPVv3x=F]KV2{f-lh+A' );
define( 'SECURE_AUTH_KEY',  'B_NY8<FcSWUIM(MFJWaYTz3qtBNw6?K+!X)OZ*@3P1T[x+;bz|mM~dmiYR0!g`Vo' );
define( 'LOGGED_IN_KEY',    'Cpo|w;a<l_;=DbHQnxt3Y/|bG-36[m:v}dx{r]SV<_1TV{m*&-S8B`K7ylDLy[=/' );
define( 'NONCE_KEY',        '?N_E7|Yr-)#f!)?]m$+?t^sLUVrB/?n|5CTX$85);;)>Mes|9Y=Lfx7;0w:_:cFq' );
define( 'AUTH_SALT',        'b`LJe/Y|O@k0@CBb@M}0v769uA2pvw=EigMo7FgIib.o%H$O-ku~SYBeeOso6X|s' );
define( 'SECURE_AUTH_SALT', 'iUbu$YQd(PMNJ~hL_J-6j?T.PKSnB&u,dq4:`t9RjQiF5h8-o$}jE(jIxh4A.d+5' );
define( 'LOGGED_IN_SALT',   'YuB=T+v-{Z53-_{+5j$~IwA%:n2l xEumvlj4#pk`%4etJ#]E;Ou &hvG)+~0{nY' );
define( 'NONCE_SALT',       'w#R+p@=dq_la2uqe4:/;%tribI5s9we-gJUf/*LJRYzOIB#Jx4j56,NNHM>wa/!g' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wbtxp_';

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
