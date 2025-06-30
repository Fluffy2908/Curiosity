<article class="blog-test">
    <div class="post">
            <h2 class="post-title">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h2>
            <div class="meta">
                <time class="date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('d.m.Y'); ?></time>
                <span class="category">
                    <?php
                    the_category(', ');
                    ?>
                </span>
            </div>
        <a href="<?php the_permalink(); ?>" class="blog-link"></a>
    </div>
        <?php $postBild = get_field('beitrag-bild', get_the_ID());
        if (!empty($postBild['bild'])) {echo wp_get_attachment_image($postBild['bild'], 'very-small');
        } ?>
</article>