<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
<div class="grid card portfolio" data-animation="">
    <div class="img" 
        <?php
            if($backgroundImg) {
                ?>
                    style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat; background-position: center; background-size: cover;"
                <?php
            } 
        ?>
    >
        <a href="<?= the_permalink() ?>" class="btn tertiary"><?= the_title() ?></a>
    </div>
</div>