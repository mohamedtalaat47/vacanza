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
define('DB_NAME', 'vacanzadb');

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
define('AUTH_KEY',         '/^T0w9g^;q@[v_HYc x$Vvoq0W4(U+EA/_jJtfoFeQ^))8C>-RRcY->-EW>a~y0D');
define('SECURE_AUTH_KEY',  '1]Ci+/iL^IIr!@JhRF5N][de{5I7HDUFr$,*_lC*~sIMAD cfY:hs}Op1Fb7j})}');
define('LOGGED_IN_KEY',    'hcD-JV2;^s8Bls!vYz[Zfuh{C-L!i_MBT^[T3JtO0_$_=yxdlv`-wwQu;xI!X[2Y');
define('NONCE_KEY',        'CL-JCV%Z`fIDzF+)E~hMwV92JmU6@Dp!]:Oss>>X+%9dczXti f[R4Ys/#&+NQy!');
define('AUTH_SALT',        ';El]5]p?i ]Gg*n]5^q!+)FFfE>8`7Dc#!k*6^%a#fP9~Wjq1>,%>%jwSssW|_2W');
define('SECURE_AUTH_SALT', 'QA+U61<>X[0~[t7sDz{3{VU^$~l aEsbtY:w*m2;__ZxCLc x<Hd;C9)X07w55,[');
define('LOGGED_IN_SALT',   'sISh`EvMx+mx&in5+auML<6E1/X(5!MtqWwua3$w+P3;=p?yinH-`i)v5-wE63}q');
define('NONCE_SALT',       'F[6,,B}/H+0 7o<bpR-{7%+3P4$i5<]DuTRFB0i%+<k7f)]c7M0+Q4$56#+uFP+1');

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
