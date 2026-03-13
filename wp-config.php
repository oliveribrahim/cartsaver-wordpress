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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cartsaver_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Oliver@123' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'qe0{WjlQyc91ympXEh5wxv^oWi*G(X!2Y2F_*u5 G}Gk)zL?H2q+Rmt~G1h/LE><' );
define( 'SECURE_AUTH_KEY',   'xWLqW@hRw%Ab@v^_2&T]^g]#x&~KaR!Y:Ya^Rj>536xeM&1M9.kyZ$x]S{xLf5E>' );
define( 'LOGGED_IN_KEY',     'c?B$DdCka^DB[_sN*!5%b$gl1aFjL9*N,*|P5MFGEub9{z<%Pl-ce%bmWoG=lVO,' );
define( 'NONCE_KEY',         '}<#^VINzXZs2*#7r.V<k%}~<hmyy*Me,cvn+YJO`di3|{=)SlaK%{LBGk)*mAOx3' );
define( 'AUTH_SALT',         'X}7@<|V#du9m+)<knTs!H1;TJwbbUdn]@CL-]y@J8=yBfb=1]~O*XvG9vhlaN[<s' );
define( 'SECURE_AUTH_SALT',  'c*,q@zlq< (j^6]fY:h!>BlRa^Vmdv5JQlzl<En>iW@b8*Oiro#vj,{P[~CZw)$~' );
define( 'LOGGED_IN_SALT',    'U]AD?*HpJuDY(w7CrV7X|I^Ea:olZq|+hTFFxBSYBM?xUE-(g2&kG?-(}U:=5?r2' );
define( 'NONCE_SALT',        'h=c,hZ)m]`uqkUNF##Sz(v|P+-F?9HFWofIU>^}8_e##qBCNQDocbP9|@t6f+JQP' );
define( 'WP_CACHE_KEY_SALT', 'j!-~Ww$i4!/ReYXU@k.TJCPFcwYq7yy.Cr/L1)WwD=/hGrs1|LY/7BCRL^Nr7|#W' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
//define('WP_DEBUG', true);
//define('WP_DEBUG_LOG', true);
//define('WP_DEBUG_DISPLAY', true);
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
