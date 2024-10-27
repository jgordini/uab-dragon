<?php
function my_theme_setup() {
    add_theme_support( 'block-templates' );
    add_theme_support( 'editor-styles' );
    add_editor_style( 'style.css' );

    require get_template_directory() . '/block-patterns/header.php';
    require get_template_directory() . '/block-patterns/banner.php';
    require get_template_directory() . '/block-patterns/content-section.php';
    require get_template_directory() . '/block-patterns/latest-news.php';
    require get_template_directory() . '/block-patterns/upcoming-events.php';
    require get_template_directory() . '/block-patterns/footer.php';
}
add_action( 'after_setup_theme', 'my_theme_setup' );

