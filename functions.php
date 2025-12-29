<?php
// Theme functions will go here
<?php
// Enqueue theme styles
function rtcamp_enqueue_styles() {
    wp_enqueue_style(
        'rtcamp-style', // Handle name
        get_stylesheet_uri(), // Automatically points to style.css
        array(), // Dependencies
        '1.0', // Version
        'all' // Media
    );
}
add_action('wp_enqueue_scripts', 'rtcamp_enqueue_styles');
