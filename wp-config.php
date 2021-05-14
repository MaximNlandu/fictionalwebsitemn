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
if(strstr($_SERVER['SERVER_NAME'], 'fictionalwebsitemn.local')) {
	define( 'DB_NAME', 'local' );
	define( 'DB_USER', 'root' );
	define( 'DB_PASSWORD', 'root' );
	define( 'DB_HOST', 'localhost' );
} else {
	define( 'DB_NAME', 'id16818258_fictional' );
	define( 'DB_USER', 'id16818258_fictionaldatabase' );
	define( 'DB_PASSWORD', 'Nlandu98765.' );
	define( 'DB_HOST', 'localhost' );
}




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
define('AUTH_KEY',         '8kyEwabgaFb9vUGoTRDF5CgtQvQ5UNi03YUDryNZgqdNNq+jMty8a2aiWbfuANnSFxITou1RISL1g0HNyUot4g==');
define('SECURE_AUTH_KEY',  'E7OuZy9CnfwqY0rkVbvopdRf3kYr4dTcfQyUG64yvsNe5LzQ586zhTmDqy0ngoHq14CJSKI1PWN6r1r95qhysg==');
define('LOGGED_IN_KEY',    '9ZM6SbUxRNaQAs5GXS8787UfJeVWv2OUoJv+4rsvyRKZM2KsmpAp+dBR3v1qXGsB4SfCpEF6SJQ8pkULV9OkSQ==');
define('NONCE_KEY',        'HmNlqsX+ibu9+MlyijSffct6XwpJWAQQNFrVCaDUgskNuQtpOHB2/9T9DSWQ503wTeCT/6Ixg2xqk4kxVm4GxA==');
define('AUTH_SALT',        'O6OPIHhP/ztgBmN8Vbcm7N9WQqbXnMAi/lIySb6wAnMn4CBDs6sCa8d8AvlEnkjsjkH/4bSfTpIivJXz9b3kIQ==');
define('SECURE_AUTH_SALT', 'Jo8yMJsnuyF4Ks6NqVTcfJQcDfogtQrYF/Hey/Hx+oVBSAvIdOvZ1L5PRCOpLmQwPRvw9l1Cusp34dJzP+ZPJw==');
define('LOGGED_IN_SALT',   'e9gMeYa4uVgFD9QRtIRjHpXT5JIyOw2Sik3BJ/cySeOgjs+vLiFULJcjDfiZ+lo5DAkfb5/gSCyQZLp4xiPPXg==');
define('NONCE_SALT',       'MpSKnJgwad4p71fDkzcJdLMAz1Qbhjrve5Wk9eykIrv5MIeTo5opj+Vz/LiET07RdBIhArUbsNoTsJdpy9ydCg==');

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
