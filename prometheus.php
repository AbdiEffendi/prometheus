<?php

/**
 * wp-less
 * https://github.com/sanchothefat/wp-less
 */
if ( ! class_exists( 'wp_less' ) ) {
    require_once( 'wp-less/wp-less.php' );
}

/**
 * wpthumb
 * https://github.com/humanmade/WPThumb
 */
if ( ! class_exists('WP_Thumb') ) {
    require_once( 'WPThumb/wpthumb.php' );
}

/**
 * respond
 * https://github.com/scottjehl/Respond
 */
function prometheus_respond() {
    wp_enqueue_script( 'respond-js', get_template_directory_uri() . '/prometheus/js/respond.min.js', null, '1.1.0', 'all' );
}

/**
 * html5shiv
 * https://github.com/aFarkas/html5shiv
 */
function prometheus_html5shiv() {
    wp_enqueue_script( 'html5shiv-js', get_template_directory_uri() . '/prometheus/js/html5shiv.js', null, '3.6.2', 'all' );
}

/**
 * selectivizr
 * https://github.com/keithclark/selectivizr
 */
function prometheus_selectivizr() {
    wp_enqueue_script( 'selectivizr-js', get_template_directory_uri() . '/prometheus/js/selectivizr-min.js', null, '1.0.3', 'all' );
}

/**
 * modernizr
 * https://www.modernizr.com
 */
function prometheus_modernizr() {
    wp_enqueue_script( 'modernizr-js', get_template_directory_uri() . '/prometheus/js/modernizr.min.js', null, '1.0.3', 'all' );
}

?>