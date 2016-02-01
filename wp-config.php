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
define('DB_NAME', 'wp');

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
define('AUTH_KEY',         '~c]|f-8c|;mp@VH*dDQjI(7r)@bpNkH$<~`e% <eq[sb4Z`QVZY6Z[f}4._G;.@I');
define('SECURE_AUTH_KEY',  '%l?-yfV_d5Y!P`oGfDali<`}]84B]c;`z$Y<_P@Uo=(pC>Cjlv`i`Pr7Bu||3j1*');
define('LOGGED_IN_KEY',    'p<rRm a!;c-5&Y^]X$te8+I{@Nm*Sx!?|:|r1c/4:b99juv*8IO?2-$Z(W+q=(-|');
define('NONCE_KEY',        ')QJ1E~t)gJZ:mlArYZ/-5%ypzOjsIH0^M#D+I`(+|Yk; 93Bhf8!6=KyftHeXxh,');
define('AUTH_SALT',        'sXO P}m*A;(hEdJ(>pv5|+gyf5HR,J^Mnuqr=||W}_a|4:QI7Tx;0mT:z]v-^zFJ');
define('SECURE_AUTH_SALT', ':7&|D6%!<Zr>zI.z9a!iQ>o#.d<{peW=P*HQ>.-wKxWVZnRioz$2Z{pA-@U/+q]m');
define('LOGGED_IN_SALT',   ')4O-E|&pT(tsDzil8<g.f.FD+`U[Lu!D+|UOeC>Sby>audG!-woT:Xn/%j@/]e|6');
define('NONCE_SALT',       'Qj;VvB.~}nm_X-qKYzv L2K-?[O|(<sQ4@=A-QVc+0>4_j%sqsx)S-_]`OX]a>C1');

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