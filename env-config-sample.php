<?php
/**
 * This file is the config for WordPress it overrides any config set in the WordPress config file.
 *
 * @package    WordPress
 * @subpackage sc89
 */

/**
 * These are the connection details for this environments database used for this instance of WordPress
 */
define( 'DB_NAME', '' );
define( 'DB_USER', '' );
define( 'DB_PASSWORD', '' );
define( 'DB_HOST', 'localhost' );
/**
 * Custom content directory
 *
 * Available here in case staging is on a sub domain then in a folder
 * no need to change for local or live most likely
 */
define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/content' );