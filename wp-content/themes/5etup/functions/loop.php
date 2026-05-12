<?php 
    function wp_loop($type, $amount, $card) {
        if($amount == '') {
            $amount = '4';
        }
        $query = new WP_Query( 
            array( 
                'post_type' => $type,  
                'posts_per_page' => $amount,  
                // 'tax_query' => array(
                //     array(
                //         'taxonomy' => "services", // Vervang 'jouw_aangepaste_taxonomie' door de naam van je aangepaste taxonomie
                //         // 'field'    => 'slug', 
                //         // 'terms'    => 'term-slug', 
                //     ),
                // ),
            ) 
        );
        if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();  ?>
            <?php get_template_part("partials/components/cards/card-$card"); ?>
        <?php endwhile; else : ?> 
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; wp_reset_postdata(); 
    }

    function wp_loop_tax($taxonomy) {
        $tax_name = $taxonomy;
        $terms = get_terms( array(
            'taxonomy' => $tax_name,
            'hide_empty' => false, // Hiermee worden ook lege termen opgehaald, als die er zijn
        ) );

        // var_dump($terms);

        foreach ( $terms as $term ) {
            // $service_names[] = $term->name;
            $archive_link = get_term_link( $term );
            // var_dump($term);
            $backgroundImg = get_field('bg_img_tax', 'term_' . $term->term_id);
            // var_dump($backgroundImg);
            ?>
                <div class="grid card case">
                    <div class="img" 
                        <?php 
                            if($backgroundImg) {
                                ?>
                                    style="background: url('<?= $backgroundImg ?>') no-repeat; background-position: center; background-size: cover;"
                                <?php
                            } 
                        ?>
                    >
                        <div class="content">
                            <h3><?= $term->name ?></h3>
                            <p class="content">
                                <?= $term->description ?>
                            </p>
                        </div>
                        <!-- <a href="<?= $archive_link ?>" class="btn tertiary">Read more</a> -->
                    </div>
                </div>
            <?php
        }
    }

    function archive($title, $type, $amount, $card, $link) {
    
        if($amount == '') {
            $amount = '4';
        }
        $query = new WP_Query( 
            array( 
                'post_type' => $type,  
                'posts_per_page' => $amount,  
                // 'tax_query' => array(
                //     array(
                //         'taxonomy' => "services", // Vervang 'jouw_aangepaste_taxonomie' door de naam van je aangepaste taxonomie
                //         // 'field'    => 'slug', 
                //         // 'terms'    => 'term-slug', 
                //     ),
                // ),
            ) 
        );
        if($query->have_posts()) {
            ?>
                <section class="archive <?= $title ?>">
                    <div class="frame">
                        <h2><?= $title ?></h2>
                        <div class="grid-container">
                            <?php
                            if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();  ?>
                                <?php get_template_part("partials/components/cards/card-$card"); ?>
                            <?php endwhile; else : ?> 
                                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                            <?php endif; wp_reset_postdata(); ?>
                        </div>
                        <div class="block-full buttons">
                            <a href="<?php echo home_url("$link/"); ?>" class="btn secondary"><?= $title ?> archive</a>
                        </div>
                    </div>
                </section>
            <?php
        } 
    }
?>