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
define( 'DB_NAME', 'tvp' );

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
define( 'AUTH_KEY',         '1jiQ6%60)<aZC2(_3O/ItG=Cn?|xc<}AYD|,(6]1 +IRZt9T}bQL8eGzzb tA*^>' );
define( 'SECURE_AUTH_KEY',  '5H5-6_Wno6Ut`h+=sxHLY1P(wj9b`EQ%EQda1O}WZz *,P=O@sfZ` ~ Qo:r0R4r' );
define( 'LOGGED_IN_KEY',    ' ,$TAk$ofI0=1$@;%+obzaqJx(L~2Fr{F#H+&}S9_O{4%h:l4)6Lpq^]6]GRw6d=' );
define( 'NONCE_KEY',        'vvi/gN713-$#$Zb,;eXhdc]YOX85MezT(sGZ5bMPku.Eu9C#CtcoBZpnqEl*^3Ra' );
define( 'AUTH_SALT',        'Y/}5L!O5C:Z*uYK#vyl<imt_c1BrjsDRuMBYUC~Y6%;N^P8?lDk h_QEkaGx9f.5' );
define( 'SECURE_AUTH_SALT', '^0O4acBv-J;.6_AOWE<0|d ZKP[t`oUwXacib`6{5 ?li/{NC<@:z`e_i(,OOX22' );
define( 'LOGGED_IN_SALT',   '_}[_Ar1469(6lG7x!jI6Np|3^aCuPkH^d8YzF 390..[/8UYu,9Wyj h&?6Gnc0B' );
define( 'NONCE_SALT',       'B):o>[_?eFS]_DeC&05])nh}`J!6*?%M<:H3C#V/-Y`rsWCi-h[.#L*u/E>U.)U:' );

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
