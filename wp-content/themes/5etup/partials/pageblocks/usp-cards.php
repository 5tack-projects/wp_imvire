<?php 
$usps = array('one', 'two', 'three');
$usp_array = [];

if (
    get_field('usp_icon_one') || get_field('usp_icon_two') || get_field('usp_icon_three') ||
    get_field('usp_title_one') || get_field('usp_title_two') || get_field('usp_title_three')
    ) {
    foreach ($usps as $uspNumber) {
        $usp_array[] = [
            'icon' => get_field("usp_icon_$uspNumber"),
            'title' => get_field("usp_title_$uspNumber"),
            'content' => get_field("usp_content_$uspNumber"),
            'button' => get_field("usp_button_$uspNumber"),
        ];
    }
}

if ( is_taxonomy('solutions')) {
    $term = get_queried_object();
    
    if ( $term instanceof WP_Term ) {
        $ctx = 'term_' . $term->term_id; // ACF term context
        foreach ( $usps as $uspNumber ) {

            $usp_array[] = [
                'icon'    => get_field("usp_icon_$uspNumber", $ctx),
                'title'   => get_field("usp_title_$uspNumber", $ctx),
                'content' => get_field("usp_content_$uspNumber", $ctx),
                'button'  => get_field("usp_button_$uspNumber", $ctx),
            ];
        }
    }
}


if($usp_array) {
    ?>
        <section class="usp-cards">
            <div class="frame">
                <div class="grid-container">
                    <?php 
                        foreach ($usp_array as $usp) {
                            ?>  
                                <div class="grid">
                                    <?php 
                                        if($usp['icon']) {
                                            ?>
                                                <?= $usp['icon'] ?>
                                            <?php
                                        }
                                        if($usp['title']) {
                                            ?>
                                                <h3><?= $usp['title'] ?></h3>
                                            <?php
                                        }
                                        if($usp['content']) {
                                            ?>
                                                <p><?= $usp['content'] ?></p>
                                            <?php
                                        }
                                        if($usp['button']) {
                                            $uspButton = $usp['button'];
                                            ?>
                                                <a href="<?= $uspButton['url'] ?>" target="<?= $uspButton['target'] ?>" class="btn primary"><?= $uspButton['title'] ?></a>
                                            <?php
                                        }
                                    ?>
                                </div>
                            <?php 
                        }
                    ?>
                </div>
            </div>
        </section>
    <?php 
}
?>