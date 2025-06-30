<figure class="trend">
    <a href="<?php echo esc_url(get_permalink()); ?>">
        <?php
        $produkt_image = get_field('produkte', get_the_ID());

        if ($produkt_image['produkt-image']) {
            echo wp_get_attachment_image($produkt_image['produkt-image'], 'produkt');
        } else {
            echo wp_get_attachment_image(get_field('default-produkt-image', 'options'), 'produkt');

        }

        ?>
    </a>
    <figcaption class="trend-caption">
        <h3 class="trend-tittle">
            <a href="<?php echo esc_url(get_permalink()); ?>"><?php the_title(); ?></a>
        </h3>
    </figcaption>
</figure>