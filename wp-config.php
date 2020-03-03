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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dc_breizhsurf' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          '}1-FU*%SRXJ)GoawMo4.@?]Q=jmW#[e^@c%:.,(vL1Iz5z}V195N#WG7Oj_OvG):' );
define( 'SECURE_AUTH_KEY',   '?QD:G*4`|#Z|DiGZ`sx@5ZK-_8rkbukTXlQMl?QnD,>$#Bfl9pVM%NDlj0zDr,R(' );
define( 'LOGGED_IN_KEY',     'opEqKYnP`/Y5y{]NB+:*q)+oZhO=JX{NbWbwTY7FB9T#~OAFd]ny_9=Dd,,f1RLU' );
define( 'NONCE_KEY',         'o1]0u1O]*rvo0V&ZA]7k{=MlWm6odzkGk,IPFuHb5y0^zK{ M5[y^ywq[2k<=p)x' );
define( 'AUTH_SALT',         '2Av.Fk-kJ/rlZ4m9&C[EWSWstel)#l/}R*P(^E6/5CPhQCAV(!*LyCIazNPp-Z,X' );
define( 'SECURE_AUTH_SALT',  '{N2PX=W4W655$WVlTJ^&Lo,^0?~yU)?AK(`6Dq UExu>D5oa+oTZsG#5^GpsZ3>%' );
define( 'LOGGED_IN_SALT',    '8P1TN;m@9I^{=&PVN*cJ[-W#_EUPh+yz[?S? M :hZnX)+PH}M6X]GwuMbp&!b88' );
define( 'NONCE_SALT',        'C8?z>:k-MH`R}E9ueUu)9m%t^IQnufPili*8exB<c@:v:,~M:l-kD9|M|L{nkC_0' );
define( 'WP_CACHE_KEY_SALT', 'xGK>b{=>M&p4o8~,+adH]iuczKCGx5K0j9do_jyPW#Hrfl%DVllJ<)5@[=U|du2F' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define( 'WP_DEBUG', true ); 


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
