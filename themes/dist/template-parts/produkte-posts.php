<?php
if ($project_query->have_posts()): ?>

<?php

    $class_name = 'trending space-top';


    if(wp_is_mobile()){
        $class_name .= ' is-mobile';
    }
?>

<section id="#scroll" class="<?php echo $class_name; ?>">

    <div class="trending-grid">

        <?php while ($project_query->have_posts()): ?>
            <?php $project_query->the_post(); ?>

            <div class="grid-item">
                    <?php include(get_template_directory() . '/template-parts/produkte-loop.php');?>
            </div>

        <?php endwhile; ?>

    </div>
</section>

<?php
else:
_e('Es wurden keine Projekte gefunden');
endif;