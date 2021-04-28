<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'keZ1sbsv' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          ')3>r%%}l58mP9I, +IeiUiuXgo$zYQ):>caceHjXUg_N-L[|7q#[Y01bj,rXh8>6' );
define( 'SECURE_AUTH_KEY',   'S&!tJ)iV`HRp2/G]%o5@z=dKA)n}@44F:0@mZH9YBg:svkog`<qhANoz:6lPM(1f' );
define( 'LOGGED_IN_KEY',     'dT[0#Y9hSf8t-SJbPIb]#0j)YR?<9+h4zY6K:;c|dw =Fjl{)?@+L&c|2hQh~t|S' );
define( 'NONCE_KEY',         'cWqQg)ex)3JK4bn>#Wcm,5,1kSNVni_fWjh/8. H$N^fkGJtqxt42t4Jn1>Z2T%@' );
define( 'AUTH_SALT',         'kjD6>q3k@pZW1oE1Q0r=2)2Pw{Gw%!lXYU?G9dx>we7;j=8O(U#q)>a*:XnK1gtB' );
define( 'SECURE_AUTH_SALT',  '2nY_+lTEw&p@rW``9ZtTlQ8-Dr2gS3doLJp4nVIPg,da56%RJrnBf]3E2$if^?qR' );
define( 'LOGGED_IN_SALT',    '(,qfv%I# P,+Zf,3YN-[C|Atuj%0(B,Q<64x>G8<tYy!kW bm5(;tV@U{Ss!hQyg' );
define( 'NONCE_SALT',        '#$~}mte|0V#RE*D!-R5nh(ES:=bB:SQuAfTW,>4h!~gjJjUq^,SmGNFUZ9Q}jL#j' );
define( 'WP_CACHE_KEY_SALT', 'DI%VU#RF#_d0gmpfXCPAj&N!z0S0N8F0[ZqKH;]pP-7[mN1^RocawS<h~}$Mjf}y' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
