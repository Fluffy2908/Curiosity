    <footer id="footer-page" class="container columns">
        <nav id="nav-footer" class="column">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'secondary',
                'container' => false,
                'menu_class' => 'nav-menu',
                'fallback_cb' => false,
                'depth' => 1
            ));
            ?>
        </nav>
        <div class="social-links column">
            <?php 
            $social_links = get_field('social_links', 'option');
        ?>
            <?php if($social_links['twitter']): ?>
            <a href="<?php echo $social_links['twitter']; ?>" target="_blank">
                <span class="icon-twitter" aria-hidden="true"></span>
                <span class="screen-reader-text"><?php _e('Follow on Twitter', 'wifi') ?></span>
            </a>
            
            <?php endif; ?>
            <?php if($social_links['instagram']): ?>
            <a href="<?php echo $social_links['instagram']; ?>" target="_blank">
                <span class="icon-instagram" aria-hidden="true"></span>
                <span class="screen-reader-text"><?php _e('Follow on Instagram', 'wifi') ?></span>
            </a>
            <?php endif; ?>
            <?php if($social_links['facebook']): ?>
            <a href="<?php echo $social_links['facebook']; ?>" target="_blank">
                <span class="icon-facebook" aria-hidden="true"></span>
                <span class="screen-reader-text"><?php _e('Follow on Facebook', 'wifi') ?></span>
            </a>
            <?php endif; ?>
            <?php if($social_links['twitch']): ?>
            <a href="<?php echo $social_links['twitch']; ?>" target="_blank">
                <span class="icon-twitch" aria-hidden="true"></span>
                <span class="screen-reader-text"><?php _e('Follow on Twitch', 'wifi') ?></span>
            </a>
            <?php endif; ?>
        </div>
        <div class="copyright column">
            <?php 
            echo sprintf(__('&copy; %1$s %2$s'), date('Y') , get_bloginfo('name'));
            ?>
        </div>
    </footer>
    <div id="to-top"><?php _e('Top', 'wifi'); ?></div>
    <?php
wp_footer();
?>
</body>
</html>