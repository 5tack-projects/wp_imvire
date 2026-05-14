<footer>
    <div class="block-full">
        <div class="frame">
            <div class="grid-container">
                <div class="grid menu">
                    <h4>Contact</h4>
                    <!-- <a href="/">
                        <?= get_template_part('/assets/svg/logo/brand-logo') ?>
                    </a> -->
                    <ul>
                        <li class="">
                            <div class="wrapper">
                                <strong>Phone</strong>
                                T. <?php global $phone_display; echo $phone_display; ?>
                                <a href="<?php global $phone_wha; echo $phone_wha; ?>" class="btn cta whatsapp">
                                    Stuur bericht
                                </a>
                                <a href="<?php global $phone_wha; echo $phone_wha; ?>" class="btn primary phone">
                                    Bellen
                                </a>
                            </div>
                        </li>
                        <li class="">
                            <div class="wrapper">
                                <strong>Email</strong>
                                E. <?php global $email; echo $email; ?>
                                <a href="<?php global $email_send; echo $email_send; ?>" class="btn primary">
                                    Stuur email
                                </a>
                            </div>
                        </li>
                        <li class="">
                            <div class="wrapper">
                                <strong>Bedrijfsinfo</strong>
                                <span class="title"><?= get_bloginfo( 'name' ) ?></span>
                                <span class="subtitle"><?= get_bloginfo( 'description' ) ?></span>
                                KvK: <?php global $kvk; echo $kvk; ?>
                            </div>
                        </li>
                        <!-- <li class="pre-icon linkedin"><a href="<?php //global $linkedin; echo $linkedin; ?>">Let's connect!</a></li> -->
                        <!-- <li class="pre-icon building"><a href=""><?php //global $kvk; echo $kvk; ?></a></li> -->
                        <!-- <li class="pre-icon tag site-info">
                            <div class="text">
                                <span class="site-name"><?php //echo get_bloginfo( 'name' ); ?></span>
                                <span class="site-description"><?php //echo get_bloginfo( 'description' ); ?></span>
                            </div>
                        </li> -->
                    </ul>
                </div>
                <div class="grid menu">
                    <h4>Diensten</h4>
                    <?php
                        wp_nav_menu( array(
                            'theme_location' => 'footer_brands',
                            'menu_id' => '',
                            'menu_class' => '',
                            'order' => 'ASC', 
                        ));
                    ?>
                </div>
                <div class="grid menu">
                    <h4>Pagina's</h4>
                    <?php
                        wp_nav_menu( array(
                            'theme_location' => 'footer_pages',
                            'menu_id' => '',
                            'menu_class' => '',
                            'order' => 'ASC', 
                        ));
                    ?>
                </div>
                <div class="grid form">
                    <h4>Formulier</h4>
                    <?= get_template_part('partials/components/forms/mail') ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Layout -->
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/layout/nav.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/layout/onscroll.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/layout/modal.js"></script>

    <!-- Pageblocks -->
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/pageblocks/references.js"></script>
</footer>