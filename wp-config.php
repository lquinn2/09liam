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
define('DB_NAME', '09liam');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '^UWru69~h[4Qu0.KrqjVC#6;Kjkn2GJ;s+*J]I>6y7v%>a.,@7y,AD4t=^`5rFk7');
define('SECURE_AUTH_KEY',  '>jgz9;4[N?V4{zS#Fz)*dN{@dt%c[U.{i)bWEa8lMYVV@`63}SX;!BaRJ2F:JJMo');
define('LOGGED_IN_KEY',    '&KXQ~&e6%%_uQ_aWz,9$#Ay=8QFL),sxa)H&UG$CUx3<&{!GXkqmA~]VFP(G`iA5');
define('NONCE_KEY',        '|:naYHq@X/U|KkL#FE!jSLIJ_IYl3VqW-dvSR-/TBThYC%9kXRSZq-p*lU8Ht{[z');
define('AUTH_SALT',        '64&vs<Dljy2(7ChcW6gMoD@sgWBt:kT6UMiK]28@L=kvWtW;qbg(=AqU#O&pW>v,');
define('SECURE_AUTH_SALT', 'k]Nj$l>G_=V/?C-<;=,Nf] <j`(u1@4Od{fe69U!y1m]MIJ),D*p14@njM<VRJ7P');
define('LOGGED_IN_SALT',   '[)(=#R1n.lZU/w|tyD&8cBC0|efuArD%#Vz<UlXJ[`@A<trFPvNC4=@1)?vKq$.z');
define('NONCE_SALT',       'I]Un>apPJGb#~[?h+yAl//2>zMqZ4_0tq@DsH,T393kK+0,aoh|r6$t9w(O7[tLg');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
