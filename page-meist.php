<?php get_header(); ?>


<!-- Content -->
<div class="page-content my-5">
    <div class="container">
        <h1 class="font-weight-bold">Meist</h1>
        <section class="my-5">
            <div class="main-container">
                <div class="p-sm-5 p-2">
                    <?php the_field('meist_sauna_kirjeldus') ?>
                </div>
            </div>
        </section>
    </div> <!-- container end -->
</div> <!-- page-content end -->

<?php get_footer(); ?>