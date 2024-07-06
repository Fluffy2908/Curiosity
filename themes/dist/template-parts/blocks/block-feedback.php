<?php

$anchor = '';

if(!empty($block['anchor'])){
    $anchor = 'id="' . esc_attr($block['anchor']) . '"';
}
$class_name = ' ';

if(wp_is_mobile()){
    $class_name .= ' is-mobile';
}

if (!empty($block['className'])) {
    $class_name .= ' ' . esc_attr($block['className']);
}
?>
<?php
$feedback = get_field('feedback');

?>
<article <?php echo $anchor ?> class="space-top ">
    <div class="headline-icons">
        <span class="<?php echo $feedback['icon-feedback']; ?> padding-icon " aria-hidden="false"></span>
            <h2 class="is-style-headline-icon">
                <?php echo $feedback['titel']; ?>
            </h2>
    </div>
    <div class="alignfull">
        <div class="splide">
            <div class="splide__track">
                <ul class="splide__list">
                            <?php include(get_template_directory() . '/template-parts/feedback-loop.php');?>
                </ul>
            </div>
            <div class="my-slider-progress">
                <div class="my-slider-progress-bar"></div>
            </div>
        </div>
    </div>
</article>

   
