<?php get_header(); ?>

<!-- Teenuste riba -->

<?php if (get_field('sauna_info')['teenuste_riba']) : ?>
    <div class="container-fluid bg-light text-center p-3">
        <div class="row">
            <?php for ($x = 1; $x <= 4; $x += 1) { ?>
                <div class="col-lg-3">
                    <h4 class="text-muted color-blue font-italic spacing-2"><?php echo get_field('sauna_info')['teenuste_riba']['teenus_' . $x]; ?></h4>
                </div>
            <?php } ?>
        </div>
    </div>
<?php endif; ?>

<div class="page-content my-5">

    <!-- Counter -->

    <?php if (get_field('people_counter')['people_counter_onoff']) : ?>
        <div class="container my-5">
            <div class="people-counter-container">
                <div class="row p-2">
                    <!-- Open message -->
                    <div class="col-sm-12 col-lg-4 py-2">
                        <div class="counter-open-msg"><?php echo get_field('people_counter')['avatud_teade']; ?></div>
                    </div>

                    <!-- Gender information -->
                    <div class="col-sm-12 col-lg-4 py-2">
                        <div class="counter-gender-in <?php if (get_field('people_counter')['naised_voi_mehed'] == 'Naised') echo 'counter-highlight'; ?>">Naised</div>
                        <div class="counter-dash">/</div>
                        <div class="counter-gender-out <?php if (get_field('people_counter')['naised_voi_mehed'] == 'Mehed') echo 'counter-highlight'; ?>">Mehed</div>
                    </div>

                    <!-- People counter -->
                    <div class="col-sm-12 col-lg-4 py-2">
                        <div id="people-count" class="counter-highlight"><?php echo get_field('people_counter')['inimesi']; ?></div>
                        <div class="counter-dash">/</div>
                        <div class="counter-people-max"><?php echo get_field('people_counter')['kohtade_arv']; ?></div>
                        <div class="d-inline ml-5">
                            <button onclick="refresh()" class="btn btn-warning">Refresh</button>
                        </div>
                    </div>
                </div><!--  row end -->
            </div> <!--  people-counter-container end -->
        </div><!--  container end -->
    <?php endif; ?>


    <!--Random message -->

    <?php if (get_field('random_message')['show_random_message']) : ?>
        <div class="container my-5">
            <div class="main-container">
                <div class="row p-2">
                    <div class="col-lg-12">
                        <h4 class="text-center color-red py-3"><?php echo get_field('random_message')['the_message']; ?></h4>
                    </div>
                </div><!--  row end -->
            </div> <!--  main-container end -->
        </div><!--  container end -->
    <?php endif; ?>




    <!-- AVALEHT CONTENT -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2"></div>
            <!-- Main column -->
            <div class="col">

                <div class="main-container text-center my-5">
                    <h3 class="color-blue text-uppercase pt-5"><?php echo get_field('sauna_info')['tava_saun']['tava_sauna_info']; ?></h3>
                    <div class="row pt-5">
                        <div class="col">
                            <h5>Naised</h5>
                            <h6><?php echo get_field('sauna_info')['tava_saun']['tava_sauna_aeg']['naiste_aeg']; ?></h6>
                        </div>
                        <div class="col">
                            <h5>Mehed</h5>
                            <h6><?php echo get_field('sauna_info')['tava_saun']['tava_sauna_aeg']['meeste_aeg']; ?></h6>
                        </div>
                        <?php if (get_field('sauna_info')['tava_saun']['naita_tavasauna_hinda']['naita_tavasauna_hinda_onoff']) : ?>
                            <div class="col">
                                <h5>Hind</h5>
                                <h6><?php echo get_field('sauna_info')['tava_saun']['naita_tavasauna_hinda']['tavasauna_hind']; ?> EUR</h6>
                            </div>
                        <?php endif ?>
                    </div>
                    <div class="pt-5">
                        <hr>
                        <p class="font-weight-bold"><?php echo get_field('sauna_info')['broneerimine']['broneerise_info']; ?> - Lisainfo Tel. <?php echo get_field('sauna_info')['broneerimine']['kontaktid']['kontakt_telefon']; ?></p>
                    </div>
                </div>

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
                                        <div class="news-container main-container text-center">
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