<?php
    $backgroundImg = "";
    if(is_page() || is_single()) {
        if(get_post_thumbnail_id($post->ID)) {
            $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
        }
    }
    if(get_field('bg_img_tax')) {
        $backgroundImg = get_field('bg_img_tax');
    }

    // Set values
    $intro_title = "";
    $main_title = "";
    $description = "";
    $content = "";
    $button_primary = "";   
    $button_secondary = "";
    // $dummy = "Dummy Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec suscipit auctor dui, sed efficitur ipsum. Donec a nunc eget nisl efficitur commodo.";

    // Dummmy values
    // $intro_title = get_bloginfo('description');
    // $main_title  = get_bloginfo('name');
    // $description = $dummy;
    // $content = "$dummy;

    // $button_primary = [
    //     'url' => '#',
    //     'title' => 'Dummy'
    // ];

    // $button_secondary = [
    //     'url' => '#',
    //     'title' => 'Dummy'
    // ];

    $intro_title = '';
    $main_title  = '';
    $content     = '';

    if (get_field('intro_title_hero')) {
        $intro_title = get_field('intro_title_hero');
    }

    if (get_field('content_hero')) {
        $content = get_field('content_hero');
    }

    if (is_home()) {

        $home = get_queried_object();

        $intro_title = 'Archive';
        $main_title  = $home->post_title;

    } elseif (is_post_type_archive()) {

        $post_type = get_queried_object();

        $intro_title = 'Archive';
        $main_title  = $post_type->labels->name;

    } elseif (is_tax() || is_category() || is_tag()) {

        $term = get_queried_object();

        $intro_title = $term->taxonomy;
        $main_title  = $term->name;

    } elseif (is_singular()) {

        $post = get_queried_object();

        if (!get_field('intro_title_hero')) {
            $intro_title = $post->post_type === 'post'
                ? 'Blog'
                : $post->post_type;
        }

        if (!get_field('content_hero')) {
            $main_title = $post->post_title;
        }
    }

    // Render
    hero($intro_title, $main_title, $description, $content, $button_primary, $button_secondary, $backgroundImg)
?>