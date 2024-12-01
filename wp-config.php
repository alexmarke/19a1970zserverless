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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', '19a1970z_db' );

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
define( 'AUTH_KEY',         ']>=i?CKV]ma.I#7I+;}J~g#lc_m6;l0QXY8DQ_[jenNJn`E1Sae=:D[H8)DP3F$E' );
define( 'SECURE_AUTH_KEY',  'pEz5w!KFh8E#i(B<{:t5%BCTM}+X3H4(|dZofFi/qziuWD fcIHBZzl}fdm~^wDJ' );
define( 'LOGGED_IN_KEY',    '.8z5!lK=qS8B}yU~jh(*u%o3<$GEV4_ E25^eYi:K-d(/_ ;.Fqne>[V5)ZsY6,b' );
define( 'NONCE_KEY',        'JkF-OS=5B5^PY &YF z@j5B>X=gV**eZk~Qzs8V|keVBkxV:BIX$2=~4tNE&l@l4' );
define( 'AUTH_SALT',        'W:0IRd)G?~!HB=g Mqrq|;)_].m_Uo0,B|f$X,C@Sy{Up{2aNbETMNZU(M$+BWc.' );
define( 'SECURE_AUTH_SALT', 'FbwZ8; ARY{r%L1/)<.no=Kt@RRIlCkQNc>scmu+x<r/HWyT|6 axOw6SwrFAR!i' );
define( 'LOGGED_IN_SALT',   'XB7J}RCai%RnhXn/ $Q%-#.$G)BJMQ^%$;OLC1`duEI|l><;JS(l]9L.,Sk-i@@@' );
define( 'NONCE_SALT',       'Y:R Gn_t[InUUpp6ep):[o5iX%Nm@o5a+Wqdxwg(J@}9 SQljesRJ[`VuiCub.6V' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
