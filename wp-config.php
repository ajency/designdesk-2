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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'designdesk-2' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Ajency#123' );

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
define( 'AUTH_KEY',         ']>hgDmv~#xZ-&}#ft.f!+B)}lY21Ux?=$rVQa,/I]nhyx=Y5(S3ykpFwEjw^;QlO' );
define( 'SECURE_AUTH_KEY',  '@ap7ePrQmA-,,f9AUd4>nQ~43MQKCJ+jdRmx`Ns:ZUn+vVQQvG8(|~lcEN_ Vt9[' );
define( 'LOGGED_IN_KEY',    'Xf+ArcGY[$=sR<OslFZ)-w7e%l9?g&c^1O&O`(j <8LzdkKkQ?D9O&T4/A1:ZtR;' );
define( 'NONCE_KEY',        '*Oy}UeHhdkiSC^2v9Y5?HyhBJah}RK@SVjsQSV?V88fY%oG`Uu%NCEl=a_h=}cz*' );
define( 'AUTH_SALT',        '^C7WXDANw4)VQ#~JU27tkpIpRM?yi.^@8NY#+bb]~H2,dG~#,ah2YPcmxMIab?[A' );
define( 'SECURE_AUTH_SALT', 'v^3e4*0y7?7WV>3]Y-vtJW5laO=Npacl-%phv$dYCwLo}-YQ5zcBPgqpZ[_z?7C+' );
define( 'LOGGED_IN_SALT',   '$2*:BC4B,Xs?o,w07/#VS[(esxn^{qMF4_R yv9*O$MnjgygyE_9`Dr7epa$4<QO' );
define( 'NONCE_SALT',       '>j(GHGZK7cYa@D&GEk`DwnyedN`fa8:,R4XY;$PLR7VSXd9Y#~LXDVd^ DI-#M8c' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
