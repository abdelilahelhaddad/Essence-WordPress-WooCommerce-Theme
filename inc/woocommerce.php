<?php

/**
 * WooCommerce Compatibility File
 *
 * @link https://woocommerce.com/
 *
 * @package essence
 */


if (!function_exists('essence_woocommerce_wrapper_before')) {
	/**
	 * Before Content.
	 *
	 * Wraps all WooCommerce content in wrappers which match the theme markup.
	 *
	 * @return void
	 */
	function essence_woocommerce_wrapper_before()
	{
?>
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-6 col-md-9 order-1 order-md-2">
				<?php
			}
		}
		add_action('woocommerce_before_main_content', 'essence_woocommerce_wrapper_before');

		if (!function_exists('essence_woocommerce_wrapper_after')) {
			/**
			 * After Content.
			 *
			 * Closes the wrapping divs.
			 *
			 * @return void
			 */
			function essence_woocommerce_wrapper_after()
			{
				?>
				</div>
			</div>
		</div>
<?php
			}
		}
		add_action('woocommerce_after_main_content', 'essence_woocommerce_wrapper_after');

		remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar');
