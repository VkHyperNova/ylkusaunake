<?php get_header(); ?>

<!-- Uudised Content -->
<div class="page-content my-5">
    <div class="container">
        <h1 class="font-weight-bold">Uudised</h1>
        <?php $lastposts = get_posts(array('posts_per_page' => -1)); ?> <!-- display all posts -1 -->
        <?php if ($lastposts) {
            foreach ($lastposts as $post) : setup_postdata($post); ?>

                <section class="my-5">
                    

                    <div class="main-container p-5">
                        <!-- Header -->
                        <h2 class="color-blue text-left font-weight-bold p-2"><?php the_title(); ?></h2>
                        <!-- Date -->
                    <p class=" font-weight-bold text-right p-2"><?php echo get_the_date(); ?></p>
                        <hr>

                        <!-- Content -->
                        <div class="p-5">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </section>
            <?php endforeach; ?>
            <?php wp_reset_postdata(); ?>
        <?php } ?>
    </div>
</div>
<?php get_footer(); ?>