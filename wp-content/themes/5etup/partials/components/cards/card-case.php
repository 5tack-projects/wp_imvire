<?php
    $backgroundImg = "";
    if(is_page() || is_single()) {
        if(get_post_thumbnail_id($post->ID)) {
            $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
        }
    }
    if(is_tax()) {
        echo "tax";
    }
    if(get_field('bg_img_tax')) {
        $backgroundImg = get_field('bg_img_tax');
    }
?>
<div class="grid card case summon" data-animation="fadein">
    <div class="img" 
        <?php
            if($backgroundImg) {
                ?>
                    style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat; background-position: center; background-size: cover;"
                <?php
            } 
        ?>
    >
        <div class="content">
            <h3><?= the_title() ?></h3>
        </div>
        <a href="<?= the_permalink() ?>" class="btn tertiary">Read more</a>
    </div>
</div>