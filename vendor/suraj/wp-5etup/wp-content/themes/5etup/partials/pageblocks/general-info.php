<?php 
    if(get_field('date_start') || get_field('date_end') || get_field('client_name') || get_field('jobtitle')) {
        ?>
            <section class="general-info">
                <div class="frame">
                    <!-- <h2>Info</h2> -->
                    <table>
                        <?php 
                            if(get_field('date_start')) {
                                ?>
                                    <tr>
                                        <td>Periode</td>
                                        <td>
                                            <?= get_field('date_start') ?>
                                            t/m 
                                            <?php 
                                                if(get_field('date_end')) {
                                                    ?>
                                                        <?= get_field('date_end') ?>
                                                    <?php 
                                                } else {
                                                    ?>  
                                                        <?= date('dd/mm/yyyy') ?>
                                                    <?php
                                                }
                                            ?>
                                        </td>
                                    </tr>
                                <?php
                            }
                            if(get_field('client_name')) {
                                ?>
                                    <tr>
                                        <td>Bedrijf</td>
                                        <td><?= get_field('client_name') ?></td>
                                    </tr>
                                <?php
                            }
                            if(get_field('jobtitle')) {
                                ?>
                                    <tr>
                                        <td>Functie</td>
                                        <td><?= get_field('jobtitle') ?></td>
                                    </tr>
                                <?php
                            }
                            if($post->post_excerpt) {
                                ?>
                                    <tr>
                                        <td>Omschrijving</td>
                                        <td><?= $post->post_excerpt ?></td>
                                    </tr>
                                <?php 
                            }
                        ?>
                    </table>
                </div>
            </section>
        <?php 
    }
?>