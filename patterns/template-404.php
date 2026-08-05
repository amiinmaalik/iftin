<?php
/**
 * Title: 404 Page
 * Slug: iftin/template-404
 * Description: Default 404 page for Iftin Theme.
 * Categories: iftin-utility
 * Inserter: false
 */
?>

<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","layout":{"type":"constrained"},"style":{"spacing":{"padding":{"top":"100px","bottom":"100px"}}}} -->
<main class="wp-block-group" style="padding-top:100px;padding-bottom:100px">

	<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"80px","fontWeight":"700"}}} -->
	<h1 class="wp-block-heading has-text-align-center" style="font-size:80px;font-weight:700;">404</h1>
	<!-- /wp:heading -->

	<!-- wp:heading {"textAlign":"center","level":3,"style":{"spacing":{"margin":{"top":"0","bottom":"1rem"}}}} -->
	<h3 class="wp-block-heading has-text-align-center">
		Security Boundary Breached
	</h3>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"2rem"}}}} -->
	<p class="has-text-align-center">
		The node or page you are trying to access does not exist or has been moved from the genesis block.
	</p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons">

		<!-- wp:button -->
		<div class="wp-block-button">
			<a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/' ) ); ?>">
				Go Home
			</a>
		</div>
		<!-- /wp:button -->

	</div>
	<!-- /wp:buttons -->

</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->