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

// ACF: Pridobi feedback group
$feedback = get_field('feedback');
?>

<article <?php echo $anchor; ?> class="space-top <?php echo esc_attr($class_name); ?>">
    <div class="headline-icons">
        <span class="<?php echo esc_attr($feedback['icon-feedback']); ?> padding-icon" aria-hidden="true"></span>
        <h2 class="is-style-headline-icon"><?php echo esc_html($feedback['titel']); ?></h2>
    </div>

    <div class="alignfull">
        <div class="splide quotes" role="group" aria-label="Feedback">
            <div class="splide__track">
                <ul class="splide__list">
                    <?php
                    // Vključi loop in preveri, če obstaja
                    $loop_path = get_template_directory() . '/template-parts/feedback-loop.php';
                    if (file_exists($loop_path)) {
                        include $loop_path;
                    } else {
                        echo '<!-- ⚠️ feedback-loop.php not found: ' . $loop_path . ' -->';
                    }
                    ?>
                </ul>
            </div>
            <div class="my-slider-progress">
                <div class="my-slider-progress-bar"></div>
            </div>
        </div>
    </div>
</article>
