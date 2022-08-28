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
define( 'DB_NAME', 'innsyssdb' );

/** Database username */
define( 'DB_USER', 'innsyssdbuser' );

/** Database password */
define( 'DB_PASSWORD', 'vhxNQ1u9M]Ss' );

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
define( 'AUTH_KEY',         'GLU1zG>_-1(g+?O+)(PdN76N5bnqOQuYP0qTHwzxd*H-&1~{kuWFU-3gWhF*|~cJ' );
define( 'SECURE_AUTH_KEY',  'W2tqN!=i:!k$Q@SIU/OZHcL|6dyr1J#<_p!5}n4&RBZXj=-})J,@Kmvd$2R!)ys ' );
define( 'LOGGED_IN_KEY',    '#VHm6^i2AHRh:LJRL4#9Ju/7bqg9]1yaZ(yQMA]lG,Pur BX>%7.L7SK5h:m2>pd' );
define( 'NONCE_KEY',        '*ERpUbH/].59@z[>5m03.J%Axri70<l0wEJ(~P9!;)Z&{)jj1z?6[01~zb^HvDYk' );
define( 'AUTH_SALT',        ';T~h[1(zJ]wIuprE/90(]&pLJ~s!3{H;}E5^(GtB?@,(N fAESg)R;,xP^GFw3`2' );
define( 'SECURE_AUTH_SALT', 'lL&Q4(5n!uo`Qv[q-WE>}:?s{i>}q0qUG,07GCq1[+p*9;Zh>DI[RT(8rrkv*V Q' );
define( 'LOGGED_IN_SALT',   '3t/6*4cYtuxtERe.vyw}^b,6;gw+TrjM(GL;m!4~!!zVjC/se2hB<|v9F]H$.M5<' );
define( 'NONCE_SALT',       'd5$jq,(KDxCXGxD?_:6g!=9 9>>Doo(Lu)qeb2gorBt})$T*={P/Axi_*|pD>t{M' );

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
