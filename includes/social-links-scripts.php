<?php

// Add Scripts
function sl_add_scripts(){
    wp_enqueue_style('sl-mail-style', plugins_url(). '/social-links/css/style.css');
    wp_enqueue_script('sl-mail-script', plugins_url(). '/social-links/js/main.css');
}

add_action('wp_enqueue_scripts', 'sl_add_scripts');
