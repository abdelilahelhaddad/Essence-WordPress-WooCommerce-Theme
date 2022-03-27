<?php

/**
 * WooCommerce Compatibility File
 *
 * @link https://woocommerce.com/
 *
 * @package essence
 */

/** 
 * Modify WooCommerce opening and closing HTML tags
 * We need Bootstrap-like opening/closing HTML tags
 */
add_action('woocommerce_before_main_content', 'essence_open_container_row', 5);
function essence_open_container_row()
{
?>
	<div class="container shop-content">
		<div class="row">
		<?php
	}
	add_action('woocommerce_after_main_content', 'essence_close_container_row', 5);
	function essence_close_container_row()
	{
		?>
		</div>
	</div>
	<?php
	}

	/** 
	 * Remove the main WC sidebar from its original position
	 * We'll be including it somewhere else later on
	 */
	remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar');

	// WooCommerce main sidebar will display only on Shop pages
	if (is_shop()) {

		add_action('woocommerce_before_main_content', 'essence_add_sidebar_tags', 6);
		function essence_add_sidebar_tags()
		{
	?>
		<div class="sidebar-shop col-lg-3 col-md-4 order-2 order-md-1">
		<?php
		}
		// Put the main WC sidebar back, but using other action hook and on a different position
		add_action('woocommerce_before_main_content', 'woocommerce_get_sidebar', 7);

		add_action('woocommerce_before_main_content', 'essence_close_sidebar_tags', 8);
		function essence_close_sidebar_tags()
		{
		?>
		</div>
<?php
		}
	}
