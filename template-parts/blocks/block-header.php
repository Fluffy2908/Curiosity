<?php

$class_name = 'header header-text ';

if (!empty($block['className'])) {
    $class_name .= ' ' . esc_attr($block['className']);
}


$header = get_field('header'); ?>

<?php if(!empty($header)): ?>
    
    <header id="header" style="background-image: url('<?php echo $header['image'];?>');">
            <div class="header-text">
            <?php
       echo wp_get_attachment_image($header['image'], 'medium_large', false,);
        ?>
                <h1><?php echo $header['headline'];?></h1>
            </div>

        </header>
    <a id="scroll" href="#main" class="icon-arrow-left" ></a>


<?php
    elseif(is_admin()):
        echo '<h2>' . __('Bitte geben Sie einen Content ein', 'wifi') . '</h2>';
    endif;
?>

<a target="" ></a>
