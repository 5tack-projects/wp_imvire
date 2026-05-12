<?php
    $backgroundImg = "";
    if(get_post_thumbnail_id($post->ID)) {
        $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
    }
?>

<div class="grid card article">
    <div class="img" 
        <?php
            if($backgroundImg) {
                ?>
                    style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat; background-position: center; background-size: cover;"
                <?php
            } 
        ?>
    >
        <h3><?= the_title() ?></h3>
    </div>
    <div class="content">
        <span class="text"><?= the_excerpt() ?></span>
        <a href="<?= the_permalink() ?>" class="btn secondary">
            <span class="text">Read more</span>
        </a>
    </div>
</div>