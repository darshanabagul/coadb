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
define( 'DB_NAME', 'coadbDB' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'codaemon123' );

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
define( 'AUTH_KEY',         'vQyEDe@~E;ar]gK5CQUXA1!&DXK<f4@6w&0a~&RF(xZQ_.3dX& tZgX*YMEuIw}B' );
define( 'SECURE_AUTH_KEY',  ': ~2bhv}T@SgDGeL,@uck|$hsq@&~$qX|U,fAcK~DQrzqhNQ,[9$7[z(ng{uAO7X' );
define( 'LOGGED_IN_KEY',    '}+{LQO.HP9YZo.1c[</Fk>#@;^8$/W(]apnF=}rFESWMkdZ@tVp}z%m+5q#+|gOI' );
define( 'NONCE_KEY',        'X7.q#7vIdR^|E[a6[6Y$[1+{[[WSO|3y2g73;JgB+,%ER%*JU6nhia#oZ+w7-ZLn' );
define( 'AUTH_SALT',        'V={V%Ga*axQG^poa@=-NqK[4%-,I]Chy[7H7T9V;I[v>^D-Y)K_N:}XqL@,PBz~;' );
define( 'SECURE_AUTH_SALT', 'I*54wSaF(HWCay{x %U{Or_}c$a:)w>dxwJ1;n6Ye8b3*]$Eg[8pL2:LmGTb3Ek8' );
define( 'LOGGED_IN_SALT',   '?cW]AJ%zIh-[d0{ci|}Aj_3.}!z2Gqs4WryDQc)mK[6^*8QxKl/Te~#nfA& `]je' );
define( 'NONCE_SALT',       'GhTgiF1e0>sz%P84kAjs?T3tP(6&-Hp%G<E7i;g&l{?G1/M6_^&?4;Jy L4`anNw' );

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
