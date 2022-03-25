<?php

/**
 * The searchform.php template.
 *
 * Used any time that get_search_form() is called.
 *
 * @link https://developer.wordpress.org/reference/functions/wp_unique_id/
 * @link https://developer.wordpress.org/reference/functions/get_search_form/
 *
 * @package Essence
 */

/*
 * Generate a unique ID for each form and a string containing an aria-label
 * if one was passed to get_search_form() in the args array.
 */
$essence_unique_id = wp_unique_id('search-form-');

$essence_aria_label = !empty($args['aria_label']) ? 'aria-label="' . esc_attr($args['aria_label']) . '"' : '';
?>
<form role="search" <?php echo $essence_aria_label; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Escaped above. 
                    ?> method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
  <label for="<?php echo esc_attr($essence_unique_id); ?>"></label>
  <input type="search" id="<?php echo esc_attr($essence_unique_id); ?>" class="search-field" value="<?php echo get_search_query(); ?>" id="headerSearch" name="s" />
  <button aria-hidden="true" type="submit" class="search-submit" value="<?php echo esc_attr_x('Search', 'submit button', 'essence'); ?>"><i class="fa fa-search" aria-hidden="true"></i></button>
  <?php if (class_exists('WooCommerce')) : ?>
    <input type="hidden" value="product" name="post_type" id="post_type">
  <?php endif; ?>
</form>