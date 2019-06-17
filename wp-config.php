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
define( 'DB_NAME', 'geemode_geescr' );

/** MySQL database username */
define( 'DB_USER', 'geemode_geescr' );

/** MySQL database password */
define( 'DB_PASSWORD', 'rs@9jp91S@' );

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
define( 'AUTH_KEY',         'egoyqtzkzleuxma9eeqjw2rcdhqfk3ujc5cyo0h1d2dllncn52ixgk7ktdbpil6i' );
define( 'SECURE_AUTH_KEY',  'dderzunprfv3jttkfptmoim47xl1gloteky4nyxur5rtwnxdober2feddco2wbul' );
define( 'LOGGED_IN_KEY',    'aszagjadkaswjnsylqq0gesxjr7hidgrjotmsivtv1slx2r1a5xsldioro0ulq5c' );
define( 'NONCE_KEY',        'zpqgnbz9ynzpsga6dorofifsyhnr77sxyezy5sjtl7uusmkyj45b3etiquflzcfi' );
define( 'AUTH_SALT',        'zm8yuxtocanswenmkk7jeaz7j6yesb9bzavpd0ccqaes3hogidgav2bo1dpv7hg6' );
define( 'SECURE_AUTH_SALT', 'zic7uwrsngfyyhqoqdadqbsizh8hkuv24b7rq8o1kyrkfqdvxm8elnuldex2ywbg' );
define( 'LOGGED_IN_SALT',   '6xip5yb2jidvggtjhbgmpyj0xzkdxbjk0oaisnkfqqcv2whvxox2ij0jlnq2fip1' );
define( 'NONCE_SALT',       'gijvyzclfmmqbpb3e6ts4pdz08bxzjz8mryyuolgwcwnuczqjktqir1bxqwjvtnv' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'gs';

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
