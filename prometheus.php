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
if ( ! function_exists('wpthumb') ) {
    require_once( 'WPThumb/wpthumb.php' );
}

/**
 * respond
 * https://github.com/scottjehl/Respond
 */
function prometheus_respond() {
    wp_enqueue_style( 'respond-js', get_template_directory() . '/prometheus/js/respond.min.js', null, '1.1.0', 'all' );
}

/**
 * html5shiv
 * https://github.com/aFarkas/html5shiv
 */
function prometheus_html5shiv() {
    wp_enqueue_style( 'html5shiv-js', get_template_directory() . '/prometheus/js/html5shiv.js', null, '3.6.2', 'all' );
}

/**
 * selectivizr
 * https://github.com/keithclark/selectivizr
 */
function prometheus_selectivizr() {
    wp_enqueue_style( 'selectivizr-js', get_template_directory() . '/prometheus/js/selectivizr-min.js', null, '1.0.3', 'all' );
}

?>