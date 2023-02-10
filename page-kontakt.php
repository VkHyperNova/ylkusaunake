<?php get_header(); ?>


<!-- Content -->
<div class="page-content my-5">
    <div class="container">
        <h1 class="font-weight-bold">Kontakt</h1>

        <div class="row my-5">
            <?php $APR = array("aadress", "kontakt", "avatud"); ?>
            <?php for ($x = 0; $x <= 2; $x += 1) { ?>
                <div class="col my-3">
                    <div class="contact-small-container main-container px-5 py-3">
                        <h5 class="color-blue text-uppercase spacing-2 font-weight-bold py-2"><?php echo $APR[$x]; ?></h5>
                        <?php dynamic_sidebar('footer_information_' . $APR[$x]); ?>
                    </div>
                </div>
            <?php } ?>
        </div>
        <hr>
        <div class="map-responsive my-5">
            <iframe width="1100" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2095.5975121683023!2d26.722057816115733!3d58.315846098904665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46eb3a0f7a60a9d1%3A0xf31a787ed1c7c89f!2sPargi%207a%2C%20%C3%9Clenurme%2C%2061714%20Tartu%20maakond!5e0!3m2!1sen!2see!4v1674840659985!5m2!1sen!2see"></iframe>
        </div>








        <!-- wp content -->
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php the_content(); ?>
        <?php endwhile;
        endif; ?>
    </div> <!-- container end -->
</div> <!-- page-content end -->

<?php get_footer(); ?>