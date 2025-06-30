<?php get_header(); ?>

<main id="content" class="container">
        <h1 class="is-style-headline"><?php the_title() ;?></h1>
        <div class="meta">
             <time class="date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('d-m-Y'); ?></time>
             <?php
                the_category(', ');
             ?>
        </div>

        <?php
            if(have_posts()){
                while(have_posts()){
                    the_post();
                    the_content();
                }
            }
        ?>
        
        <?php
            the_tags('<div class="meta tags">#', ' #', '</div>');
        ?>

    </main>

<?php get_footer(); ?>