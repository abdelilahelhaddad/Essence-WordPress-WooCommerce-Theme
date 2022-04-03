<?php

/**
 * Displays the shop widget area.
 *
 * @package WordPress
 */

if (is_active_sidebar('essence-shop-sidebar')) : ?>
    <?php dynamic_sidebar('essence-shop-sidebar'); ?>
<?php endif; ?>