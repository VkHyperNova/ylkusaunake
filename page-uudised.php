<?php get_header(); ?>

<!-- Content -->
<div class="container page-content my-5">
    <?php $lastposts = get_posts(array('posts_per_page' => -1)); ?> <!-- display all posts -1 -->
    <?php if ($lastposts) {
        foreach ($lastposts as $post) : setup_postdata($post); ?>

            <div class="col-lg-12 my-5">
                <div class=" glass-container p-5">
                    <!-- Date -->
                    <p class="news-date"><?php echo get_the_date(); ?></p>

                    <!-- Header -->
                    <div class="text-center">
                        <h5 class="avaleht-header"><?php the_title(); ?></h5>
                    </div>

                    <div class="news-content-container p-5"><?php the_content(); ?></div>

                </div>
            </div>
        <?php endforeach; ?>
        <?php wp_reset_postdata(); ?>
    <?php } ?>
</div>

<?php get_footer(); ?>