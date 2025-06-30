<?php
$feedback = get_field('feedback');

if (!empty($feedback['quotes'])):
    foreach ($feedback['quotes'] as $item):
        $image = isset($item['image']) ? $item['image'] : '';
        $text = isset($item['text']) ? $item['text'] : '';
        ?>
        <li class="splide__slide">
            <div class="feedback-loop" style="background-image: url('<?php echo esc_url($image); ?>');">
                <span class="icon-quotes-left my-icon" aria-hidden="false"></span>
                <h3 class="quotes-customer"><?php echo esc_html($text); ?></h3>
                <span class="icon-quotes-right my-icon" aria-hidden="false"></span>
            </div>
        </li>
    <?php
    endforeach;
endif;
?>
