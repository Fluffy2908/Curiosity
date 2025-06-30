<?php
$quote_group = get_field('quote');

if ($quote_group):
    $icon   = $quote_group['icon-feedback'];
    $title  = $quote_group['titel'];
    $quotes = $quote_group['quotes'];
    ?>

    <section class="feedback-block">
        <?php if ($title): ?>
            <h2><?php echo esc_html($title); ?></h2>
        <?php endif; ?>

        <?php if ($icon): ?>
            <div class="icon text-4xl mb-4">
                <i class="<?php echo esc_attr($icon); ?>"></i>
            </div>
        <?php endif; ?>

        <div class="quotes grid gap-4">
            <?php foreach ($quotes as $item): ?>
                <?php get_template_part('template-parts/blocks/feedback-loop', null, ['item' => $item]); ?>
            <?php endforeach; ?>

        </div>
    </section>

<?php endif; ?>
