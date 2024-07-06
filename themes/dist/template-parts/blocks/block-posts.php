

<?php

$anchor = '';

if(!empty($block['anchor'])){
    $anchor = 'id="' . esc_attr($block['anchor']) . '"';
}

$class_name = ' space-top';

if(wp_is_mobile()){
    $class_name .= ' is-mobile';
}


if (!empty($block['className'])) {
    $class_name .= ' ' . esc_attr($block['className']);
}
?>
<?php $posts = get_field('posts');

$args = [
        'post_type' => 'post',
        'posts_per_page' => $posts['posts_per_page'],
    ];

    $post_query = new WP_Query($args);

    if($post_query->have_posts()): ?>

<section id="<?php echo $anchor; ?>" class="<?php echo $class_name; ?>">
    <div class="headline-icons">
        <span class="<?php echo $posts['icon-blog']; ?> padding-icon " aria-hidden="false"></span>
            <h2 class="is-style-headline-icon">
                <?php echo $posts['titel'] ?>
            </h2>
    </div>
            <?php while($post_query->have_posts()):
                $post_query->the_post();
                    include(get_template_directory() . '/template-parts/post-loop.php'); 
                    endwhile;
                    $page_for_posts = get_option('page_for_posts');
            ?>
    <div class="actions">
        <a href="<?php the_permalink($page_for_posts); ?>" class="btn"><?php _e('All posts', 'wifi'); ?></a>
    </div>
</section>
    <?php endif;
    wp_reset_postdata(); ?>
