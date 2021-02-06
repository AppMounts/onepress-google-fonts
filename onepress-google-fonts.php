<?php

/**
 * Plugin Name: OnePress Google Fonts
 * Description: Privacy compliant solution for Google Fonts
 *
 * Version: 1.0
 * Author: Sergey Fritzler
 * Author URI: http://appmounts.de/
 * License: Copyright by Sergey Fritzler
 */

/* Sicherheitsabfrage */
if (! class_exists('WP')) {
    die();
}

define('GDPR_GF_VERSION', 1.0);

add_action( 'wp_enqueue_scripts', function () {
    wp_enqueue_style('onepress-google-fonts',  plugins_url('fonts/fonts.css', __FILE__), [], GDPR_GF_VERSION);
});
