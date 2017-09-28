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
 */

define( 'AUTH_KEY', '3}Pjw.]k#l{GL)CMU97N67NCXv_F-Hk.A<4iV2W+JL#tv[t(R|6W,_Q3W.A]ziS~' );
define( 'SECURE_AUTH_KEY', 'WmB%%9vfc(L5MH D)pe48Lc3mXey.tZ9o;vauTt3U{-DRR1w-zM&^gd@T);qzIS)' );
define( 'LOGGED_IN_KEY', '{|9P{:J<xyQ`O28R@)]C0YKv=tDl|Wk-tAQP)paILTxE;4/,?OF]R63d+%ak |y$' );
define( 'NONCE_KEY', ',T6F?>apCG_6l!TJ-p?!5/A#[/ DAivS+aG{]ZrNsDt)%<rin2W,ga$e]:@y&m-Z' );
define( 'AUTH_SALT', 'ANT^C|2f|f%FqQvspc_+`n |yIeP{l)|lN5Lo;f>G:EhFS`4@U[-.?sWWiL2$c?n' );
define( 'SECURE_AUTH_SALT', 'r5k^o;}i$3H mjfm+9 n/wvGE+3r+hkucyEC,k,pCne(gnM5rBO:adA{J$G<N$xI' );
define( 'LOGGED_IN_SALT', 'bU?sdTUeVerUIk0iy1K-B8wS3vDyhJe#GPF.sO+X+QGC.$NlLIc$f3Y)E*E+YaUQ' );
define( 'NONCE_SALT', '?P1Z*sVTCM((v>X@$/LY~Q{:#p1CaKQW>m6Qo.D@.oLN-g^B`<,#?x2RUAev=WJm' );
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
