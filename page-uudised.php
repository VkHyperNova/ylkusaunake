<?php get_header(); ?>

<!-- Uudised Content -->
<div class="page-content">
    <div class="container  my-5">
        <?php $lastposts = get_posts(array('posts_per_page' => -1)); ?> <!-- display all posts -1 -->
        <?php if ($lastposts) {
            foreach ($lastposts as $post) : setup_postdata($post); ?>

                <div class="col-lg-12 my-5">
                    <div class="main-container p-5">
                        <!-- Date -->
                        <p class="color-blue"><?php echo get_the_date(); ?></p>

                        <!-- Header -->
                        <div class="text-center py-5">
                            <h3 class=""><?php the_title(); ?></h3>
                        </div>

                        <!-- Content -->
                        <div class="p-5">
                            <?php the_content(); ?>
                        </div>

                    </div>
                </div>
            <?php endforeach; ?>
            <?php wp_reset_postdata(); ?>
        <?php } ?>
    </div>
</div>
<?php get_footer(); ?>