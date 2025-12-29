<?php
// Enqueue theme styles
function rtcamp_enqueue_styles() {
    wp_enqueue_style(
        'rtcamp-style',
        get_stylesheet_uri(),
        array(),
        '1.0',
        'all'
    );
}
add_action('wp_enqueue_scripts', 'rtcamp_enqueue_styles');

// Enqueue theme scripts
function rtcamp_enqueue_scripts() {
    // Load jQuery (WordPress built-in)
    wp_enqueue_script('jquery');

    // Load custom JS
    wp_enqueue_script(
        'rtcamp-script',
        get_template_directory_uri() . '/js/main.js',
        array('jquery'),
        '1.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'rtcamp_enqueue_scripts');

