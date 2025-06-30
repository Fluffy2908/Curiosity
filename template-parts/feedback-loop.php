<?php
$feedback_group = get_field('feedback');
if (!empty($feedback_group['quotes'])):
    foreach ($feedback_group['quotes'] as $item):
        $image_url = is_array($item['image']) ? $item['image']['url'] : esc_url($item['image']);
        ?>
        <li class="splide__slide quotes">
            <div class="quotes-item" style="background-image: url('<?php echo esc_url($image_url); ?>');">
                <span class="icon-quotes-left my-icon" aria-hidden="true"></span>
                <h3 class="quotes-customer"><?php echo esc_html($item['text']); ?></h3>
                <span class="icon-quotes-right my-icon" aria-hidden="true"></span>
            </div>
        </li>
    <?php
    endforeach;
else:
    echo '<li class="splide__slide"><strong>⚠️ Feedback quotes field is empty.</strong></li>';
endif;
?>
