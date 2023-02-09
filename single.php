<?php get_header(); ?>

<!-- Posts are here -->
<div class="page-content  my-5">
  <div class="container">



    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <section class="my-5">
                    

                    <div class="main-container p-5">
                        <!-- Header -->
                        <h2 class="color-blue text-left font-weight-bold"><?php the_title(); ?></h2>
                        <!-- Date -->
                    <p class=" font-weight-bold text-right"><?php echo get_the_date(); ?></p>
                        <hr>

                        <!-- Content -->
                        <div class="p-5">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </section>

    <?php endwhile;
    endif; ?>
  </div>
</div>


<?php get_footer(); ?>