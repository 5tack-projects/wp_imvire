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