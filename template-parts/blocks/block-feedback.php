<?php

$anchor = '';
if (!empty($block['anchor'])) {
    $anchor = 'id="' . esc_attr($block['anchor']) . '"';
}

$class_name = '';
if (wp_is_mobile()) {
    $class_name .= ' is-mobile';
}
if (!empty($block['className'])) {
    $class_name .= ' ' . esc_attr($block['className']);
}

$feedback = get_field('feedback');
$image = isset($feedback['feedback_background']) ? $feedback['feedback_background'] : '';

?>

<?php echo '<!-- DEBUG: Feedback Background is ' . esc_url($image) . ' -->'; ?>

<article <?php echo $anchor; ?> class="space-top<?php echo esc_attr($class_name); ?>">
    <div class="headline-icons">
        <span class="<?php echo esc_attr($feedback['icon-feedback']); ?> padding-icon" aria-hidden="false"></span>
        <h2 class="is-style-headline-icon"><?php echo esc_html($feedback['titel']); ?></h2>
    </div>

    <div class="alignfull">
        <div class="splide quotes" style="background-image: url('<?php echo esc_url($image); ?>'); background-size: cover; background-position: center;">
            <div class="splide__track">
                <ul class="splide__list">
                    <?php include get_template_directory() . '/template-parts/feedback-loop.php'; ?>
                </ul>
            </div>

            <!-- Progress bar -->
            <div class="my-slider-progress">
                <div class="my-slider-progress-bar"></div>
            </div>
        </div>
    </div>
</article>
