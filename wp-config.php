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
define('DB_NAME', 'siren20180815');

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
define('AUTH_KEY',         'uppJ%KKRT:A0Fvo_Oa?+/&.bKz.t{+M/[Jw)F /][mtQXA42j1J[S:J07}+f39UQ');
define('SECURE_AUTH_KEY',  'xJ77v$%&7<z,Ff2C=CW[]Izt,ky.ZiK#*c%2aLFNxcvS>CToFSgDIJ)r|^e<JCCi');
define('LOGGED_IN_KEY',    'mE|d+jQp0R/*kjxb,f8Z$</r#$aCh]62fuA<>h8q&[7;D%xEmr|lrv4cEic].X@]');
define('NONCE_KEY',        '(S/w~,6E]!f$Uer7ClE]iZN(:=pGUXQ;oFui+JEGwST<auluS%px6f<fJ+QFbk+f');
define('AUTH_SALT',        'GMx41&; `|!Q4wR[v@/0`%Uz*skH3#Pt,y`g;Hc Vm{6Y0ZNE!C8Pg3mufOOlZ^%');
define('SECURE_AUTH_SALT', 'X.ZD(q}vTFeM9?|<YnQ&$O*gcq2SwC&#aVm<O6|%b5ooN[,c+P6SR1y5dXNdD,th');
define('LOGGED_IN_SALT',   '0LS)X;YsPl3YUjtH),2%ba?2gSg!Yzrpkb=HS L1bqr0*gg_vr:?,7tTjmv%Zfo6');
define('NONCE_SALT',       '!CL#Y6)jGnWepQNVLHhLwez,g7]P?f-w* sOl%u0*,0-2$~0qywep6IOMXg ;szt');

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
