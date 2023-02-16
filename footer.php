<?php wp_footer(); ?>

<footer>
    <div class="container-fluid">
        <div class="row pb-5">
            <div class="col-lg-3 col-md-12 col-sm-12 text-center pt-4">

                <!-- Facebook group -->
                <section id="fb-group">
                    <a href="https://www.facebook.com/Ylkusaunake/">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/fb-grupp.png" width="150" />
                    </a>
                </section>
            </div>
            <?php $APR = array("aadress", "kontakt", "avatud"); ?>
            <?php for ($x = 0; $x <= 2; $x += 1) { ?>
                <div class="col-lg-3 col-md-4 col-sm-12 pt-5">
                    <h5 class="text-uppercase color-gray spacing-2 font-weight-bold"><?php echo $APR[$x]; ?></h5>
                    <?php dynamic_sidebar('footer_information_' . $APR[$x]); ?>
                </div>
            <?php } ?>
        </div>
    </div>

    <!-- Copyright -->
    <section id="footer-copyright">
        <div class="container-fluid">
            <div class="row justify-content-md-center py-3 text-center">
                <div class="col-md-auto offset-lg-2">
                    <span class="text-uppercase spacing-2 font-weight-bold color-white">© 2023 Copyright: ylkusaunake.ee</span>
                </div>

                <!-- Theme By VK-DEV -->
                <div class="col-md-2 col-12 py-md-0 py-3">
                    <a class="color-gray font-weight-bold spacing-1 text-center" href="https://www.vk-dev.eu" title="Theme by VK">vk-dev</a>
                </div>
            </div>
        </div>
    </section>
</footer>
</body>
</html>