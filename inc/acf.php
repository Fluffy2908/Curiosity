<?php
    

if(function_exists('acf_add_options_page')){


    add_filter('acf/settings/save_json', function($path)
    {$path = get_template_directory() . '/acf-fields';
        return $path;
    });
    add_filter('acf/settings/load_json', function($paths)
    {unset($paths[0]);
        $paths[] = get_template_directory() . '/acf-fields';
        return $paths;
    });


    acf_add_options_page(array(
        'page_title' => 'Theme Einstellungen',
        'menu_title' => 'Theme Einstellungen',
        'menu_slug' => 'webdev-theme-einstellungen',
        'position' => 50,
        'icon_url' => 'dashicons-art',
        'update_button' => __('Einstellungen speichern' , 'wifi'),
        'update_message' => __('Einstellungen wurden gespeichert' , 'wifi'),
        'capability' => 'edit_posts',
    )); 

    add_filter('block_categories_all', function($categories){

        return array_merge(
            array(
                array(
                    'slug' => 'wifi',
                    'title' => 'wifi'
                )
                ),
                $categories
            );

    }, 10, 2);

    add_action('acf/init', function(){
        if(function_exists('acf_register_block_type')){

            acf_register_block_type(array(
                'name' => 'webdev-header',
                'title' => __('Header', 'wifi'),
                'descritpion' => __('Das ist der Headerbereich', 'wifi'),
                'supports' => array('anchor' => true),
                'category' => 'wifi',
                'keywords' => array('header', 'wifi', 'kopfbereich'),
                'post_type' => array('page'),
                'align' => false,
                'mode' => 'preview',
                'icon' => 'welcome-widgets-menus',
                'render_template' => 'template-parts/blocks/block-header.php',
            ));
            acf_register_block_type(array(
                'name' => 'webdev-feedback',
                'title' => __('Feedback', 'wifi'),
                'description' => __('Das ist der Feedbackebereich', 'wifi'),
                'supports' => array('anchor' => true),
                'category' => 'wifi',
                'keywords' => array('Feedback', 'kunden'),
                'post_type' => array('page'),
                'align' => false,
                'mode' => 'preview',
                'icon' => 'buddicons-friends',
                'render_template' => 'template-parts/blocks/block-feedback.php',
                'enqueue_assets' => function(){
                    wp_enqueue_script('feedback-js', get_template_directory_uri() . '/assets/js/splideFeedback.js');
                }
            ));
            acf_register_block_type(array(
                'name' => 'webdev-spalten-block',
                'title' => __('Spalten-Block', 'wifi'),
                'description' => __('Das ist der Spalten-blockebereich', 'wifi'),
                'supports' => array('anchor' => true),
                'category' => 'wifi',
                'keywords' => array('Spalten', 'Spalten-block', 'Teaser'),
                'post_type' => array('page'),
                'align' => false,
                'mode' => 'preview',
                'icon' => 'table-col-after',
                'render_template' => 'template-parts/blocks/block-spalten-block.php'
            ));
            acf_register_block_type(array(
                'name' => 'webdev-produkte',
                'title' => __('Produkte', 'wifi'),
                'description' => __('Das ist das Produkten Carousel', 'wifi'),
                'supports' => array('anchor' => true),
                'category' => 'wifi',
                'keywords' => array('Produkte', 'Carousel', 'Teaser'),
                'post_type' => array('page'),
                'align' => false,
                'mode' => 'preview',
                'icon' => 'format-gallery',
                'render_template' => 'template-parts/blocks/block-produkte.php',
                'enqueue_assets' => function(){
                    wp_enqueue_style('splideCss', get_template_directory_uri() . '/assets/css/splide.min.css');
                    wp_enqueue_script('splideMain', get_template_directory_uri() . '/assets/js/splide.min.js');
                    wp_enqueue_script('splideConfig', get_template_directory_uri() . '/assets/js/splideConfig.js');
                }
            ));
            acf_register_block_type(array(
                'name' => 'webdev-latestposts',
                'title' => __('Beitragsblock', 'wifi'),
                'description' => __('Das ist der Beitragsblock', 'wifi'),
                'supports' => array('anchor' => true),
                'category' => 'wifi',
                'keywords' => array('Beitrage', 'news', 'beitrag'),
                'post_type' => array('page','posts'),
                'align' => false,
                'mode' => 'preview',
                'icon' => 'admin-post',
                'render_template' => 'template-parts/blocks/block-posts.php'
            ));
            acf_register_block_type(array(
                'name' => 'webdev-hauptuberschrift',
                'title' => __('Hauptuberschrift', 'wifi'),
                'description' => __('Das ist der Hauptuberschriftbereich', 'wifi'),
                'supports' => array('anchor' => true),
                'category' => 'wifi',
                'keywords' => array('H1', 'uberschrift'),
                'post_type' => array('page'),
                'align' => false,
                'mode' => 'preview',
                'icon' => 'heading',
                'render_template' => 'template-parts/blocks/block-h1.php'
            ));
        }
    });

} else{
    add_action('admin_notice', function(){
        ?>
            <div class="error notice">
                <p><?php
                _e('ACHTUNG: Das plugin ACF Pro muss instaliert werde' , 'wifi');
                ?></p>
            </div>
        <?php });
}
?>