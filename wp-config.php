<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'stamura_db');

/** MySQL database username */
define('DB_USER', 'stamura');

/** MySQL database password */
define('DB_PASSWORD', '15234088');

/** MySQL hostname */
define('DB_HOST', 'mysqlsvr');

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
define('AUTH_KEY',         '7#p&uyCe]Q]$C-(_4W~y/K|SgALjR9+D0pW@1cOA_^cV^Rd@fA]Hv.R.z}ps;pSR');
define('SECURE_AUTH_KEY',  '8|ILd-ZtlqFq/@/bJB`zDVk>TbAc($W67/KA?PIkkeNbw|@n*I dj145OqCUDW;/');
define('LOGGED_IN_KEY',    'T#>TvkMO!Nqer5m:.6w@12h$}=+Y/Zzf]^?QK[sd|T#((y,Jmt.Q>|Lc@2{5:h}p');
define('NONCE_KEY',        'D E(qeuJOlQk?j+mJ25TM|M+-T48<}&O/|V{RbMl@ALz)|`AG8-9WQf>EY;|j%D}');
define('AUTH_SALT',        '{!|ZS>@3w>hu:o[g9WGW|oIM~nC@@INW(`hLTvJoC5&+ K-&Ch+yo+q_dzp8KGFD');
define('SECURE_AUTH_SALT', '6-)#FTg*r-3b/6~J(;W(,-U<s|<l,J^#,Y?pVS}fpKq-_nuo=EP;KrR_N+H9g;;B');
define('LOGGED_IN_SALT',   '=CA4*3S+879WCH#QHo4h{bkg-lz)^?Dr 5gE(I]$v{V$$Q6^|wbq4K-6l<?l|3^$');
define('NONCE_SALT',       'AA}L<twT4c?|n/A!Nazg-EU?#3$W.d|1ppVa7a*bU]p_/~yN-/{C@uD}&fd(r?`i');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
