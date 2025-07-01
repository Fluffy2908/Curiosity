<?php
if (!empty($feedback['quotes'])):
    foreach ($feedback['quotes'] as $item):
        $text = isset($item['text']) ? $item['text'] : '';
        ?>
        <li class="splide__slide">
            <div class="feedback-loop">
                <span class="icon-quotes-left my-icon" aria-hidden="false"></span>
                <h3 class="quotes-customer"><?php echo esc_html($text); ?></h3>
                <span class="icon-quotes-right my-icon" aria-hidden="false"></span>
            </div>
        </li>
    <?php
    endforeach;
endif;
?>
