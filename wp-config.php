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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\xampp\htdocs\esmogo\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'esmogo' );

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
define( 'AUTH_KEY',         'c;e)D*rk^x%FeQAP3bSO~ceVdtsr@w>f$9G%Notuos:$t425JgLa&^!Y;vOXmcTC' );
define( 'SECURE_AUTH_KEY',  '9OyR=?.ikk,@:A$Je?Oqji782-BY, #IJo/SL1toOzJ6P.ovwv.&#pS#]{-,77sX' );
define( 'LOGGED_IN_KEY',    '3zcbi4}:T{>q<y5g6swkIl@r.ax09F46bY9RaESs_K~D(3dPO GOP%$o$QDKY?-4' );
define( 'NONCE_KEY',        'R~PeD?/K$I0V7ap{ o&ec+VeWZ-5nx2y<-=A 4K2F+!PdYv|okh5]h)-KHK7LiU7' );
define( 'AUTH_SALT',        's>Bg+|9(f:(k}NLc&.PECgv{:`9F|dZ[-0zl? }Ar7*,T`s7<;8,j&zNo9t6rGN3' );
define( 'SECURE_AUTH_SALT', 'nKR/-;h1mm; MsOA<7P~au|:TB_{XHoZG~a^;qLvXI-n.yHw5bccA2o`p({gSr{r' );
define( 'LOGGED_IN_SALT',   'e:Ilg)kEo_ws{29O)*!B]562k<X&h$4M<t$XxiXOtmqcF`qSrx/mItkL{L!cj~)n' );
define( 'NONCE_SALT',       '8kZ03Wh2ORC#J_(^%-y~A<a4%qz_D0yJqolQ^t~P)(_2,7M.Jy 4zm_BF?bONQJ!' );

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
