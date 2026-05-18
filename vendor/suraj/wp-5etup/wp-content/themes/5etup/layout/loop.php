<?php 
    if(is_page() || is_home()) {
        ?>
            <section class="archive">
                <div class="frame">
                    <div class="grid-container">
                        <?php
                            // var_dump(get_post_type());
                            $post_type = get_post_type();
                        ?>
                        <?= wp_loop($post_type, '-1', 'article') ?>
                    </div>
                </div>
            </section>
        <?php 
    }

    if(is_archive()) {
        $archive = get_queried_object();
        // var_dump($archive);

        if (have_posts()) {
            ?>
                <section class="archive">
                    <div class="frame">
                        <div class="grid-container">

                            <?php 
                                while (have_posts()) {
                                    the_post();
                                    // var_dump($post);
                                    card($post, 'portfolio');
                                }
                            ?>
                        </div>
                    </div>
                </section>
            <?php 
        }
    }
?>
