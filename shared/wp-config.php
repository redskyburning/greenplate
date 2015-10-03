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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpressuser');

/** MySQL database password */
define('DB_PASSWORD', 'password');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '4d+y=2ELk>+6!2-*+Bb5JtnUz/E!Co)Ie/+[JLb@RAjUp-Sw#`5#@+QxM2M|, zm');
define('SECURE_AUTH_KEY',  '_3I{g1obRQ`$uN/~|Y%HIe,F_X#b]5`/ak-;`-b8}MAJt@CC-|fg8y*Uyd|(y@IW');
define('LOGGED_IN_KEY',    '3l];94h#}U ]qkCiz7j16N-O_^|e@Hp#Kgcy/JZw0uDEelD[f||Qz7UhKc+e-~+h');
define('NONCE_KEY',        '(q&R[QMJ85I`d2#cx6?Z|-SR7*dq|.~{r57C7KZ%:WUFeiy~8 |9e:Ga|?B_pmV{');
define('AUTH_SALT',        'J2w+WQL$@@:No/-w[op^4%p-/.VDs<3uPAs*|HQ<(iI|Iv=WW[UBS7Oh!|$3!Yg.');
define('SECURE_AUTH_SALT', 'oa,roDs;MjZ)kXI,yE5$5MD:MLW#VijC+I5qEDaGOH,7<!C.X+)^RlKDC-+L@FPi');
define('LOGGED_IN_SALT',   'b`4,1UeO/^Yt5?-8[| aTGQEMWfWO/RDK0)Tdmm_A?=1gud].WWdd*vcB+Z;FrZ)');
define('NONCE_SALT',       ':CzlG Rz[[0#$o4L#lc;q_e!Vr,5#250sL%n/AR]r3Ne<SwS-?5_)S.p*Z?O,Btg');

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
