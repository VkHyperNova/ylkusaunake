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
                <h3 class="avaleht-header">Saun on avatud iga Laupäev</h3>

                <hr>

                <div class="row p-2">
                    <div class="col">
                        <h5>14:00-16:30 Naised</h5>
                    </div>
                    <div class="col">
                        <h5>16:30-20:00 Mehed</h5>
                    </div>
                </div>

                <h5>Hind: 5 EUR</h5>

                <hr>

                <!-- Broneeri -->

                <p class="broneerige-message">Broneerimine (E-R & P) - Lisainfo +372 5303 9838 </p>

            </div><!-- glass-container end -->
            
            <!-- Uudised -->
            <div class="news my-5">
                <h4 class="avaleht-header">Viimased Uudised</h4>



                <?php $lastposts = get_posts(array('posts_per_page' => 3)); ?>
                <div class="row">
                    <?php if ($lastposts) {
                        foreach ($lastposts as $post) : setup_postdata($post); ?>

                            <div class="col-lg-4">
                                <div class="news-container glass-container text-center">

                                    <p class="news-date"><?php echo get_the_date(); ?></p>
                                    <hr>
                                    <a href="<?php the_permalink() ?>">
                                        <h5 class="avaleht-header"><?php the_title(); ?></h5>
                                    </a>
                                    <!-- <p><?php the_author(); ?></p> -->


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
                        <?php endforeach; ?>
                        <?php wp_reset_postdata(); ?>
                    <?php } ?>
                </div>
            </div> <!-- news-container end -->




        </div><!-- avaleht-content end -->
    </div><!--  page-content end -->
</div><!--  container end -->



<?php get_footer(); ?>