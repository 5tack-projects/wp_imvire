<?php
    $menu_html = wp_nav_menu([
    'theme_location' => 'main',
    'menu_id'        => 'main-nav',
    'menu_class'     => '',
    'order'          => 'ASC',
    'echo'           => false,
    ]);
?>

<template id="main-menu-template">
  <?php echo $menu_html; ?>
</template>

<nav id="nav-main" class="nav-fixed">

    <!-- <a href="<?= home_url() ?>" class="brand">
        <div class="brand-logo">
            <div class="brand-img">
                <?= get_template_part('/assets/svg/logo/brand-logo') ?>
            </div>
        </div>
    </a> -->

    <div class="frame top-nav">
        <?php /*
            wp_nav_menu( array(
                'theme_location' => 'top_nav',
                // 'menu_id' => 'top-nav',
                'menu_class' => '',
                'order' => 'ASC', 
            ));*/
        ?>

        <div class="brand">
            <a href="<?= home_url() ?>" class="logo">
                <?= get_template_part('/assets/svg/logo/brand-logo') ?>
            </a>
            <!-- <div class="content">
                <span class="title"><?= bloginfo('title') ?></span>
                <span class="subtitle"><?= bloginfo('description') ?></span>
            </div> -->
        </div>

        <!-- <a href="/contact" class="btn primary" id="cta-nav">
            <i class="fa fa-coffee" aria-hidden="true"></i>
            Coffee
        </a> -->

        <!-- <span class="btn menu" onclick="nav()">
            <i class="fa fa-bars" aria-hidden="true"></i>
            <span class="text">Menu</span>
        </span> -->

        <span
            class="btn secondary "
            onclick="active_modal(this)"
            data-menu="main-nav"
        >
            <i class="fa fa-bars" aria-hidden="true"></i>
            <span class="text">Menu</span>
        </span>

    </div>

    <div id="main-nav" class="nav" onclick="closeNav()">
        <div class="frame">
            <?php
                wp_nav_menu( array(
                    'theme_location' => 'main',
                    'menu_id' => 'main-nav',
                    'menu_class' => '',
                    'order' => 'ASC', 
                ));
            ?>
        </div>
    </div>

</nav>

<div 
    id="modal" 
    class="modal-overlay"
    onclick="active_modal(this)"
    data-active="0"
>
</div>