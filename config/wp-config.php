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
define( 'DB_NAME', '$NEW_DATABAS' );

/** MySQL database username */
define( 'DB_USER', '$NEW_USER' );

/** MySQL database password */
define( 'DB_PASSWORD', '$NEW_PASSWORD' );

/** MySQL hostname */
define( 'DB_HOST', '$DB_HOST' );

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
define( 'AUTH_KEY',         '6n<J?TV M!DLf]/=Yf9VARC(t~C=j(^KR%0g-PRwOH7,mZL,v>nVl?970>n!b]uq' );
define( 'SECURE_AUTH_KEY',  'w}!-+Hw{Kx<N<WE-m=mV_wk P536/Z=*/L<=]Ag.z]V{R5qGK:{#NcsOqR=>s({{' );
define( 'LOGGED_IN_KEY',    'Qh^z%pLctLU_X(FzfEh{1Zi_Oh1=i1Bwp?ZB;p}AdzmG9]NE9MYIP6PlQPEm}Swb' );
define( 'NONCE_KEY',        'F B$UGI!iQm8e%L$M[Z {l1PRIX:y%u-91jxG4}5,T,(6.oBPy9zQ7Q a,p4k>a8' );
define( 'AUTH_SALT',        ')XB51Ok,+vyNo00q:`U&{X`MwfaZ7fhwP^+v;rX[uUmq4`sQ9Xm iZu&u=BZmOH~' );
define( 'SECURE_AUTH_SALT', 'oO+AT&7$6jk6)C>-lxdED4N$pEnd{r7o,M8*m2mE<PW$K`qN49mq%^A%Q(kU6%|R' );
define( 'LOGGED_IN_SALT',   '[uR)3CfN>7@)_aPm5l~:9[W}whsm6C2JOLtYZ=Nq0uh5k)B9ot`4Jgi^.5B1u)jp' );
define( 'NONCE_SALT',       'U^H+$NKN~E~^o!SFrRf#s!b*90(EsV(~WFQO&+tSSr%A*@5Ng|19g*{!.zh$TKv6' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
