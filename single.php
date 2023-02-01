<?php get_header(); ?>

<!-- Posts are here -->
<div class="container page-content  my-5">
  <div class="glass-container p-5">



    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <!-- Date -->
        <p class="news-date"><?php echo get_the_date(); ?></p>
        <!-- Header -->
        <div class="text-center">
          <h5 class="avaleht-header"><?php the_title(); ?></h5>
        </div>
        <div class="p-5"><?php the_content(); ?></div>

    <?php endwhile;
    endif; ?>
  </div>
</div>


<?php get_footer(); ?>