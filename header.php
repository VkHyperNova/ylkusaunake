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

    <!-- Header page id !!!IMPORTANT!!!! -->
    <?php $pageid = 201 ?>


    <!-- LOGO -->

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                <a href="https://www.ylkusaunake.ee">
                    <!--  <img class="logo img-fluid" alt="Ylkusaunake logo" src="<?php echo get_template_directory_uri(); ?>/img/ylkusaunake_logo_transparent.png"> -->
                    <?php if (get_field('logo', $pageid)) : ?>
                        <img class="logo img-fluid" src="<?php the_field('logo', $pageid); ?>" />
                    <?php endif; ?>
                </a>
            </div>

            <!-- Header Message -->
            <div class="col-lg-8 col-md-12 col-sm-12 m-auto">
                <h4 class="spacing-3 text-uppercase text-center"><?php the_field('sauna_kirjeldus', $pageid); ?></h4>
                <h1 class="spacing-3 text-uppercase float-right"><?php the_field('sauna_asukoht', $pageid); ?></h1>
            </div>
        </div>
    </div>

    <!-- Teenused -->
    <div class="container-fluid bg-light text-center p-3">
        <div class="row">
            <?php for ($x = 1; $x <= 4; $x += 1) { ?>
                <div class="col-lg-3">
                    <h4 class="color-blue spacing-2"><?php the_field('teenus_' . $x, $pageid); ?></h4>
                </div>
            <?php } ?>
        </div>
    </div>

    <!-- NAVIGATION -->
    <header class="sticky-top bg-black">
        <div class="container">
            <nav class="navbar navbar-expand-md" role="navigation">

                <!-- Brand and toggle get grouped for better mobile display -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'your-theme-slug'); ?>">
                    <span class="color-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-menu-up" viewBox="0 0 16 16">
                            <path d="M7.646 15.854a.5.5 0 0 0 .708 0L10.207 14H14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h3.793l1.853 1.854zM1 9V6h14v3H1zm14 1v2a1 1 0 0 1-1 1h-3.793a1 1 0 0 0-.707.293l-1.5 1.5-1.5-1.5A1 1 0 0 0 5.793 13H2a1 1 0 0 1-1-1v-2h14zm0-5H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v2zM2 11.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 0-1h-8a.5.5 0 0 0-.5.5zm0-4a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 0-1h-11a.5.5 0 0 0-.5.5zm0-4a.5.5 0 0 0 .5.5h6a.5.5 0 0 0 0-1h-6a.5.5 0 0 0-.5.5z" />
                        </svg>
                    </span>
                </button>



                <!-- Navigation items -->
                <?php
                wp_nav_menu(array(
                    'theme_location'    => 'top-menu',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'bs-example-navbar-collapse-1',
                    'menu_class'        => 'nav navbar-nav text-uppercase mx-auto',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker(),
                ));
                ?>
            </nav>
        </div>
    </header>