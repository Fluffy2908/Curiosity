
<?php
$uberschrift = get_field('hauptuberschrift');

    if(!empty($uberschrift)):
?>
<h2 class="is-style-headline"><?php echo $uberschrift['hauptuberschrift_h1'] ?></h2>
<?php    
        elseif(is_admin()):
        echo '<h2>' . __('Bitte geben Sie einen Content ein', 'wifi') . '</h2>';
        endif;
    ?>
