<section class="hero">
    <div class="frame">
        <div class="grid-container">
            <div class="grid content">
                <?php 
                    if(get_field('intro_title') || get_field('banner_content')) {
                        ?>
                            <div class="content">
                        <?php 
                            if(get_field('intro_title')) {
                                ?>
                                    <span class="intro-title"><?php the_field('intro_title'); ?></span>
                                <?php   
                            }

                            if (get_field('banner_content')) {
                                the_field('banner_content');
                            }
                        ?>
                            </div>
                        <?php 
                    }

                    if(is_archive()) {
                        if(is_tax()) {
                        } else {
                            ?>
                                <span class="intro-title">
                                    Archive
                                </span>
                                <h1>
                                    <?php 
                                        if(is_tag()) {
                                            single_tag_title();
                                        } else {
                                            post_type_archive_title(); 
                                        }
                                    ?>
                                </h1>

                                <div class="block-full buttons">
                                    <a href="/contact" class="btn primary">Contact opnemen</a>
                                    <a href="/" class="btn tertiary">Homepage</a>
                                </div>
                            <?php
                        }
                    }

                    if(is_tax()) {
                        $brandID = get_queried_object()->term_id;
                        $brandDescription = get_queried_object()->description;
                        $brandInfo = get_term( $brandID, 'brand');
                        $brandTitle = get_field('title', $brandInfo);

                        ?>
                            <div class="content">
                                <span class="intro-title"><?= $brand ?></span>
                                <h1><?= $brandTitle ?></h1>
                                <p><?= $brandDescription ?></p>
                            </div>

                            <div class="block-full buttons">
                                <a href="#cta" class="btn primary">Contact opnemen</a>
                                <a href="/" class="btn tertiary">Homepage</a>
                            </div>
                        <?php
                    }

                    if(is_single()) {
                        ?>
                            <h1><?php the_title(); ?></h1>  
                        <?php 

                        if(is_singular('projects')) {
                            if (has_post_parent()) {
                                ?>  
                                    <div class="block-full buttons">
                                        <a href="<?= get_the_permalink($post->post_parent) ?>" class="btn tertiary">Project informatie</a>
                                    </div>
                                <?php
                            }
                        }
                    }

                    if (get_field('banner_button_primary') || get_field('banner_button_secondary')) {
                        ?>
                            <div class="block-full buttons">
                                <?php 
                                    if (get_field('banner_button_primary')) {
                                        $buttonPrimary = get_field('banner_button_primary');
                                        $buttonPrimaryTitle = $buttonPrimary['title'];
                                        $buttonPrimaryUrl = $buttonPrimary['url'];
                                        ?>
                                            <a href="<?php echo "$buttonPrimaryUrl"; ?>" class="btn primary"><?php echo "$buttonPrimaryTitle"; ?></a>
                                        <?php 
                                    }

                                    if (get_field('banner_button_secondary')) {
                                        $buttonSecondary = get_field('banner_button_secondary');
                                        $buttonSecondaryTitle = $buttonSecondary['title'];
                                        $buttonSecondaryUrl = $buttonSecondary['url'];
                                        ?>
                                            <a href="<?php echo "$buttonSecondaryUrl"; ?>" class="btn tertiary"><?php echo "$buttonSecondaryTitle"; ?></a>
                                        <?php 
                                    }
                                ?>
                            </div> 
                        <?php 
                    }

                    if (is_page_template('page-contact.php')) {
                        ?>
                            <h1>
                                <span class="line-one summon" data-animation="fadein">Ik hoor het graag als ik iets kan</span>
                                <span class="line-two summon" data-animation="fadein"><strike>be</strike>tekenen</span>
                            </h1>

                            <p>Neem vrijblijvend contact op zodat we jouw situatie rustig kunnen bespreken.</p>

                            <!-- <div class="block-full buttons">
                                <a href="<?php global $phone_wha; echo $phone_wha; ?>" target="blank" class="btn whatsapp main">
                                    <i class="fa fa-whatsapp" aria-hidden="true"></i>
                                    Stuur whatsapp bericht
                                </a>
                                <a href="<?php global $email_send; echo $email_send; ?>" class="btn email">
                                    Stuur email
                                </a>
                            </div> -->
                        <?php 
                    }

                    if (is_page_template('page-cv.php')) {
                        ?>
                            <!-- <span class="intro-title">Curriculum Vitae</span>

                            <h1>Suraj Mohunlol</h1> -->

                            <!-- <div class="block-full buttons">
                                <a href="" class="btn main">Whatsap bericht</a>
                                <a href="" class="btn">Email sturen</a>
                                <button" id="btn-cv" class="btn main">CV bekijken</button>
                            </div> -->
                        <?php 
                    }
                ?>
            </div>

            <?php 
                if(!is_archive()) {
                    if(get_field('display_featured_image')) {
                        $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
                        if ($backgroundImg) {
                            ?>
                                <div class="grid img" style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat; background-position: center; background-size: cover;">
                                </div>
                            <?php 
                        } 
                    } 
                } 
            ?>
            
        </div>
    </div>

    <div class="featured-img">
        <?php 
            if(get_field('display_featured_image')) {
                $display_featured_image = get_field('display_featured_image');
            } else {
                $display_featured_image = "";
            }

            if($display_featured_image != "Grid" && !is_archive()) {
                if(!get_field('featured_image')) {
                    if(is_tag()) {
                    } else {
                        if (wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' )) {
                            $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
                            ?>
                            <div class="sticker img <?php echo "$contain"; ?>" style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat; background-position: center; background-size: cover;"></div>
                            <?php 
                        }
                    }
                }
            } else {
                //
            }  
        ?>
    </div>
</section>

