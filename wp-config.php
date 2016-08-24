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
define('DB_NAME', 'poetrify');

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
define('AUTH_KEY',         'cO:rGD?vWbp[YqiW.bAc)eeeeYkeNZBMucA5CNVO+|bHESD}OfWlaPd>.uw0e`aH');
define('SECURE_AUTH_KEY',  '0pI(U7A}!I!$6; K?_W[hK$inA`+KWJ&CR9aVM /i_beI&a6q W/`uc0Rr-dnT->');
define('LOGGED_IN_KEY',    '%iRTR/dm`->O&gm4HMJ*f=g3xQqAF~^)#2c;*@o~/^N~L!HXV7I@2BK5p`Vj,[f<');
define('NONCE_KEY',        '2NPiV>j%en642wEXu$}A}Pv/oTh_/@et?,d5mH(jXGiQ^]bBc`:(O9<Ou22pO^#_');
define('AUTH_SALT',        'lf~d]kT*b_]po/_ vo3H|RrM9 +BlcU6&vJ33@N2(*9oN}{(*.m;Q{Ox{p=:E!,H');
define('SECURE_AUTH_SALT', 'iH,tE7WD~=04RrQ6nTbUP?ej)Fw+~{[5oSo)AtFB)C_7mzwGBYb3VhmA/B%yopIB');
define('LOGGED_IN_SALT',   '69O,0jPa}kxB^>3z2#_j+Pqip|HQ i>5 yFOS]-#;v{P>hL])g3,  Ibxqr.[rj>');
define('NONCE_SALT',       'LC0mz}.ua`8<2}n7lp]b]i~OmWXo}B3L1kHQf^/Q<MSatY+mNi W=5N(5B]$6]<0');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'poetrify_';

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
