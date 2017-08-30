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
define( 'DB_NAME', 'WPJazz' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define('AUTH_KEY',         '2`-;!-c/Q>UNhJuuG0Q{JiVK-!giB*BWq#@BdDbNH4#+G]up;Wf+LNC(cOuge6ge');
define('SECURE_AUTH_KEY',  '9y*j/u@o!+|zOnQz0$ot#[<<2$G,qGP0>--kMj>1!/=|I-~dr3a#--Qk^jzDvGaa');
define('LOGGED_IN_KEY',    '4KNCyev5Z/U$u rj5w1}b!+:-VBl/<eR=> y<R9{sQvMh{ZB.,f+sB.^!]|8dLER');
define('NONCE_KEY',        ';v0GUsjMQ8|3}VY W:K!tj-Jm%foZlKB+s@-%55#VzjyH{}%4;&(Ka#%?i1%N+{+');
define('AUTH_SALT',        'Rs!7#bx{.4b8mKDjejAg]#,_RtV|pB~<1:6?fxWAWJMPr15p/02rLJd5]33-zum}');
define('SECURE_AUTH_SALT', '=:9G$[-TB!siVx%!m(;AV&J:b0XrSCQLcm&LHO- w/HPk;WE4!co,&&rj/(g.+R<');
define('LOGGED_IN_SALT',   '7HdBaiy&(jex,-~~jIqq#F-&F=C!$Yj]IiK!>kT4ddZ^L2ZeXA[1w_Ls;,+tQB!(');
define('NONCE_SALT',       'mpp#-iUa<-_ dPonk`?T||}+-pJA*u&ow_EpYYHSJ*5&|.kD-4|Mikk**xhib_a1');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
