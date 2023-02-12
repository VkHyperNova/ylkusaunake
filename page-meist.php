<?php get_header(); ?>


<!-- Content -->
<div class="page-content my-5">
    <div class="container-fluid p-md-5 p-3">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="main-container p-md-5 px-3 py-5">
                    <h1 class="font-weight-bold color-blue">Meist</h1>
                    <?php the_field('meist_sauna_kirjeldus') ?>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="row">
                    <?php for ($x = 1; $x <= 4; $x += 1) { ?>
                        <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12">
                            <div class="d-flex justify-content-center">
                                <img class="large-img img-thumbnail mt-lg-0 mt-5" src="<?php the_field('meist_pilt_' . $x) ?>" alt="">
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>

        </div>
    </div>





</div> <!-- container end -->
</div> <!-- page-content end -->

<?php get_footer(); ?>