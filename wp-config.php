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
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '3&rRw@.=eM!Tg!?S6h@wc|&[W?IC(Wzj 5AjQb;xe.x<Xhtd<hJ#AdN>uBKszpcn');
define('SECURE_AUTH_KEY',  '-m1brWL_}aH Z6y<Jv@/Xh(%+560?:Y $XvoF4.nwdg1ODn.QVN>r~.g=C9oNliu');
define('LOGGED_IN_KEY',    'H<EcayD<+c~O=$EqYv@4.wI<mC ?4u5vO6gBgbIRGWgThE8upi*f;B5-|PI^<Lg[');
define('NONCE_KEY',        '5jp}&w(*H4MwSx_E2^cKfLe2&Q){04YyZ^27>xET48pYo}n}!0-(R(W7m5uJAl,v');
define('AUTH_SALT',        'tiaAC<gK0QgOd_!30,v|G1]B99}?Q5,nSa-zX*c@0Lq[xMbq j.pZM<y,B|wC80C');
define('SECURE_AUTH_SALT', 'm2<<LrAhmZ .E,73[7mfEa2`u7_Rdccgy%ky1g02lK7Lk&&^rlOdL<(%MDmT*Ub)');
define('LOGGED_IN_SALT',   'u)lg<Xs31>[,;I!iz`VqYTuTep[Q)c%RYM~3UqYhn``tTl}4f0q})VS<>[ut|Q&h');
define('NONCE_SALT',       ')e0wQKq9)z)=5_W)($U iy)d}v/U2y:|YDM1S`,4?I2U`Ec#r@_o|zy.AiQi=@cc');

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
