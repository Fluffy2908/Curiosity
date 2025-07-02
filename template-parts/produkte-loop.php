<figure class="trend">
    <a href="<?php echo esc_url(get_permalink()); ?>">
        <?php
        $produkt_image = get_field('produkte', get_the_ID());

        if ($produkt_image['produkt-image']) {
            echo wp_get_attachment_image(
                $produkt_image['produkt-image'],
                'produkt',
                false,
                array('class' => 'img-medium img-rounded img-center') // ⬅️ tukaj dodaš CSS razrede
            );
        } else {
            echo wp_get_attachment_image(
                get_field('default-produkt-image', 'options'),
                'produkt',
                false,
                array('class' => 'img-medium img-rounded img-center') // ⬅️ tudi tukaj enako
            );
        }
        ?>
    </a>

    <figcaption class="trend-caption">
        <h3 class="trend-title">
            <a href="<?php echo esc_url(get_permalink()); ?>"><?php the_title(); ?></a>
        </h3>
    </figcaption>
</figure>
