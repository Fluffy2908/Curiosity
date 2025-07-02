<?php get_header(); ?>
<main id="content" class="container ">
    <?php echo '<div>';
    the_title('<h1 class="is-style-headline">', '</h1>');
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            the_content();
        }
    }
    echo '</div>';
    ?>
    <div class="trending">
        <?php
        $class_name = ' trend-produkt';

        if (!empty($block['className'])) {
            $class_name .= ' ' . esc_attr($block['className']);
        }
        ?>

        <div class="<?php echo $class_name; ?>" >
  
        <?php
                    
        $produkt_data = get_field('produkte', get_the_ID());
        if ($produkt_data['produkt-image']) {
            echo wp_get_attachment_image($produkt_data['produkt-image'], 'produkt', '', array('class' => 'produkt-image-size' ));
        } else {
            echo wp_get_attachment_image(get_field('default-produkt-image', 'options'), 'produkt');
        }
        ?><p class='trend-text'>
            <?php echo $produkt_data['text']; ?>
        </p>
        </div>
 
    </div>
</main>

<?php get_footer(); ?>