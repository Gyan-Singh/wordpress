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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '&,Xnh!:bAGl&+W^5ljzz5aC2x-U)vW_]rfUBURPyT6%K~|*Lwp[,w]6g%YCOzHbe' );
define( 'SECURE_AUTH_KEY',  '+lGo,auxe:K<;&wwAUi1]<N&X{4FWED$X`SVhJ6s{Y@hC}1YH$JYM=ISF(,8U))F' );
define( 'LOGGED_IN_KEY',    'G/C4ee<W%YI|TzyJ_] Hw4!$eyEO~c$5=/<{b G0TR|NW(hq.)&iZ4gAQH.E9c8W' );
define( 'NONCE_KEY',        '1qKNcOGqO$rcAe*gczk6N1bt< I}PMhCjU.k)?+9#b`N;SzJ@e=FdG?c^yWtSy~M' );
define( 'AUTH_SALT',        'd<)/847*mScq&vN|B8i|]H3kHU4!Ra:wsJ3K/afM)V>z]~aWp/U.1~fK=nBXnL{L' );
define( 'SECURE_AUTH_SALT', 'kk6dN0LqmZx?`4^F.5dqv,xhbbn&,NgZUXFy=l1SVs<JOhl4`07QH^NWY/F/8!@-' );
define( 'LOGGED_IN_SALT',   'RlAh=M@k_4ExE1mOaWz]Oq)cqZBY-p;jCj?aUi/Wye)%^q#m}h=xj*v|+#*>f+&3' );
define( 'NONCE_SALT',       'X!hw-S2|3qm_MxaNn,N5j;Pu~_42vML6Y:C/, ?_bP+3%=bs39{R< h&dOuJg=d9' );

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
