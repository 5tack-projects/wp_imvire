<section class="references">
    <div class="frame intro">
        <div class="axes"></div>
            <?php 
                if(get_field('content_intro_title')) {
                    ?>
                        <span class="intro-title"><?= the_field('content_intro_title') ?></span>
                    <?php 
                }
                if(get_field('references_intro')) {
                    ?>
                        <div class="block-full intro">
                            <?= the_field('references_intro') ?>
                        </div>
                    <?php
                }
            ?>
        </div>
    

    <div class="frame">
        <div class="buttons">
            <?php $query = new WP_Query( array( 
                'post_type' => 'references', 
                'posts_per_page' => '3',
            ));
            if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();  ?>

                <!-- <?= the_content() ?> -->
                <?php 
                // var_dump(get_field('name'));
                $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
                ?>

                <button 
                    data-id="<?php the_ID(); ?>" 
                    data-title="<?php the_field('name'); ?>"
                    data-jobtitle="<?php the_field('jobtitle'); ?>" 
                    data-content='<?= esc_attr( get_field('reference_content') ) ?>' 
                    data-link="<?php the_permalink(); ?>" 
                    class="icon reference-card init-overlay"
                    onclick="references()"
                >
                    <!-- <h3><?= the_field('name') ?></h3>
                    <span class="content"><?= esc_attr( get_the_content() ) ?></span> -->
                    <i class="fa fa-quote-right" aria-hidden="true"></i>

                </button>

            <?php endwhile; else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; wp_reset_postdata(); ?>
        </div>
    </div>
        
    <div class="frame content">
        <div class="title">
            <span id="reference-title" class="intro-title"></span>
            <h3 id="reference-jobtitle"></h3>
        </div>
        <div class="text">
            <p id="reference-content">Select a reference</p>
        </div>
        <a id="reference-btn" href="" class="btn tertiary">Bekijk project</a>
    </div>

</section>