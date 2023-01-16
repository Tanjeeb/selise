<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'selise');

/** Database username */
define('DB_USER', 'admin');

/** Database password */
define('DB_PASSWORD', 'admin4321');

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
define('AUTH_KEY', ';!3)sq/=T:;GJuqI875UC7B!2O?wf8)jiXXOY+5X3v0<eC{?Z![E}h/udaaDFY>c');
define('SECURE_AUTH_KEY', 'yoNF%Ut2b[+!X;~X{rcVS8fehP!mzk}q]?MPTp>4j<xq|ky#E8zl,d`&%Ag[Act+');
define('LOGGED_IN_KEY', '-8Ax ,aU&abV$u0H0ea/8D9du)+aI7{2bOOhklkA3Vi=g~=#tK[tqL~hgn(;IASD');
define('NONCE_KEY', 'JH0)xEr8Nw1#@o]~hySDZOKYN}{~0;*/<Nf;7I,b;-r4&!DhMaPk!) @(:x~]qN ');
define('AUTH_SALT', ' kK>Aqi@8ho$3r#tCSm^v;-{J  p>m5~d|B:yCMCjok(9?Q2kIsn NTCqjJ8MDHP');
define('SECURE_AUTH_SALT', 'Tkww}y{]-<>ftQ7pS%`&zt31 m$PgS9_ a0Y%uvc^>%&79P,o:Ha32F]6PY>0`<#');
define('LOGGED_IN_SALT', 'AhU99XH0<jRb{Q!of{@T3> |9:{0kS2Rr~jvpF;f[>cnrT4Q6To4xTR]B(+=PBZs');
define('NONCE_SALT', 'hzlC=rpkRsBH,(l[N g*ZgHJ6C5<6.7gNfvL?&J5&&!Q,=,?Is*=1XBHvXa[KK*h');

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
