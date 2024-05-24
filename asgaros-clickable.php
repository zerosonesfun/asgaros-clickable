<?php
/**
 * Plugin Name: Asgaros Clickable
 * Description: Makes .forum-name and .topic-name elements clickable, redirecting to the first link within them.
 * Version: 1.0
 * Author: Billy Wilcosky
 * Author URI: https://wilcosky.com/skywolf
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

// Enqueue the JavaScript file
function asgaros_clickable_enqueue_script()
{
    $js_file = plugin_dir_path(__FILE__) . 'js/asgaros-clickable.js';
    $plugin_version = filemtime($js_file); // Get the last modification timestamp of the JS file
    wp_enqueue_script(
        'asgaros-clickable-script',
        plugin_dir_url(__FILE__) . 'js/asgaros-clickable.js',
        array(),
        $plugin_version,
        true
    );
}
add_action('wp_enqueue_scripts', 'asgaros_clickable_enqueue_script');