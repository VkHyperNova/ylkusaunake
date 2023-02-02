<?php get_header(); ?>

<div class="page-content my-5">

    <!-- Counter -->

    <?php if (get_field('people_counter_onoff')) : ?>
        <div class="container">
            <div class="counter-information-container">
                <div class="row p-2">
                    <!-- Open message -->
                    <div class=" col-sm-12 col-lg-4 py-2">
                        <div class="counter-open-msg"><?php the_field('avatud_teade'); ?></div>
                    </div>

                    <!-- Gender information -->
                    <div class="col-sm-12 col-lg-4 py-2">
                        <div class="counter-gender-in <?php if (get_field('naised_voi_mehed') == 'Naised') echo 'counter-highlight'; ?>">Naised</div>
                        <div class="counter-dash">/</div>
                        <div class="counter-gender-out <?php if (get_field('naised_voi_mehed') == 'Mehed') echo 'counter-highlight'; ?>">Mehed</div>
                    </div>

                    <!-- People counter -->
                    <div class="col-sm-12 col-lg-4 py-2">
                        <div id="counter" class="counter-highlight"><?php the_field('inimesi'); ?></div>
                        <div class="counter-dash">/</div>
                        <div class="counter-people-max"><?php the_field('kohtade_arv'); ?></div>
                    </div>
                </div><!--  row end -->
            </div> <!--  counter-information-container end -->
        </div><!--  container end -->


        <!--Random message -->
    <?php elseif (get_field('random_message_onoff')) : ?>
        <div class="container">
            <div class="counter-information-container">
                <div class="row p-2">
                    <div class="col">
                        <div class="random-msg"><?php the_field('message'); ?></div>
                    </div>
                </div><!--  row end -->
            </div> <!--  counter-information-container end -->
        </div><!--  container end -->
    <?php endif; ?>


    <!-- AVALEHT CONTENT -->
    <div class="container my-5">

        <!-- Lahtioleku ajad -->
        <div class="glass-container text-center">

            <!-- Main Message -->
            <h4 class="color-blue spacing-2 text-uppercase py-5"><?php the_field('main_message'); ?></h4>
            <hr>
            <div class="row p-2">
                <div class="col">
                    <h4>Naised</h4>
                    <h5><?php the_field('naiste_aeg'); ?></h5>
                </div>
                <div class="col">
                    <h4>Mehed</h4>
                    <h5><?php the_field('meeste_aeg'); ?></h5>
                </div>
            </div>

            <?php if (get_field('naita_tavasauna_hinda_onoff')) : ?>
                <hr>
                <p class="color-blue">Hind: <?php the_field('tavasauna_hind'); ?> EUR</p>
            <?php endif ?>

        </div><!-- glass-container end -->
    </div><!--  container end -->

    <!-- Broneerimine -->
    <div class="container">
        <div class="glass-container my-5 text-center">
            <h4 class="color-blue spacing-2 text-uppercase py-5"><?php the_field('broneerise_info'); ?></h4>
            <hr>
            <div class="row p-5">
                <div class="col">
                    <h5><?php the_field('kontakt_telefon'); ?></h5>
                </div>

                <div class="col">
                    <h5><?php the_field('kontakt_email'); ?></h5>
                </div>
            </div>

            <!-- Broneerimis hind -->
            <?php if (get_field('naita_broneerimis_hinda_onoff')) : ?>
                <hr>
                <p class="color-blue">Hind: <?php the_field('broneerimis_hind'); ?> EUR/Tund</p>
            <?php endif ?>
        </div>
    </div>
    <!-- Uudised -->

    <div class="container-fluid">
        <div class="news my-5">
            <h4 class="color-blue p-5 text-uppercase">Viimased Uudised</h4>
            <div class="row">

                <?php $lastposts = get_posts(array('posts_per_page' => 4)); ?>
                <?php if ($lastposts) {
                    foreach ($lastposts as $post) : setup_postdata($post); ?>

                        <div class="col m-3">
                            <div class="d-flex justify-content-center">
                                <div class="news-container glass-container text-center">
                                    <p class="color-blue"><?php echo get_the_date(); ?></p>
                                    <hr>
                                    <a href="<?php the_permalink() ?>">
                                        <h5 class="p-4"><?php the_title(); ?></h5>
                                    </a>

                                    <!-- Display limited content -->
                                    <?php
                                    $char_limit = 100; //character limit
                                    $content = $post->post_content; //contents saved in a variable
                                    echo substr(strip_tags($content), 0, $char_limit);
                                    echo '...';

                                    ?>
                                    <a href="<?php the_permalink() ?>">Loe edasi</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <?php wp_reset_postdata(); ?>
                <?php } ?>
            </div>
        </div> <!-- news end -->
    </div><!--  container-fluid end -->





</div><!--  page-content end -->




<?php get_footer(); ?>