<?php
/**
 * Title: Web3 Site Header Navigation
 * Slug: iftin/web3-site-header-navigation
 * Description: Main site header for Iftin Theme.
 * Categories: iftin-headers
 * Keywords: header, navigation, web3
 * Viewport Width: 1500
 * Block Types: core/template-part/header
 * Post Types: wp_template
 * Inserter: true
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium)">

	<!-- wp:group {"layout":{"type":"default"}} -->
	<div class="wp-block-group">

		<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
		<div class="wp-block-group">

			<!-- wp:site-title {"style":{"layout":{"selfStretch":"fit","flexSize":null},"typography":{"fontSize":"24px"}}} /-->

			<!-- wp:navigation {"overlayMenu":"mobile","layout":{"type":"flex","justifyContent":"center"}} /-->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">

				<!-- wp:button {"style":{"border":{"radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}}}} -->
				<div class="wp-block-button">
					<a class="wp-block-button__link wp-element-button" style="border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px">
						Launch App
					</a>
				</div>
				<!-- /wp:button -->

			</div>
			<!-- /wp:buttons -->

		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->