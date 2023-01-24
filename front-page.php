<?php get_header(); ?>

<div class="container page-content">
    <div class="current-information-container">
        <div class="row py-3">
            <?php if (get_field('lahti_olek')) : ?>
                <div class="col-lg-4">
                    <div class="current-open">Avatud</div>
                </div>
                <div class="col-lg-4">
                    
                        <div class="current-gender-in <?php if (get_field('naised_voi_mehed') == 'Naised') echo 'highlight'; ?>">Naised</div>
                        <div class="dash">/</div>
                        <div class="current-gender-out <?php if (get_field('naised_voi_mehed') == 'Mehed') echo 'highlight'; ?>">Mehed</div>
                   

                </div>
                <div class="col-lg-4">
                    <div class="highlight"><?php the_field('inimesi'); ?></div>
                    <div class="dash">/</div>
                    <div class="current-people-max"><?php the_field('kohtade_arvu_suurendamine'); ?></div>
                </div>
            <?php elseif (get_field('broneering')) : ?>
                <div class="col">
                    <div class="broneering-msg">Saun on täna Broneeritud</div>
                </div>
            <?php else : ?>
                <div class="col">
                    <div class="closed-msg">Saun on avatud L 14:00 - 20:00</div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>