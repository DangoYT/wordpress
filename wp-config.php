<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpresspractica');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', '');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'b+i0@W#*:+@dEh*4i,$`|j8{)bp$=jjrvgm[b(oyJ4C-^nCm0yho9!KS4Hf>23Ok');
define('SECURE_AUTH_KEY', ')Qv$(1u@v@x+DWO@YO}G1YQ$afpwq.ud-c*SKu!0P(!hc--26M$$<+u0hv;/[2Nf');
define('LOGGED_IN_KEY', 'X#CE:L(m[Cpe7i7/~Tn=lw,.jSVLI|ZXes9E|DI/,HhnRTYJB }+mLy*>|iJ m1 ');
define('NONCE_KEY', 'Hg|;.w.x{dgfwahq<kB3rQvf[4/bJyjuJehkmSoeP{zfMGZ8{`g!V/jJq?l/i1>h');
define('AUTH_SALT', ';{0#+&wWa_?eZU?u%Y*@|VaJTw:vS=)NPP7]308J;8%{ KX#M074<pVYrtrE)=^L');
define('SECURE_AUTH_SALT', '2w]9G`DSBhT0cY3m{Hmd[rfRx:|l`b$kl|@mo*x;iA+?fYZ Ig|j+y#*cZx~F;Ma');
define('LOGGED_IN_SALT', 'bvU.65|ZivAC>ttLC}QQ|{k}pi2bqEN^|<h]iZQdH]4uE]tjT.vE&& {.[e0_m_b');
define('NONCE_SALT', 'D#x$5<@8P^D6 E4>:[rzo>i2ug4Et<mJxSrg>H_]a^M}W-f}tLAcqO&9-NW,-|vi');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);
@ini_set('display_errors', 0);


/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
