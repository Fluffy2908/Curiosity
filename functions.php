<?php

// ✅ Vključi vse razdeljene funkcije
require_once(get_template_directory() . '/inc/cpt/cpt-produkte.php');
require_once(get_template_directory() . '/inc/acf.php');
require_once(get_template_directory() . '/inc/enqueue.php');
require_once(get_template_directory() . '/inc/media.php');
require_once(get_template_directory() . '/inc/pagination.php');
require_once(get_template_directory() . '/inc/theme.php');
require_once(get_template_directory() . '/inc/login.php');

// ✅ Uporabi style.css tudi v block editorju (Gutenberg)
add_action('enqueue_block_editor_assets', function () {
    wp_enqueue_style(
        'curiosity-editor-style',
        get_template_directory_uri() . '/style.css',
        [],
        filemtime(get_template_directory() . '/style.css'),
        'all'
    );
});
