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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'test_wordpress' );

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
define( 'AUTH_KEY',         '4OukjvwSlrVkZOtDaZ]2k.Ud7I2a~mcY]HR:4b.5eS&x#8SK#$^.xOps{S(fm)4I' );
define( 'SECURE_AUTH_KEY',  's*-X^Sl^a$]GQ~OD}sox2YvI(#xJE2?Q^^rk|n]W^+?$s$vl6VJMdf)c^jq:aN&D' );
define( 'LOGGED_IN_KEY',    'QYPD740ZLtf1B *0:HvpGkHgTof$/(?)9=@Uupt^I1sbZLvrO@]K6[oR[}TRqE5p' );
define( 'NONCE_KEY',        'EYcVWe>#;N1qzK/!GAB+3p]_NL4@GJz2Z!Ej?./5kgfy3sG57rRE]}18%(`CvET|' );
define( 'AUTH_SALT',        '(.9Ulam]};F1#cX!-Uen2MU6kYv?GXU:i&E$U-,%,^g2,h0d,)x@IlYhJZZ|l*E*' );
define( 'SECURE_AUTH_SALT', '&.7t9g)#;]D!?GPt[e=gn3^x@zmQ]=up$!n$KCHI0EcpW<x+%K6Uua%t.>5^4sqx' );
define( 'LOGGED_IN_SALT',   'A+uG[&yr5a5p%]r)o!^4lr<|9^xoFBo=[}U1b@8v)hoYz/@)rBa1$SOwBr+EYRiz' );
define( 'NONCE_SALT',       'op*!4Ca62]52gJJ#Mtjdci%ma>.yLPpAZ+D(Vh<:DANqr3_hgxfZ{U3jz~YgiT:n' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
