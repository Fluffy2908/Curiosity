<?php
    add_action('wp_enqueue_scripts', function(){
    $version = filemtime(get_template_directory() . '/style.css');

    wp_enqueue_style('curiosity-style', get_template_directory_uri() . '/style.css', [], $version);
    wp_enqueue_style('icons-css', get_template_directory_uri() . '/assets/Icons/style.css');
    wp_enqueue_script('webdev-js', get_template_directory_uri() . '/assets/js/scripts.js', ['jquery'], $version, true);
});

    
?>