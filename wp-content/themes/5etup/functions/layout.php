<?php 
    // Weblayout
    function layoutDefault() {
        get_template_part('layout/head');
        get_template_part('layout/nav');
        get_template_part('layout/main');
        get_template_part('layout/footer');
        get_template_part('layout/foot');
    }

    // FEATURED image
    add_theme_support( 'post-thumbnails' );
    the_post_thumbnail('thumbnail');       // Thumbnail (default 150px x 150px max)
    the_post_thumbnail('medium');          // Medium resolution (default 300px x 300px max)
    the_post_thumbnail('large');           // Large resolution (default 640px x 640px max)
    the_post_thumbnail('full');            // Original image resolution (unmodified)

    //MENU
    register_nav_menus( array(
    'top_nav' => 'Top nav',
    'main' => 'Main menu',
    'footer_pages' => 'Footer Pages',
    'footer_brands' => 'Footer Brands',
    'footer_end' => 'Footer end menu',
    'keywords' => 'Keywords'
    ) );
?>