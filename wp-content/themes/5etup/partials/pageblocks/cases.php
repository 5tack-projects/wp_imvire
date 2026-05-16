<?php 
    if(get_field('cases_pageblock')) {
        // var_dump(get_field('cases'));
        ?>
            <section class="archive cases">
                <div class="frame">
                    <?php 
                        if(get_field('intro_cases')) {
                            // var_dump(get_field('intro_cases'));
                            ?>
                                <?= the_field('intro_cases') ?>
                            <?php
                        } else {
                            ?>
                                <h2>Cases</h2>
                            <?php
                        }
                    ?>
                    <div class="grid-container">
                        <?php 
                            $cases = get_field('cases_pageblock');
                            foreach($cases as $case) {
                                // var_dump($case);
                                ?>
                                    <div class="grid card case">
                                        <div class="img">
                                            <!-- <span class="intro-title">Case</span>
                                            <h3><?= $case->name ?></h3>
                                            <a href="<?= get_term_link($case->term_id, 'cases'); ?>" class="btn secondary">Bekijk</a> -->

                                            <a href="<?= get_term_link($case->term_id, 'cases'); ?>" class="btn tertiary">
                                                <?= $case->name ?>
                                            </a>
                                        </div>
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