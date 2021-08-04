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
define( 'DB_NAME', 'aarealestate2' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         ')oB^(8](Uc9,-V}_l5<%]Zu{BI^FcIC%lx|*PNUf]]Y{i#U}mJ%msU+w~$fecX)8' );
define( 'SECURE_AUTH_KEY',  ',S/.u>z`4 mstJ]y4)JxyS((#JB&l@yxH_.pDqUq,@z&ed_1Dl)!+9(`4u?Og0nv' );
define( 'LOGGED_IN_KEY',    'jz,(5|Za_!l4ZVVqy7Z05q&}PO@!atqwGRf[kbxpVmO%.tW|+g@.x<bX^MCzIg87' );
define( 'NONCE_KEY',        '>%O@Czz;KsE/wJ*tqK)^PG=c_>JKP5~?Pof{xT?1Mw/FuV7r2.j@]X2N^gyFG{4?' );
define( 'AUTH_SALT',        '%V|1!#]g.e4yJ~%$Pog3 !>[__J!<Er4`6w0EEA>Y7xk`vyUA`XDz&,Id4;I$%R-' );
define( 'SECURE_AUTH_SALT', '2@HU1AE%SC1CJ9x5@*om<%!ESIC4a2]D5,dIi8AhRPN(2/#~Ogg$*fwV@x,Y1hee' );
define( 'LOGGED_IN_SALT',   'y79vs;#Zo(<Qf+xG(3lHzs/3SerFbx=slRF.,(|]@iYUK;pEu. K86f`fc%A4Uv_' );
define( 'NONCE_SALT',       'w8v[z`5v}F*bE7w4bL%BnkgxV5**hqQ!CUT?:^#$aQJ)Rzkt]<[&o(n`c-E6^|Bm' );

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
