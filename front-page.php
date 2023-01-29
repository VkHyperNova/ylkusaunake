<?php get_header(); ?>

<div class="page-content my-5">

    <!-- Counter -->
    <div class="container">
        <div class="counter-information-container">
            <div class="row p-2">
                <?php if (get_field('kuva_avatud')) : ?>

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

                    <!--Random message -->
                <?php else : ?>
                    <div class="col">
                        <div class="counter-closed-msg"><?php the_field('teade'); ?></div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

   
</div>

<?php get_footer(); ?>