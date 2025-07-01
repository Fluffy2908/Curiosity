<?php

$anchor = '';

if (!empty($block['anchor'])) {
    $anchor = 'id="' . esc_attr($block['anchor']) . '"';
}

$class_name = 'trending space-top';

if (wp_is_mobile()) {
    $class_name .= ' is-mobile';
}
if (!empty($block['className'])) {
    $class_name .= ' ' . esc_attr($block['className']);
}

$produkt = get_field('produkten');

$args = [
    'post_type'      => 'produkt',
    'posts_per_page' => $produkt['posts_per_page'] ?? -1, // fallback na -1 če ni nastavljeno
];

$project_query = new WP_Query($args);

if ($project_query->have_posts()) :
    ?>
    <section <?php echo $anchor; ?> class="<?php echo $class_name; ?>">
        <div class="headline-icons">
            <span class="<?php echo $produkt['icon-produkte']; ?> padding-icon " aria-hidden="false"></span>
            <h2 class="is-style-headline-icon">
                <?php echo $produkt['titel']; ?>
            </h2>
        </div>
        <div class="splide">
            <div class="splide__track">
                <ul class="splide__list">
                    <?php while ($project_query->have_posts()):
                        $project_query->the_post(); ?>
                        <li class="splide__slide">
                            <?php include(get_template_directory() . '/template-parts/produkte-loop.php'); ?>
                        </li>
                    <?php endwhile; ?>
                </ul>
            </div>
        </div>
        <div class="actions">
            <a href="<?php echo $produkt['btn-link']; ?>" class="btn"><?php echo $produkt['btn-text']; ?></a>
        </div>
    </section>

<?php endif;
wp_reset_postdata();
?>
