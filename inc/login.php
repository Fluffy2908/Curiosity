<?php
add_action('login_enqueue_scripts', function () {
    wp_enqueue_style('custom-login', get_template_directory_uri() . '/assets/css/login.css', false);
});


add_filter('login_message', function ($message) {
    echo '<div class="login-logo">';
    echo '<a href="' . home_url() . '">';
    echo '<img src=" '.get_template_directory_uri().'/assets/Img/Logo.png" alt="Firmen-logo">';
    echo '</a></div>';
    if (!empty($message)) return $message;
});

add_action('login_footer', function () {
    ?>
    <p class="creator">
        <small>development by Alen Sprem</small>
        <a class="creator-logo" href="https://webdev-01-23-05-project.wifiblogs.at/" target="_blank" title="Curiosity">
           <!--Hier das gewünschte Logo einfügen <img src="">-->
        </a>
    </p>
    <?php
});