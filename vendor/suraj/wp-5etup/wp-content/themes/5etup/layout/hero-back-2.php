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

    // Dummmy values
    // $intro_title = get_bloginfo('description');
    // $main_title  = get_bloginfo('name');
    // $description = "Dummy Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec suscipit auctor dui, sed efficitur ipsum. Donec a nunc eget nisl efficitur commodo. Donec suscipit auctor dui, sed efficitur ipsum. Donec a nunc eget nisl efficitur commodo.";

    // $content = "Dummy Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec suscipit auctor dui, sed efficitur ipsum. Donec a nunc eget nisl efficitur commodo. Donec suscipit auctor dui, sed efficitur ipsum. Donec a nunc eget nisl efficitur commodo.";

    // $button_primary = [
    //     'url' => '#',
    //     'title' => 'Dummy'
    // ];

    // $button_secondary = [
    //     'url' => '#',
    //     'title' => 'Dummy'
    // ];

    if(get_field('intro_title_hero')) {
        $intro_title = get_field('intro_title_hero');
    }

    if(get_field('content_hero')) {
        $content = get_field('content_hero');
    }

    if(is_page()) {   
    }

    if(is_single()) {
        $single = get_queried_object();
        // var_dump($single);
        $intro_title = $single->post_type;
        if($single->post_type == 'post') {
            $intro_title = "Blog";
        }
    }

    if(is_home()) {
        // var_dump("Home");
        $home= get_queried_object();
        // var_dump($home);
        $intro_title = "Archive";
        $main_title = $home->post_title;
    }

    if(is_archive()) {
        // var_dump("Archive");
        $archive= get_queried_object();
        // var_dump($archive);
        $intro_title = $archive->taxonomy;
        $main_title = $archive->name;
    }

    if(is_home() || is_archive()) {
        // var_dump("Home or archive");
    }

    if(is_singular()) {
        $singular = get_queried_object();
        // var_dump($singular);
        // var_dump($singular->post_type);
        if(!get_field('intro_title_hero')) {
            // $intro_title = $singular->post_type;
        }   

        if(!get_field('content_hero')) {
            $main_title = $singular->post_title;
        }
    }

    // if(get_field('intro_title_hero') || get_field('content_hero')) {
    //     if(get_field('intro_title_hero')) {
    //         $intro_title = get_field('intro_title_hero');
    //     }
    //     if(get_field('content_hero')) {
    //             $content = get_field('content_hero');
    //     }
    // }
?>
<section class="hero"
    <?php
        if(get_field('img_layout')) {
        } else {
            if($backgroundImg) {
                ?>
                    style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat; background-position: center; background-size: cover;"
                <?php
            } 
            if(is_archive()) {
                $case = get_queried_object();
                // var_dump($case);
                if(get_field('bg_img_tax', 'term_' . $case->term_id)) {
                    $bg_img = get_field('bg_img_tax', 'term_' . $case->term_id);
                    ?>
                        style="background-image: url(<?= $bg_img ?>);"
                    <?php
                }
            }
        }
    ?>
>
    <div class="frame">
        <div class="grid-container">
            <div class="grid content">
                <div class="content">
                    
                    <?php 
                        if(is_page()) {
                            if(get_field('intro_title_hero') || get_field('content_hero')) {
                                if(get_field('intro_title_hero')) {
                                    ?><span class="intro-title"><?= get_field('intro_title_hero') ?></span><?php
                                }
                                if(get_field('content_hero')) {
                                    ?>
                                        <div class="text">
                                            <?= get_field('content_hero')?>
                                        </div>
                                    <?php
                                }
                            } else {
                                ?>
                                    <span class="intro-title"><?= bloginfo('description') ?></span>
                                    <h1><?= bloginfo('title') ?></h1>
                                <?php 
                            }
                        }
                        if(is_single()) {
                            if(get_field('intro_title_hero')) {
                                ?><span class="intro-title"><?= get_field('intro_title_hero')?></span><?php
                            }
                            if(get_field('content_hero')) {
                                ?>
                                    <div class="text">
                                        <?= get_field('content_hero')?>
                                    </div>
                                <?php
                            } else {
                                ?>
                                    <h1><?= the_title() ?></h1>
                                <?php 
                            }
                        }
                        if(is_taxonomy('services')) {
                            /*
                            // echo "Test";
                            // var_dump(single_term_title());
                            // $term = get_taxonomy('cases');
                            // var_dump($term);
                            ?>
                                <h1><?= single_term_title() ?></h1>
                            <?php
                            */
                        }
                        if(is_home() || is_archive()) {
                            // $title = get_the_archive_title();
                            $title = "Case";
                            if(is_taxonomy('services')) {
                                // $title = single_term_title();
                            } else {
                                $title = get_the_archive_title();
                            }
                            ?>
                                <span class="intro-title"><?= $title ?></span>
                                <h1><?= single_term_title() ?></h1>
                            <?php
                        }
                    ?>

                    <?php 
                        if(get_field('button_primary_hero') || get_field('button_secondary')) {
                            ?>
                                <div class="buttons">
                                    <?php 
                                        if(get_field('button_primary_hero')) {
                                            $button_primary = get_field('button_primary_hero');
                                            ?>
                                                <a href="<?= $button_primary['url'] ?>" class="btn primary"><?= $button_primary['title'] ?></a>
                                            <?php
                                        }
                                        if(get_field('button_secondary_hero')) {
                                            $button_secondary = get_field('button_secondary_hero');
                                            ?>
                                                <a href="<?= $button_secondary['url'] ?>" class="btn secondary"><?= $button_secondary['title'] ?></a>
                                            <?php
                                        }
                                    ?>
                                </div>
                            <?php 
                        }
                    ?>
                    
                </div>
            </div>

            <?php
                if(get_field('img_layout')) {
                    ?>
                        <img src="<?php echo $backgroundImg[0]; ?>" class="grid img" alt="">
                    <?php 
                }
            ?>

        </div>
    </div>
</section>



<?= hero($intro_title, $main_title, $description, $content, $button_primary, $button_secondary, $backgroundImg) ?>