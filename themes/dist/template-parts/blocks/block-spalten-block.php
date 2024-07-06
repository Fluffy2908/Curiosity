
<?php

$anchor = '';

if(!empty($block['anchor'])){
    $anchor = 'id="' . esc_attr($block['anchor']) . '"';
}

$class_name = ' header-media';

if (!empty($block['className'])) {
    $class_name .= ' ' . esc_attr($block['className']);
}


?>

<?php
$spalten = get_field('spalten-block');

    if(!empty($spalten)):
?>

<div <?php echo $anchor ?> class="columns <?php echo $spalten['drehen'] ?>">
            <div class="column">
                       <?php
       echo wp_get_attachment_image($spalten['bild'], 'medium_large', false, array('class' => 'column header-media animate'));
        ?>
            </div>
            <div class="column">
                <h2 class="is-style-headline"><?php echo $spalten['main_titel'] ?></h2>
                <p><?php echo $spalten['text'] ?></p>
            </div>
</div>
<?php    
        elseif(is_admin()):
        echo '<h2>' . __('Bitte geben Sie einen Content ein', 'wifi') . '</h2>';
        endif;
    ?>
