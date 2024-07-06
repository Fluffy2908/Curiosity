<?php 
 get_header();
 ?>
 <main class="container">

 <div class="error">
    <?php $error = get_field('error', 'option',); ?>
        <div class="error-text">
            <h1>
                <?php echo $error['error_title']; ?>
            </h1>
            <p>
            <?php echo $error['error_text']; ?>
            </p>
        </div>
        <div class="error-logo">
            <?php echo wp_get_attachment_image($error['error_logo']); ?>
        </div>
 </div>

</main>
    <?php 
 get_footer();
 ?>

