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
define('DB_NAME', 'db_fraun');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '?)&$~oWXF`(:!<EQ|bV` qZ[emIL}5s-rID(hU&E8g-!d?+`c=?[|es+qz_c$*O4');
define('SECURE_AUTH_KEY',  '.:[rlOy{`7HG(UCE)r<:qA8c1%Jde4!V<rV{xD~Tu.&#G|LA9E.~zQwV5yOl}X`s');
define('LOGGED_IN_KEY',    ')(#~:={SB(LJl`y-i+IR;G[?6;VW!cw`I?j!^I} 2sNa>}Y$45|]$g-oS6ZpnlgO');
define('NONCE_KEY',        '7M3)4-KohY1kJl.r<.tw(FXU08#J>1]q%OKOX9aMooByJs$jx|-668qCtlnM)I0(');
define('AUTH_SALT',        '0LD+;UTj;~LIoEgDERI[p%Dxu8{562x+@IOIraJM4CM:+yX/5M~qgN8k21/JWnRd');
define('SECURE_AUTH_SALT', 'pwj!zQP4(X-:Z+/O*j+&@y&Sps3R}1t/DbN/db,P1A56^nj^=MUzviBSGsvm-YOM');
define('LOGGED_IN_SALT',   '0]by?.|0`BM|Wlsz@pA=OhGNFP.ik,J2|:Ef:9Tl|-(qWPyko3`PoB*]C-pC[MHD');
define('NONCE_SALT',       'y`+PmiSlZ(,<OH0I(Wt}M-d6H>oKtal@8$.mNr:?!a4t%Ek3HEW+?nU`fS&/p*B]');

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
