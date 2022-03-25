<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package essence
 */

?>

<!-- ##### Footer Area Start ##### -->
<footer class="footer_area clearfix">
    <div class="container">
        <div class="row">
            <!-- Single Widget Area -->
            <div class="col-12 col-md-6">
                <div class="single_widget_area d-flex mb-30">
                    <!-- Logo -->
                    <div class="footer-logo mr-50">
                        <a href="#"><img src="img/core-img/logo2.png" alt=""></a>
                    </div>
                    <!-- Footer Menu -->
                    <div class="footer_menu">
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location'     => 'essence_footer_menu'
                            )
                        );
                        ?>
                    </div>
                </div>
            </div>
            <!-- Single Widget Area -->
            <div class="col-12 col-md-6">
                <div class="single_widget_area mb-30">
                    <?php if (is_active_sidebar('essence-sidebar-footer')) : ?>
                        <?php dynamic_sidebar('essence-sidebar-footer'); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <div class="row align-items-center">
            <!-- Single Widget Area -->
            <div class="col-12 col-md-6">
                <div class="single_widget_area">
                    <div class="footer_heading mb-30">
                        <h6>Subscribe</h6>
                    </div>
                    <div class="subscribtion_form">
                        <?php if (is_active_sidebar('essence-widget-footer')) : ?>
                            <?php dynamic_sidebar('essence-widget-footer'); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <!-- Single Widget Area -->
            <div class="col-12 col-md-6">
                <div class="single_widget_area">
                    <div class="footer_social_area">
                        <a href="<?php echo get_theme_mod('set_facebook', '#'); ?>" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="<?php echo get_theme_mod('set_instagram', '#'); ?>" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a href="<?php echo get_theme_mod('set_twitter', '#'); ?>" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="<?php echo get_theme_mod('set_pinterest', '#'); ?>" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                        <a href="<?php echo get_theme_mod('set_youtube', '#'); ?>" data-toggle="tooltip" data-placement="top" title="Youtube"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-12 text-center">
                <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | Made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>, distributed by <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
                <p class="text-center">
                    <?php
                    /* translators: 1: Theme name, 2: Theme author. */
                    printf(esc_html__('Theme By: %1$s by %2$s.', 'essence'), 'essence', '<a href="http://abdelilahelhaddad.com">Abdelilah Elhaddad</a>');
                    ?>
                </p>
            </div>
        </div>

    </div>
</footer>
<!-- ##### Footer Area End ##### -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>