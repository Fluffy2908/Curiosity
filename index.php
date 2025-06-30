<?php
get_header(); ?>

<?php $blogFields = get_field('blog', 'option'); ?>

<header id="header-blog" style="background-image: url('<?php echo $blogFields['blog_header_image'];?>');">
<span class="header-text"><?php echo $blogFields['blog_header_title']; ?></span>
</header>
<main id="content" class="container">
    <h1 class="is-style-headline">
        <?php
        $pagePosts = get_option('page_for_posts');

        if (!empty($pagePosts)) {
            echo get_the_title($pagePosts);
        } 
        else {
            bloginfo('name');
        }
        ?>
    </h1>

    <?php
if(is_home()){
    echo '<p>' . $blogFields['blog_description'] . '</p>';
} else{
    if (the_archive_description()) {
        the_archive_description('<p>', '</p>');
    } 
}

    ?>
    <?php

    if (have_posts()):
        while (have_posts()):
            the_post();
        include(get_template_directory() . '/template-parts/post-loop.php');
        endwhile;
    else:?>
    
    <h2><?php _e('Es wurde kein Beitrag gefunden', 'wifi');?></h2>
    
    <?php endif;
    ?>
</main>
<?php get_footer();
?>