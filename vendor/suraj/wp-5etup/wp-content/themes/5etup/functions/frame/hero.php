<?php 
    function hero($intro_title, $main_title, $description, $content, $button_primary, $button_secondary, $backgroundImg) {
        ?>
            <section class="hero"
                <?php
                    if(get_field('img_layout')) {
                    } else {
                        if($backgroundImg) {
                            ?>
                                style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat; background-position: center; background-size: cover;"
                            <?php
                        } 
                        if(is_tax()) {
                            $case = get_queried_object();
                            // var_dump($case);
                            if(get_field('bg_img_tax', 'term_' . $case->term_id)) {
                                $bg_img = get_field('bg_img_tax', 'term_' . $case->term_id);
                                ?>
                                    style="background-image: url(<?= $bg_img ?>);"
                                <?php
                            }
                        }
                    }
                ?>
            >
                <div class="frame">
                    <div class="grid-container">
                        <div class="grid content">
                            <?php 
                                if($intro_title) {
                                    ?>
                                        <span class="intro-title"><?= $intro_title ?></span>
                                    <?php 
                                }
                                if($main_title) {
                                    ?>
                                        <h1><?= $main_title ?></h1>
                                    <?php 
                                }
                                if($description) {
                                    ?>
                                        <p><?= $description ?></p>
                                    <?php 
                                }

                                if($content) {
                                    echo $content;
                                }

                                if($button_primary || $button_secondary) {
                                    ?>
                                        <div class="buttons">
                                            <?php 
                                                if($button_primary) {
                                                    ?>
                                                        <a href="<?= $button_primary['url'] ?>" class="btn primary"><?= $button_primary['title'] ?></a>
                                                    <?php
                                                }
                                                if($button_secondary) {
                                                    ?>
                                                        <a href="<?= $button_secondary['url'] ?>" class="btn secondary"><?= $button_secondary['title'] ?></a>
                                                    <?php
                                                }
                                            ?>
                                        </div>
                                    <?php 
                                }
                            ?>              
                        </div>

                        <?php
                            if(get_field('img_layout')) {
                                if($backgroundImg) {
                                        ?>
                                            <img src="" alt="" class="grid img" style="background: url("<?php echo $backgroundImg[0]; ?>")>
         
                                        <?php
                                    } 
                            }
                        ?>
                    </div>
                </div>
            </section>
        <?php 
    }
?>