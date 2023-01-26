<?php get_header(); ?>

<div class="page-content pt-5">

    <!-- Counter -->
    <div class="container current-information-container">
        <div class="row text-center text-uppercase">
            <?php if (get_field('kuva_avatud')) : ?>
                <!-- Open message -->
                <div class=" col-sm-12 col-lg-12 py-2">
                    <div class="current-open-msg"><?php the_field('avatud_teade'); ?></div>
                </div>
        </div>

        <div class="row p-2">
            <!-- Gender information -->
            <div class="col-sm-12 col-lg-6 py-2">
                <div class="current-gender-in <?php if (get_field('naised_voi_mehed') == 'Naised') echo 'highlight'; ?>">Naised</div>
                <div class="dash">/</div>
                <div class="current-gender-out <?php if (get_field('naised_voi_mehed') == 'Mehed') echo 'highlight'; ?>">Mehed</div>
            </div>

            <!-- People counter -->
            <div class="col-sm-12 col-lg-6 py-2">
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

<?php get_footer(); ?>