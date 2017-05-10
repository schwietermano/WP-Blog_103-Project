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
define('DB_NAME', 'wordpresstest'); /*livs site: livslink_mywpdatabase*/

/** MySQL database username */
define('DB_USER', 'root'); /*livs site: 'livslink_wpname'*/

/** MySQL database password */
define('DB_PASSWORD', ''); /*livs site: Cherry16!**/

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
define('AUTH_KEY',         'ylU1S0k8zsF,}PdIl4=78UA/6h?Sp86[H[~L c_Id12}=Bt#V~d[$Xpv1iP#XzVm');
define('SECURE_AUTH_KEY',  '.fdaiaeO+Oe2@MM<W9#;0=9qi%0L{`/5*#f5d@Jl00z6DzodGWe~p[e2L|VnL8yV');
define('LOGGED_IN_KEY',    'iuN[[m{XSl+[O<}S4EI*aE^A=q:piz.?I(*RBlSPJ7f3BN_73gCEw$:T!ioNR4m0');
define('NONCE_KEY',        'aC:%7o$hKPz=a0Ea!+&+]kI]DnYKjk!3r;JI#-14gt/McC L-8;hB|UbkL!;yC=e');
define('AUTH_SALT',        ']L>YtVXdx1>} I^@v<%NkM)jNH^koN*=fp_2-:r1(kLG+hIRB[ajkho>tsfb3+Y+');
define('SECURE_AUTH_SALT', '|,0Gak67aRjSf&CeANf~.e<8L(N^&;;tjh:|bl|Kcl6-.[YWv;<q{Cq>*ojw)Cr?');
define('LOGGED_IN_SALT',   'di!2$~Z?w%:qJxcn:DYFPUY]uT?c{]^GxPSSmbt7asd|h1O[M.b|~kwdCC`v2Odu');
define('NONCE_SALT',       'AXgg@:-E[_ Kt,Sb,uM^A0+M,nEXu%g4Zq:6NHqezX4F![.fiZeYhdHGPZooxcnD');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_'; /*livslink site: myownsecurity_111*/

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
