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
define('DB_NAME', 'chompoo');

/** MySQL database username */
define('DB_USER', 'chompoo');

/** MySQL database password */
define('DB_PASSWORD', 'chompoo');

/** MySQL hostname */
define('DB_HOST', '172.20.0.105');

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
define('AUTH_KEY',         '2O3ZCA4cD4,7q(,(c~(Fxn|zZMPGNAxbroL:^4_2k1hWj<iXbs%rR&zLQ|T*9yR_');
define('SECURE_AUTH_KEY',  'f3pHKN,1:5.UmVn~lm ]1C^[5RX:!Pv:g.g%,P#7%R?>:BYk;<c/d4HI3Z;dfbUH');
define('LOGGED_IN_KEY',    'K!1Fa4Kr#C OspbJiTf!vOArQ7 qDRR82`W@rK#n$An;Y1SSx{WpW_bkgs&C6P!,');
define('NONCE_KEY',        'XojDi($MW=fQMcoGu;?!?u^rbXn5jq+;C8CeEoM|q$JWjlOsS?ig<%A[dl%^9DuS');
define('AUTH_SALT',        'sRCgvk%l[;f/Mpnf:[A/^TCkTHU !A!:.!4ld9`[?v5G$!,eHPpiW%+oS=E_kySF');
define('SECURE_AUTH_SALT', '@j_QH YYwX;G`d^bFRw|u!<{sX%cy[$ZEJQ[94L*$bUa#lfb)t9C:v8- FsUq=^.');
define('LOGGED_IN_SALT',   'LiL&_!bM>;%J(B}Qr)V{?fuszRTwg9^POl^g>MV);p<*oNlJ#wH(JJ~db==bATPT');
define('NONCE_SALT',       'On>;YBxc&$(nZCcBDZS}G>uodrn:B[z]2O%#qu?hMY9Vqe8+.X*9j)l&Ng,;%SDp');

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
