<?php get_header(); ?>


<!-- Content -->
<div class="container page-content my-5">

<h1 class="text-center">Hinnakiri info (coming soon)</h1>



    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile;
    endif; ?>
</div>



<?php get_footer(); ?>