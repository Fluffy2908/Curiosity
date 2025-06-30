<?php
$feedback_group = get_field('feedback');
if (!empty($feedback_group['quotes'])):
    foreach ($feedback_group['quotes'] as $item):
        ?>
        <li class="splide__slide">
            <div class='quotes-item' style="background-image: url('<?php echo esc_url($item['image']); ?>');">
                <span class="icon-quotes-left my-icon" aria-hidden="false"></span>
                <h3 class="quotes-customer"><?php echo esc_html($item['text']); ?></h3>
                <span class="icon-quotes-right my-icon" aria-hidden="false"></span>
            </div>
        </li>
    <?php
    endforeach;
endif;
?>
