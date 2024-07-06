
<?php
$feedback = get_field('feedback');
    foreach ($feedback['quote'] as $item):
?>
<li class="splide__slide">
                <div class='feedback-loop' style="background-image: url('<?php echo $item['image'];?>');">
                    <span class="icon-quotes-left my-icon " aria-hidden="false"></span>
                    <h3 class="quotes-customer"><?php echo $item['text'] ?></h3>
                    <span class="icon-quotes-right my-icon" aria-hidden="false"></span>
                </div>
            </li>
    <?php
        endforeach;
    ?>
