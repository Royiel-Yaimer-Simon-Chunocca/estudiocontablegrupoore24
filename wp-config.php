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
define( 'DB_NAME', 'estudiocontable' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         '1d]RJEk`,,}r)Z8K&x?_0G.+k1Z{DY6%n}O(s:5FzjFlt1*:HN;LUD(V$rcL}+V4' );
define( 'SECURE_AUTH_KEY',  '&Z55@ubA1hi>N*s6=k)zE^36jg~2,1Nzx;5czTLc><b `!ZB~)CtYxtpte%wG(xQ' );
define( 'LOGGED_IN_KEY',    'W$z,$Wxe3PDNHS>wb3pjp&nrU!6z7~f9GnNt0)r|L j*h{Xn{`>/EYWh}_:<O[XC' );
define( 'NONCE_KEY',        '4D^C:%<?N^HFnFZ?H?d{W>`0<BKjER?MT-=R;c&3:3[/7/gqcXs8+$]Ipt+tE,?^' );
define( 'AUTH_SALT',        'q/O(n+ }8$^W1GiivI|hFz$]%&X/eK,n6&hQ{z%4Ae q{K&^x/Wp;`e>9<X(j ~r' );
define( 'SECURE_AUTH_SALT', 'j9ex}hu!:T74o![;E1_cLBV+r=jg6tDJ%cpXE|[ymh$@>M>dxdgdm,0(~+[vRjqq' );
define( 'LOGGED_IN_SALT',   'pT?$xcaqJ7i}E68CKfh+VOZY)4gRsDrxZ9c%t`NOyWmEij-T}iV6v;lo62n;3IEa' );
define( 'NONCE_SALT',       'QQP?uC/^s(_p%P%ymXQfy{+@bJ}GAa5Vch<y&M-^X F_gkRBwH(r)qg.APr!LN#h' );

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
