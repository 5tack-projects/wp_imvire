<section class="cta" style="background-image: url('<?php bloginfo('template_directory'); ?>/assets/images/bg/bg-coffee.jpg')">
    <div class="frame">
        <div class="grid-container">
            <div class="grid whatsapp">
                <!-- <i class="fab fa-whatsapp"></i> -->
                <h3>Whatsapp</h3>
                <!-- <p>Ook buiten werktijden & -dagen makkelijk te bereiken.</p> -->
                <p><strong>T.</strong> <?php global $phone_display; echo $phone_display; ?></p>
                <a href="<?php global $phone_wha; echo $phone_wha; ?>" class="btn cta whatsapp">Stuur bericht</a>
            </div>
            <div class="grid email">
                <!-- <i class="fa fa-paper-plane" aria-hidden="true"></i> -->
                <h3>Email</h3>
                <!-- <p>Liever een mail sturen kan uiteraard ook.</p> -->
                <p><strong>E.</strong> <?php global $email; echo $email; ?></p>
                <a href="<?php global $phone_wha; echo $phone_wha; ?>" class="btn secondary email">Stuur bericht</a>
            </div>
            <!-- <div class="grid">
                <h3>Phone</h3>
                <p>Bel gerust op!</p>
                <a href="<?php global $phone_wha; echo $phone_wha; ?>" class="btn primary">Bel direct</a>
            </div> -->
            <div class="grid form">
                <!-- <i class="fa fa-pencil" aria-hidden="true"></i> -->
                <h3>Formulier</h3>
                <?= get_template_part('partials/components/forms/mail') ?>
            </div>
        </div>
    </div>
</section>