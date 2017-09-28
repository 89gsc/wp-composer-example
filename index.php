<?php
/**
 * The purpose of this file is to load the WordPress header from the WP sub directory.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define( 'WP_USE_THEMES', true );

// Loads the WordPress Environment and Template.
require __DIR__ . '/wp/wp-blog-header.php';
