<?php
    add_action('wp_enqueue_scripts', function(){

        $version = wp_get_theme()->get('Version');
        wp_enqueue_style('curiosity-css', get_template_directory_uri() . '/style.css');
        wp_enqueue_style('icons-css', get_template_directory_uri() . '/assets/Icons/style.css');
        wp_enqueue_script('webdev-js', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery'), $version, true);
    });
    
?>