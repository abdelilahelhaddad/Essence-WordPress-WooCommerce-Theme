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
