<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package essence
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'essence'); ?></a>

        <!-- ##### Header Area Start ##### -->
        <header class="header_area <?php echo (is_admin_bar_showing()) ? 'mt-3' : ''; ?>">
            <div class="classy-nav-container breakpoint-off d-flex align-items-center justify-content-between">
                <!-- Classy Menu -->

                <nav class="navbar navbar-expand-md navbar-light" role="navigation">
                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'your-theme-slug'); ?>">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
                            <?php
                            if (has_custom_logo()) :
                                the_custom_logo();
                            else :
                            ?>
                                <p class="site-title"><?php bloginfo('title'); ?></p>
                                <span><?php bloginfo('description'); ?></span>
                            <?php endif; ?>
                        </a>
                        <?php
                        wp_nav_menu(array(
                            'theme_location'    => 'essence_main_menu',
                            'depth'             => 2,
                            'container'         => 'div',
                            'container_class'   => 'collapse navbar-collapse',
                            'container_id'      => 'bs-example-navbar-collapse-1',
                            'menu_class'        => 'nav navbar-nav',
                            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                            'walker'            => new WP_Bootstrap_Navwalker(),
                        ));
                        ?>
                    </div>
                </nav>

                <!-- Header Meta Data -->
                <div class="header-meta d-flex clearfix justify-content-end">
                    <!-- Search Area -->
                    <div class="search-area">
                        <?php get_search_form(); ?>
                    </div>
                    <!-- Favourite Area -->
                    <?php if (class_exists('WooCommerce')) : ?>
                        <div class="favourite-area">
                            <?php if (is_user_logged_in()) : ?>
                                <a href="<?php echo esc_url(home_url('/wishlist')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/core-img/heart.svg" alt=""></a>
                            <?php else : ?>

                            <?php endif; ?>
                        </div>
                        <!-- User Login Info -->
                        <div class="user-login-info">
                            <?php if (is_user_logged_in()) : ?>
                                <a href="<?php echo esc_url(get_permalink(get_option('woocommerce_myaccount_page_id'))); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/core-img/user.svg" alt=""></a>
                            <?php else : ?>
                                <a href="<?php echo esc_url(get_permalink(get_option('woocommerce_myaccount_page_id'))); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/core-img/user.svg" alt=""></a>
                            <?php endif; ?>
                        </div>
                        <!-- Cart Area -->
                        <div class="cart-area">
                            <a href="<?php echo esc_url(wc_get_cart_url()); ?>" id="essenceCartBtn"><img src="<?php echo get_template_directory_uri(); ?>/img/core-img/bag.svg" alt=""> <span class="cart-item" ><?php echo esc_html(WC()->cart->get_cart_contents_count()); ?></span></a>
                        </div>
                    <?php endif; ?>
                </div>

            </div>
        </header>
        <!-- ##### Header Area End ##### -->