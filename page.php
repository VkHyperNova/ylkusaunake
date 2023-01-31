<?php get_header(); ?>


<!-- Content -->
<div class="container page-content my-5">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; ?>
    <?php endif; ?>
</div>



<?php get_footer(); ?>