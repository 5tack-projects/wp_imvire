<?php 

function card($data, $card) {
    $id = isset($data->ID) ? $data->ID : null;
    $type = isset($data->post_type) ? $data->post_type : null;
    $title = isset($data->post_title) ? $data->post_title : null;
    $content = isset($data->post_content) ? $data->post_content : null;
    $link = isset($data->permalink) ? $data->permalink : null;
    $class = isset($data->post_class) ? $data->post_class : null;
    $img = "";
    if(get_post_thumbnail_id($data->ID)) {
        $img = wp_get_attachment_image_src( get_post_thumbnail_id($data->ID), 'full' );
    }
    // var_dump($img);
    ?>
        <div class="card <?= $card ?>">
            <div class="img"
                <?php
                    if($img) {
                        ?>
                            style="background: url('<?php echo $img[0]; ?>') no-repeat; background-position: center; background-size: cover;"
                        <?php
                    } 
                ?>
            >
                <?php
                    if($card == "portfolio") {
                        ?>
                            <a href="<?= $link ?>" class="btn tertiary"><?= $title ?></a>
                        <?php
                    }
                ?>
                
            </div>
            <?php 
                if($card == "article") {
                    ?>
                        <div class="content">
                            <?= $content ?>
                            <a href="<?= $link ?>" class="btn secondary">Read more</a>
                        </div>
                    <?php
                }
            ?>
        </div>
    <?php 
}
?>