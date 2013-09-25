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
define('DB_NAME', 'acv_web');

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
define('AUTH_KEY',         'l>!]EY/i~a3(`X9{x<0Ny0ykZ)b5}W;/rcNSB-c<Lv7,Y]^<3(@^f:0Z#RGVS9q>');
define('SECURE_AUTH_KEY',  'YQh!e}`$9u^P(0!uqO-j%#:U@vpa9!s-E%g:qGzns[*bM[~5?8lISx#QhJSNmyCd');
define('LOGGED_IN_KEY',    'c5oC3:wF`(#h{IK|x_z;P2Q[%WKp>2T}MVnmUBJd^2b96lc~MPh:.ZOqj^O k%v+');
define('NONCE_KEY',        '-c.e^km]l~xM-k#%FUON!Vzo3,SS| h[+aI1Qc)ES{unSd$bh[,&I/WDrFfR5B;E');
define('AUTH_SALT',        '/U[h`!#jj!}1E*ys&d$`Z7r(`$S:x)cqZ5?pp!4@?Y({(mbr`t87Fet3zCqt)QNa');
define('SECURE_AUTH_SALT', '5tEv~GvZ|~y3:yt?YBD*ON&z;*HStP4qhfmSxIko rCzZ4=l<BH3}niP2DKDbDHA');
define('LOGGED_IN_SALT',   'YBy2#[EMnMO1a4Dpb^{rVKSq}DY_Ddtqfe9(g@Vw}AWDr.>[I_aa#56X o7rG40z');
define('NONCE_SALT',       ')9 0zJMh#av:&)e.2$K HEe|6>SQW6DcA{QnI|@bZ/H_RP[ 4^!>onV^|IslqHj7');

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
