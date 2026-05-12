<?php
    $cases = wp_loop_tax('cases');

    if ($cases && $cases->have_posts()) :
        ?>
            <section class="archive cases">
                <div class="frame">
                    <h2>Cases</h2>
                    <div class="grid-container">
                        <?php while ($cases->have_posts()) : $cases->the_post(); ?>
                            <article>
                                <h3><?php the_title(); ?></h3>
                            </article>
                        <?php endwhile; ?>
                    </div>
                </div>
            </section>
        <?php
    endif;

wp_reset_postdata();
?>