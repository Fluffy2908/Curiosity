<?php

$anchor = '';

if (!empty($block['anchor'])) {
    $anchor = 'id="' . esc_attr($block['anchor']) . '"';
}

// OPOZORILO: tukaj NE dodajamo več 'header-media' razreda!
$class_name = '';

if (!empty($block['className'])) {
    $class_name .= ' ' . esc_attr($block['className']);
}

$spalten = get_field('spalten-block');

if (!empty($spalten)) :
    // reverse class dodamo samo za desktop
    $reverse_class = ($spalten['drehen'] === 'reverse') ? 'reverse' : '';
    ?>

    <div <?php echo $anchor; ?> class="column spalten-block <?php echo $reverse_class; ?> <?php echo esc_attr($class_name); ?>">
        <div class="column text-column">
            <h2 class="is-style-headline"><?php echo esc_html($spalten['main_titel']); ?></h2>
            <p><?php echo esc_html($spalten['text']); ?></p>
        </div>
        <div class="column image-column">
            <?php
            echo wp_get_attachment_image(
                $spalten['bild'],
                'medium_large',
                false,
                array('class' => 'img-medium img-rounded-lg img-center animate')
            );
            ?>
        </div>
    </div>

<?php
elseif (is_admin()) :
    echo '<h2>' . __('Bitte geben Sie einen Content ein', 'wifi') . '</h2>';
endif;
?>
