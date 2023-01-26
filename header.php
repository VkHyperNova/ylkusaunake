<!DOCTYPE html>
<html>

<head>
    <?php wp_head(); ?>
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <link rel="android-chrome-192x192" sizes="192x192" href="<?php echo get_template_directory_uri(); ?>/img/favicon/android-chrome-192x192.png">
    <link rel="android-chrome-512x512" sizes="512x512" href="<?php echo get_template_directory_uri(); ?>/img/favicon/android-chrome-512x512.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/img/favicon/site.webmanifest">
</head>

<body <?php body_class(); ?>>




    <!-- Counter -->
    <div class="current-information-container">
        <div class="container">
            <div class="row p-2">
                <?php if (get_field('kuva_avatud')) : ?>

                    <!-- Open message -->
                    <div class=" col-sm-12 col-lg-4 py-2">
                        <div class="current-open-msg"><?php the_field('avatud_teade'); ?></div>
                    </div>

                    <!-- Gender information -->
                    <div class="col-sm-12 col-lg-4 py-2">
                        <div class="current-gender-in <?php if (get_field('naised_voi_mehed') == 'Naised') echo 'highlight'; ?>">Naised</div>
                        <div class="dash">/</div>
                        <div class="current-gender-out <?php if (get_field('naised_voi_mehed') == 'Mehed') echo 'highlight'; ?>">Mehed</div>
                    </div>

                    <!-- People counter -->
                    <div class="col-sm-12 col-lg-4 py-2">
                        <div class="highlight"><?php the_field('inimesi'); ?></div>
                        <div class="dash">/</div>
                        <div class="current-people-max"><?php the_field('kohtade_arv'); ?></div>
                    </div>

                    <!--Random message -->
                <?php else : ?>
                    <div class="col">
                        <div class="closed-msg"><?php the_field('teade'); ?></div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>



    <!-- LOGO -->
    <div class="logo-bg">
        <div class="container">
            <a href="https://www.ylkusaunake.ee">
                <img class="logo img-fluid" alt="Ylkusaunake logo" src="<?php echo get_template_directory_uri(); ?>/img/ylkusaunake_logo_transparent.png">
            </a>
        </div>
    </div>




    <hr class="header-hr">

    <!-- NAVIGATION -->
    <header class="sticky-top nav-bg">
        <div class="container">

            <nav class="navbar navbar-expand-md navbar-light" role="navigation">

                <!-- Brand and toggle get grouped for better mobile display -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'your-theme-slug'); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Navigation items -->
                <?php
                wp_nav_menu(array(
                    'theme_location'    => 'top-menu',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'bs-example-navbar-collapse-1',
                    'menu_class'        => 'nav navbar-nav mx-auto',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker(),
                ));
                ?>
            </nav>
        </div>
    </header>
    <hr class="header-hr">