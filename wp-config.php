<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'palmbay');

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
define('AUTH_KEY',         'MV(wmI}}=ou+p/2V_({}F=Pgl.s.j: *gF3F?4LAD|-[@|jG!$XaT1QluX[?gvO$');
define('SECURE_AUTH_KEY',  'xAj_2E~9$_p/?za($zJkoFMD !-nKqPq>P)Ai-T|1/99ka*isv/SM?.gz)s-[Prs');
define('LOGGED_IN_KEY',    '|RX(QnMrD-Hr,-Q,]P^;-WF0?(oqwrpSOYEWa+V@zK-9C[m8 #~5q:bPKD^Q#-vh');
define('NONCE_KEY',        ' xtTH_O2b[s]Np%#&O{[DGD!yQMV3-2)?DI#p5h=O@9-r=zv2>4QB(}-W}|SA;8[');
define('AUTH_SALT',        '&tDksEvS&l9cc_wu^!]694,+-*9UyXZi<*VX#(AD@!fdq:2SfDpR]N nn`^jHB>[');
define('SECURE_AUTH_SALT', '`Jd|g$:}M8P#eP%tg+/I2gWNGYqNdCEc>NH7i5*H[AhvaEQfW_)v<O+Yere<R8fF');
define('LOGGED_IN_SALT',   'SpKd|OWBd,AyHQ?PXr-4cZ&;-KDvi61DZ7AZQg|tw]:@bDt]99a0,p_o3sv^&;N&');
define('NONCE_SALT',       'AMZcR6K=UXae8kxHXd1G|fZ>(N`9{k;tM@%&h+-(h<)-t9ASZZ`M|fM^D?: W?Gl');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
