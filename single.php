<?php get_header(); ?>

<!-- Posts are here -->
<div class="page-content  my-5">
  <div class="container">



    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <section id="uudised" class="my-5">
          <div class="main-container px-2 py-5 p-md-5">
            <!-- Header -->
            <h2 class="color-blue text-md-left text-center font-weight-bold"><?php the_title(); ?></h2>
            <!-- Date -->
            <p class="font-weight-bold text-md-right text-center"><?php echo get_the_date(); ?></p>
            <hr>

            <!-- Content -->
            <?php if (get_field('uudise_pilt')) : ?>
              <div class="row">
                <div class="col-md-4">
                  <img class="img-fluid img-thumbnail" src="<?php the_field('uudise_pilt') ?>">
                </div>
                <div class="col-md-8">
                  <?php the_field('uudise_sisu') ?>
                </div>
              </div>
            <?php else : ?>
              <?php the_field('uudise_sisu') ?>
            <?php endif; ?>
          </div>
        </section>

    <?php endwhile;
    endif; ?>
  </div>
</div>


<?php get_footer(); ?>