<?php

/*
Template Name: Home Page
*/

/**
 * The template for displaying Shop Page
 *
 * This is the template that displays shop page by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package essence
 */

get_header();
?>

<!-- ##### Welcome Area Start ##### -->
<?php
// Getting data from Customizer to display the Hero section
$hero_section_page = get_theme_mod('set_hero_section');
$hero_section_button_text = get_theme_mod('set_button_hero_section');
$hero_section_button_url = get_theme_mod('set_button_url_hero_section');
?>
<section class="welcome_area bg-img background-overlay" style="background-image: url(<?php echo get_the_post_thumbnail_url($hero_section_page, 'essence-hero-section'); ?>);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="hero-content">
                    <h2><?php echo get_the_title($hero_section_page); ?></h2>
                    <a href="<?php echo $hero_section_button_url; ?>" class="btn essence-btn"><?php echo $hero_section_button_text; ?></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ##### Welcome Area End ##### -->

<!-- ##### Top Catagory Area Start ##### -->
<div class="top_catagory_area section-padding-80 clearfix">
    <div class="container">
        <div class="row justify-content-center">
            <?php
            function product_category_image($term_slug)
            {
                $taxonomy     = 'product_cat';
                $term_id      = get_term_by('slug', $term_slug, $taxonomy)->term_id;
                $thumbnail_id = get_woocommerce_term_meta($term_id, 'thumbnail_id', true);
                $image        = wp_get_attachment_url($thumbnail_id);
                return $image;
            }

            function product_category_url($term_slug)
            {
                $taxonomy     = 'product_cat';
                $term_id      = get_term_by('slug', $term_slug, $taxonomy)->term_id;
                $link = get_term_link($term_id, $taxonomy);
                return $link;
            }
            ?>
            <!-- Single Catagory -->
            <div class="col-12 col-sm-6 col-md-4">
                <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img" style="background-image: url(<?php echo product_category_image('clothing'); ?>);">
                    <div class="catagory-content">
                        <a href="<?php echo product_category_url('clothing'); ?>">Clothing</a>
                    </div>
                </div>
            </div>
            <!-- Single Catagory -->
            <div class="col-12 col-sm-6 col-md-4">
                <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img" style="background-image: url(<?php echo product_category_image('shoes'); ?>);">
                    <div class="catagory-content">
                        <a href="<?php echo product_category_url('shoes'); ?>">Shoes</a>
                    </div>
                </div>
            </div>
            <!-- Single Catagory -->
            <div class="col-12 col-sm-6 col-md-4">
                <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img" style="background-image: url(<?php echo product_category_image('accessories'); ?>);">
                    <div class="catagory-content">
                        <a href="<?php echo product_category_url('accessories'); ?>">Accessories</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Top Catagory Area End ##### -->

<?php

// Getting data from Customizer to display the Deal of the Week section
$showdeal = get_theme_mod('set_deal_show', 0);
$deal = get_theme_mod('set_deal');
$currency = get_woocommerce_currency_symbol();
$regular = get_post_meta($deal, '_regular_price', true);
$sale = get_post_meta($deal, '_sale_price', true);

// We'll only show this section if the user chooses to do so and if some deal product is set
if ($showdeal == 1 && (!empty($deal))) :
    $discount_percentage     = absint(100 - (($sale / $regular) * 100));
?>

    <!-- ##### CTA Area Start ##### -->
    <div class="cta-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-6">
                            <div class="cta-content bg-img background-overlay" style="background-image: url(<?php echo get_the_post_thumbnail_url($deal, 'large'); ?>);"></div>
                        </div>
                        <div class="col-6">
                            <div class="h-100 d-flex align-items-center justify-content-end">
                                <div class="cta--text">
                                    <?php if (!empty($sale)) : ?>
                                        <h6 class="special-deal-discount"><?php echo esc_html($discount_percentage); ?><?php esc_html_e('% OFF', 'essence') ?></h6>
                                    <?php endif; ?>
                                    <h2 class="special-deal-title"><?php echo esc_html(get_the_title($deal)); ?></h2>
                                    <div class="prices">
                                        <span class="regular">
                                            <?php
                                            echo esc_html($currency);
                                            echo esc_html($regular);
                                            ?>
                                        </span>
                                        <?php if (!empty($sale)) : ?>
                                            <span class="sale">
                                                <?php
                                                echo esc_html($currency);
                                                echo esc_html($sale);
                                                ?>
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                    <a href="<?php echo esc_url('?add-to-cart=' . $deal); ?>" class="btn essence-btn"><?php esc_html_e('Buy Now', 'essence'); ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
<!-- ##### CTA Area End ##### -->

<!-- ##### New Arrivals Area Start ##### -->
<section class="new_arrivals_area section-padding-80 clearfix">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading text-center">
                    <h2><?php echo esc_html(get_theme_mod('set_popular_title', __('Popular products', 'essence'))); ?></h2>
                </div>
            </div>
        </div>
    </div>
    <?php
    // Getting data from Customizer to display the Popular Products section
    $popular_limit         = get_theme_mod('set_popular_max_num', 4);
    $popular_col         = get_theme_mod('set_popular_max_col', 4);
    $arrivals_limit     = get_theme_mod('set_new_arrivals_max_num', 4);
    $arrivals_col         = get_theme_mod('set_new_arrivals_max_col', 4);
    ?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php echo do_shortcode('[products limit=" ' . esc_attr($popular_limit) . ' " columns=" ' . esc_attr($popular_col) . ' " orderby="popularity" ]'); ?>
            </div>
        </div>
    </div>
</section>
<!-- ##### New Arrivals Area End ##### -->

<!-- ##### Brands Area Start ##### -->
<div class="brands-area d-flex align-items-center justify-content-between">
    <!-- Brand Logo -->
    <div class="single-brands-logo">
        <img src="<?php echo get_template_directory_uri(); ?>/img/core-img/brand1.png" alt="">
    </div>
    <!-- Brand Logo -->
    <div class="single-brands-logo">
        <img src="<?php echo get_template_directory_uri(); ?>/img/core-img/brand2.png" alt="">
    </div>
    <!-- Brand Logo -->
    <div class="single-brands-logo">
        <img src="<?php echo get_template_directory_uri(); ?>/img/core-img/brand3.png" alt="">
    </div>
    <!-- Brand Logo -->
    <div class="single-brands-logo">
        <img src="<?php echo get_template_directory_uri(); ?>/img/core-img/brand4.png" alt="">
    </div>
    <!-- Brand Logo -->
    <div class="single-brands-logo">
        <img src="<?php echo get_template_directory_uri(); ?>/img/core-img/brand5.png" alt="">
    </div>
    <!-- Brand Logo -->
    <div class="single-brands-logo">
        <img src="<?php echo get_template_directory_uri(); ?>/img/core-img/brand6.png" alt="">
    </div>
</div>
<!-- ##### Brands Area End ##### -->

<?php get_footer(); ?>