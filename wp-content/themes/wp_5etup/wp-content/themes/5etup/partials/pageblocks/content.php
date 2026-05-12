<?php 
    if(get_the_content()) {
        ?>
            <section class="content">
                <div class="frame">
                    <?= the_content() ?>
                </div>
            </section>
        <?php 
    }
?>