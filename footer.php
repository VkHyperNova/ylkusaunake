<?php wp_footer(); ?>

<footer>
    <div class="container-fluid">
        <div class="row footer-information pb-5">
            <div class="col-lg-3 col-md-12 col-sm-12 text-center">
                <img class="footer-logo img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/kauss_transparent-bg.png" alt="logo">
            </div>
            <?php $APR = array("aadress", "kontakt", "avatud"); ?>
            <?php for ($x = 0; $x <= 2; $x += 1) { ?>
                <div class="col-lg-3 col-md-4 col-sm-12 pt-5">
                    <h5 class="text-uppercase"><?php echo $APR[$x]; ?></h5>
                    <?php dynamic_sidebar('footer_information_' . $APR[$x]); ?>
                </div>
            <?php } ?>
        </div>
    </div>

    <hr class="red-hr">
    <!-- Copyright -->

    <div class="footer-copyright container-fluid">
        <div class="row justify-content-md-center">
            <div class="col col-lg-2"></div>
            <div class="col-md-auto">
                <span class="text-uppercase">© 2023 Copyright: ylkusaunake.ee</span>
            </div>
            <div class="col col-lg-2">
                <a href="https://www.vk-dev.eu" title="Theme by VK">vk-dev</a>
            </div>
        </div>
    </div>



    <!-- Copyright END -->
</footer>
</body>

</html>