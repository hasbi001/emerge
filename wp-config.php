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
define( 'DB_NAME', 'emerge' );

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
define( 'AUTH_KEY',         'r_n(l2&A&*ZX;pzwJEUlk3v<~W#Fm:3*#dLT{>g%VLTXh#?o:jWzn1.|.%=,@jL~' );
define( 'SECURE_AUTH_KEY',  'U8DT#v3eC%B;v<Jtnby9dwx(RYi68F<+xaZsFore:J qzThuf,VPzTz7FS|b|+Q4' );
define( 'LOGGED_IN_KEY',    '{x. v6?q8C^iRpb*Q6X-jy[ovdIf>)Tz(qJO9&)O^8T 0wZeL{7G]gN(:)l=vQXi' );
define( 'NONCE_KEY',        'gEl4+jodxm$Lf q]Mz-?Jxp#fprDG`*cY{|%V#~i)P7?o##sn=Q:n0z96g`kY=)P' );
define( 'AUTH_SALT',        '|2WX0|O[*uXcwi| nd<K3tA{x.[bP}mR_Oc#^]&0=Mkj+BgMkK>eauHx-@?abt|b' );
define( 'SECURE_AUTH_SALT', 'SN?vGKOEJGjPpH#.-;?]m3ee$=i%{>mSt>[TpZ{1;6jf{Zw=H#{$[ipA|xAP<*wN' );
define( 'LOGGED_IN_SALT',   '^I+7R_|]s1_TU5GZA=2e9Ma4-V.B|h$XnUtAF~Y<s_w=0Es1pulK50?F*RaU?M{p' );
define( 'NONCE_SALT',       '2I&H39Yh~;WIy%UKz*3rT#qpko8NJjmK;4g&oQW}$;yG6An%lbfN`@<.6IMZ=d!?' );

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
