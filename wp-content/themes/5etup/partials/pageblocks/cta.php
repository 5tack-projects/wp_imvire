<section class="cta">
    <div class="frame">
        <div class="block-full intro">
            <span class="label">Contact</span>
            <?php 
                if(get_field('intro_cta')) {
                    ?>
                        <?= the_field('intro_cta') ?>
                    <?php
                } else {
                    ?>
                        <h2>Nice to meet you!</h2>
                        <p>Neem gerust contact op of laat je gegevens achters zodat ik jou kan benaderen.</p>
                    <?php   
                }
            ?>
        </div>
        <div class="grid-container">
            <div class="grid whatsapp">
                <i class="fab fa-whatsapp"></i>
                <!-- <i class="fas fa-phone"></i> -->
                <h3>Whatsapp</h3>
                <p><strong>T.</strong> <?php global $phone_display; echo $phone_display; ?></p>
                <a href="<?php global $phone_wha; echo $phone_wha; ?>" class="btn cta whatsapp">Stuur bericht</a>
            </div>
            <div class="grid email">
                <i class="fa fa-paper-plane" aria-hidden="true"></i>
                <h3>Email</h3>
                <p><strong>E.</strong> <?php global $email; echo $email; ?></p>
                <a href="<?php global $phone_wha; echo $phone_wha; ?>" class="btn secondary email">Stuur bericht</a>
            </div>
            <div class="grid form">
                <i class="fas fa-pen"></i>
                <h3>Formulier</h3>
                <?= get_template_part('partials/components/forms/mail') ?>
            </div>
        </div>
    </div>
</section>