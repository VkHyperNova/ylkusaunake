<?php get_header(); ?>
<div class="container">
    <div class="page-content my-5">

        <!-- Counter -->
        <?php if (get_field('people_counter_onoff')) : ?>
            <div id="counter" class="counter-information-container">
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
                        <div class="counter-highlight"><?php the_field('inimesi'); ?></div>
                        <div class="counter-dash">/</div>
                        <div class="counter-people-max"><?php the_field('kohtade_arv'); ?></div>
                    </div>
                </div><!--  row end -->
            </div> <!--  counter-information-container end -->
        <?php endif; ?>

        <!--Random message -->
        <?php if (get_field('random_message_onoff')) : ?>
            <div class="counter-information-container">
                <div class="row p-2">
                    <div class="col">
                        <div class="random-msg"><?php the_field('message'); ?></div>
                    </div>
                </div><!--  row end -->
            </div> <!--  counter-information-container end -->
        <?php endif; ?>


        <!-- AVALEHT CONTENT -->
        <div class="avaleht-content my-5">


            <!-- Lahtioleku ajad -->
            <div class="glass-container text-center">
                <h3>Saun on avatud iga <span>Laupäev</span></h3>

                <hr>

                <div class="row p-5">
                    <div class="col">
                        <h5><span>14:00</span>-16:30 Naised</h5>
                    </div>
                    <div class="col">
                        <h5>16:30-<span>20:00</span> Mehed</h5>
                    </div>
                </div>

                <hr>

                <!-- Broneeri -->
                <div class="broneerige-message">
                    <p>Broneerimine <span></span> (E-R & P) - Lisainfo +372 5303 9838 </p>
                </div>
            </div><!-- glass-container end -->

            <!-- Uudised -->
            <div class="news-container my-5">
                <h2>Viimased Uudised</h2>



                <?php $lastposts = get_posts(array('posts_per_page' => 3)); ?>





                <div class="row">
                <?php if ($lastposts) {
                    foreach ($lastposts as $post) : setup_postdata($post); ?>
                        
                            <div class="col-lg-4">
                                <div class="glass-container text-center my-5">
                                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                    <p><?php the_author(); ?></p>
                                    <p><?php echo get_the_date(); ?></p>
                                    <p><?php the_excerpt(); ?></p>
                                </div>
                            </div>
                        </div>

                    <?php endforeach; ?>
                <?php wp_reset_postdata();
                } ?>

                <div class="row">
                    <div class="col">1</div>
                    <div class="col">2</div>
                    <div class="col">3</div>
                </div>



            </div>




        </div><!-- avaleht-content end -->










    </div><!--  page-content end -->
</div><!--  container end -->



<?php get_footer(); ?>