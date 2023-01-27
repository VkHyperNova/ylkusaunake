<?php get_header(); ?>

<div class="page-content my-5">

    <!-- Counter -->

    <div class="container">
        <div class="current-information-container">
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


    <div class="container fp-content mt-5">
        <div class="fp-desc">
            <h1 class="text-center p-5">Ülenurme Saun kirjeldus (coming soon)</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero aspernatur velit cum porro, sequi pariatur! Asperiores harum assumenda eum distinctio consectetur ea dolor excepturi quisquam alias dignissimos ab, eius inventore.</p>
        </div>
        <h2 class="text-center">Teenused</h2>
        <ul class="py-5">
            <li class="display-inline">Meeste-ja naistesaunad</li>
            <li class="display-inline ">Peresaunad</li>
            <li class="display-inline ">Sauna rent</li>
            <li class="display-inline ">Poissmeeste-ja tüdrukuteõhtud</li>
        </ul>

        <h4 class="text-center">Lisainfo ja broneerimine tel: 53039838</h4>
    </div>
</div>

<?php get_footer(); ?>