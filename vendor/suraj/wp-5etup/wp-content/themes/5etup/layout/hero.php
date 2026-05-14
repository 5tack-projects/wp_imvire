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
                            $title = get_the_archive_title();
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