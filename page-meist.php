<?php get_header(); ?>


<!-- Content -->
<div class="page-content my-5">
    <div class="container">
        <h1 class="font-weight-bold my-5">Meist</h1>


        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <div class="main-container px-sm-5 px-2 py-3">
                    <?php the_content(); ?>
                </div>

        <?php endwhile;
        endif; ?>
    </div> <!-- container end -->
</div> <!-- page-content end -->

<?php get_footer(); ?>