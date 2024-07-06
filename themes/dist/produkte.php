<?php
/*
Template Name: Produkte
*/
get_header(); ?>

<main id="content" class="container">

    <h1 class="is-style-headline">
        <?php _e('Unsere produkte', 'wifi'); ?>
    </h1>


    <?php

    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    
    $args = [
        'post_type' => 'produkt',
        'posts_per_page' => 2,
        'paged' => $paged
    ];

    $project_query = new WP_Query($args);
    ?>

    <?php
    include(get_template_directory() . '/template-parts/produkte-posts.php');


    pagination($paged, $project_query->max_num_pages);

    wp_reset_postdata(); ?>


</main>

<?php get_footer();