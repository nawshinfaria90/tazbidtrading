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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tazbid_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '{LMvK?0x%p{9:SLjvX+If$V#Uly; %uV3sY{JxQJ%ox6`*jT8 yw69a9{bFJO:Tc' );
define( 'SECURE_AUTH_KEY',  'oXqmN%Y[KiEj+^:UMh)v/?$U8[fY!@M!2YcuNDhdB|7~9x5o289IP!$-i4gGhyDO' );
define( 'LOGGED_IN_KEY',    'e3*3wt#D>U{9VK^$q4=jhPJ}I(Xw1<.~@QxT%%vn81{qVWS8wR8ccDqi[9nfF?2y' );
define( 'NONCE_KEY',        'mgc!-sPao6E}[B%[!Ib5=I*I=m8s./$$.k84je8Gl/uf<%TAZKyjPRU[&l2RW,cE' );
define( 'AUTH_SALT',        '@,57UB&8{iCS7!q,`~;*0}+yvRP?:6X^@<2aT = c([d?fA2F3U|){IV@j)%!QvJ' );
define( 'SECURE_AUTH_SALT', 'O}Ej.saNG~UT.|v=Ite1vvV)WaL}fH*D^Dl#n~_MR#JFYeFuR1LPY ftVn~=jmp+' );
define( 'LOGGED_IN_SALT',   'Y8k=M8+3C+B*k^OJR9Ceg.(geUPL3AnpS<hQT7Dp{}#9AY<Ek*C0;U>{7 mn0J*b' );
define( 'NONCE_SALT',       'xPM<t]Hy[i>z_OkeX`Jh~JgelUb-6!%:$ElAg (]Sa_0kzF+0QK^~HGf=SR3WUkU' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
