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
define( 'DB_NAME', 'form' );

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
define( 'AUTH_KEY',         'lW!u^hUfhRXu#fPu{y9LCfiZKR+JlW:55Q!(j+WwCRBw&@{{;=2LrmfvCrn%J16)' );
define( 'SECURE_AUTH_KEY',  '4{l:&#ap>RLu!JN(q1M6b.FQ9u0{d5. -tBoX0{vF&2O[u!,PmdUnWpPK` oexmf' );
define( 'LOGGED_IN_KEY',    ')N}=ic~N1AxdH[So9)9oNA4I_};1/Elk`B ];lL9D)cq@W~s|F5ms$3l$(5{ndI{' );
define( 'NONCE_KEY',        'bgw#-15AnlCrZ^OC(9URS}G`*<=q:mSUuo<`(fe5VId.3FNd23C65Iu=Uf22uqs{' );
define( 'AUTH_SALT',        'ne!VT#vbrfFDkn@z(!ITOB?PQDapKq!0&Z3z)`_!GlgD~vBF(duvHi!]0hmJ3YVh' );
define( 'SECURE_AUTH_SALT', 'B`.DYRk>d>NC$%-E1BQ3qO,qmu(B0 P&XmVi}TZGTVB+?_+v6$8f]?[JOMV}FP?6' );
define( 'LOGGED_IN_SALT',   'mOKq_Rmi|z]jb+rUVb*#REyFKA3W{ML*^;%+!M%6BdE#Q$tCjio<?rquUy1_/N_o' );
define( 'NONCE_SALT',       'x~8wZSa_+[kd}IHwxyP}0Nc6k$RWv/F_1jtA1.)LvFrw3s$Pk|qMT42Tz iSt4_2' );

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
