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
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'sawhtut' );

/** Database password */
define( 'DB_PASSWORD', 'sawhtut' );

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
define( 'AUTH_KEY',         '3+^%<g6pMXk^eW[.NWB%0JDLkHh%Em0PQ.7RWqZ^H7c9ct@n[J_(16dGvgzI_95v' );
define( 'SECURE_AUTH_KEY',  'UHR7L AJ1!QS:_t-ewZv6QtCt?;Pd2[NXOI@8|P[Pe-lHIVve5Y]Ue9#KXR&L}}s' );
define( 'LOGGED_IN_KEY',    'z@T?i-d~!vY,(;f`NZR(OkO$,<R!qwCFgID))+^*?D0aP:l^ptukIpiNTf:()1U>' );
define( 'NONCE_KEY',        'Td:1jPk$,%1Sw#(<F7cTD/6b[e$6/.Fb#S4fn;Dt)JvxaMQrJ.5uAV}YdyVDJ+{]' );
define( 'AUTH_SALT',        ',L+I| z<&HePLy  2,Zz?)I4z>&v.3|]xK`K#9rGmy oCB{ivOEp5,9lWGZE (!b' );
define( 'SECURE_AUTH_SALT', '30aY78yhSY[l0 #0#/8q:zOdD`tLjX0U$a#I=~LWP]rKN;h* 5P8((%hh>b|ilH$' );
define( 'LOGGED_IN_SALT',   'MPue*0@k:Z}X0zrX^ZYQK`<]EqFCx~:DgrX1>q1Y_p{-]<H:?jQE55S*x5l.|V}?' );
define( 'NONCE_SALT',       'TVuwfM2cGTG5k%VTD*IEksMBOG!;`2hp8yBB)!W$MmiFM6kN9iM9+u>48%U&J]ix' );

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
