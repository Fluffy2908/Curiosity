<?php
        add_action('after_setup_theme', function(){

            add_theme_support('tittle-tag');
            add_theme_support('html5', array( 
                'comment-list', 
                'comment-form', 
                'search-form', 
                'gallery',
                'caption', 
                'style', 
                'script'));
        
            add_image_size('produkt', 730, 487, array('center', 'center'));

        
            add_theme_support('custom-logo', array(
                'height' => 60,
                'width' => 100,
                'flex-height' => true,
                'flex-width' => true,));
        
            register_nav_menus(array(
                'primary' => __('Hauptmenu', 'wifi')
            ));
        
            register_nav_menus(array(
                'secondary' => __('Footermenu', 'wifi')
            ));
        
            add_theme_support('editor-styles');
            add_editor_style('assets/css/style-editor.css');
            add_editor_style('assets/Icons/style.css');
        });
?>