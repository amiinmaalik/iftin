<?php
/**
 * Title: Feature Card Glow
 * Slug: iftin/feature-card-glow
 * Description: A glowing feature card section highlighting a product or service with headline, description, call-to-action button, and supporting visual image in a two-column layout.
 * Categories: iftin-heroes, iftin-features
 * Keywords: feature, card, hero section, analytics, blockchain, CTA, marketing block
 * Viewport Width: 1500
 * Inserter: true
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"40px","bottom":"40px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-top:40px;padding-bottom:40px"><!-- wp:group {"style":{"spacing":{"padding":{"top":"60px","bottom":"60px"}},"border":{"radius":{"topLeft":"12px","topRight":"12px","bottomLeft":"12px","bottomRight":"12px"},"width":"2px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-width:2px;border-top-left-radius:12px;border-top-right-radius:12px;border-bottom-left-radius:12px;border-bottom-right-radius:12px;padding-top:60px;padding-bottom:60px"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading -->
<h2 class="wp-block-heading">Next-Gen Blockchain Analytics</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Track whale movements, monitor gas fees, and predict market trends with our powerful built-in AI intelligence dashboard system.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Explore Analytics</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/analytics-glow.webp' ) ); ?>" alt="analytics-glow" /></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->