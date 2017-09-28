<?php
/**
 * Include our environment specific config file
 * this is used to define db connection details for different dev environments
 * as well as setting some constants specific to the environment being worked in
 */
include __DIR__ . '/env-config.php';

/**
 * Custom content folder
 * path to the custom content directory set here
 * see local env-config.php for the WP_CONTENT_URL definition
 */
define( 'WP_CONTENT_DIR', __DIR__ . '/content' );

/**
 * You almost certainly do not want to change these
 */
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

/**
 * Salts, for security - https://api.wordpress.org/secret-key/1.1/salt
 *
 * Go to that URL and get some for below.
 */

define( 'AUTH_KEY', '' );
define( 'SECURE_AUTH_KEY', '' );
define( 'LOGGED_IN_KEY', '' );
define( 'NONCE_KEY', '' );
define( 'AUTH_SALT', '' );
define( 'SECURE_AUTH_SALT', '' );
define( 'LOGGED_IN_SALT', '' );
define( 'NONCE_SALT', '' );

/**
 * Table prefix
 */
$table_prefix = 'site_';

// Limit the number of post revision to store.
define( 'WP_POST_REVISIONS', 25 );

// empty the trash for posts every 14 days.
define( 'EMPTY_TRASH_DAYS', 14 );

/**
 * Bootstrap WordPress
 */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/wp/' );
}

require_once ABSPATH . 'wp-settings.php';
