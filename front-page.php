<?php get_header(); ?>

<!-- Teenuste riba -->
<?php if (get_field('teenuste_riba')) : ?>
    <div class="container-fluid bg-light text-center p-3">
        <div class="row">
            <?php for ($x = 1; $x <= 4; $x += 1) { ?>
                <div class="col-lg-3">
                    <h4 class="text-muted color-blue font-italic spacing-2"><?php echo get_field('teenuste_riba')['teenus_' . $x]; ?></h4>
                </div>
            <?php } ?>
        </div>
    </div>
<?php endif; ?>

<div class="page-content my-5">

    <!-- Counter -->

    <?php if (get_field('people_counter_onoff')) : ?>
        <div class="container my-5">
            <div class="counter-information-container">
                <div class="row p-2">
                    <!-- Open message -->
                    <div class="col-sm-12 col-lg-4 py-2">
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
    <?php endif; ?>


    <!--Random message -->
    <?php if (get_field('random_message')['show_random_message']) : ?>
        <div class="container my-5">
            <div class="counter-information-container">
                <div class="row p-2">
                    <div class="col-lg-12">
                        <div class="random-msg"><?php echo get_field('random_message')['the_message']; ?></div>
                    </div>
                </div><!--  row end -->
            </div> <!--  counter-information-container end -->
        </div><!--  container end -->
    <?php endif; ?>




    <!-- AVALEHT CONTENT -->
    <div class="container-fluid py-5">
        <div class="row">
            <div class="col-lg-2"></div>
            <!-- Main column -->
            <div class="col">

                <!-- Main Message -->
                <h4 class="spacing-2 color-blue text-capitalize font-weight-bold "><?php the_field('main_message'); ?></h4>
                <hr style="width: 45%;">
                <div class="row p-5 ">
                    <div class="col">
                        <h4 class="text-secondary">Naised</h4>
                        <h5 class="text-secondary"><?php the_field('naiste_aeg'); ?></h5>
                    </div>
                    <div class="col">
                        <h4 class="text-secondary">Mehed</h4>
                        <h5 class="text-secondary"><?php the_field('meeste_aeg'); ?></h5>
                    </div>
                </div>

                <!-- Price -->
                <div class="row my-2">
                    <div class="col">
                        <?php if (get_field('naita_tavasauna_hinda_onoff')) : ?>
                            <hr>
                            <p class="text-secondary font-weight-bold text-right">Hind: <?php the_field('tavasauna_hind'); ?> EUR</p>
                        <?php endif ?>
                    </div>
                </div>



                <!-- Broneerimine -->
                <div class="row my-5">
                    <div class="col">
                        <h4 class="spacing-2 color-blue text-capitalize font-weight-bold"><?php the_field('broneerise_info'); ?></h4>
                        <hr style="width: 45%;">
                        <h5 class="text-secondary  px-5 pt-5"><?php the_field('kontakt_telefon'); ?></h5>
                        <h5 class="text-secondary  px-5"><?php the_field('kontakt_email'); ?></h5>
                    </div>
                </div>

                <!-- Broneerimis hind -->
                <?php if (get_field('naita_broneerimis_hinda_onoff')) : ?>
                    <hr>
                    <p class="text-secondary font-weight-bold text-right">Hind: <?php the_field('broneerimis_hind'); ?> EUR/Tund</p>
                <?php endif ?>


                <!-- Asukoht -->
                <div class="row my-5">
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <h4 class="spacing-2 color-blue text-capitalize font-weight-bold">Asukoht</h4>
                                <hr style="width: 25%;">
                            </div>
                        </div>
                        <div class="box-shadow-1 my-5">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2095.5975121683023!2d26.722057816115733!3d58.315846098904665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46eb3a0f7a60a9d1%3A0xf31a787ed1c7c89f!2sPargi%207a%2C%20%C3%9Clenurme%2C%2061714%20Tartu%20maakond!5e0!3m2!1sen!2see!4v1674840659985!5m2!1sen!2see" width="800" height="450" style="border: 0px; " allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>


            <!-- News column -->
            <div class="col">
                <div class="news my-5">
                    <h4 class="color-blue text-uppercase text-center">Viimased Uudised</h4>
                    <div class="row">

                        <?php $lastposts = get_posts(array('posts_per_page' => 3)); ?>
                        <?php if ($lastposts) {
                            foreach ($lastposts as $post) : setup_postdata($post); ?>

                                <div class="col m-3">
                                    <div class="d-flex justify-content-center">
                                        <div class="news-container glass-container text-center">
                                            <p class="text-muted font-weight-bold"><?php echo get_the_date(); ?></p>
                                            <hr>
                                            <a href="<?php the_permalink() ?>">
                                                <h5 class="p-4 font-weight-bold color-blue"><?php the_title(); ?></h5>
                                            </a>

                                            <!-- Display limited content -->
                                            <?php
                                            $char_limit = 100; //character limit
                                            $content = $post->post_content; //contents saved in a variable
                                            echo '<p>';
                                            echo substr(strip_tags($content), 0, $char_limit);
                                            echo '...</p>';

                                            ?>
                                            <a class="font-weight-bold text-secondary" href="<?php the_permalink() ?>">Loe edasi</a>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            <?php wp_reset_postdata(); ?>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div><!--  container-fluid end -->
</div><!--  page-content end -->

<?php get_footer(); ?>