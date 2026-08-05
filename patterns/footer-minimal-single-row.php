<?php
/**
 * Title: Footer Minimal Single Row
 * Slug: iftin/footer-minimal-single-row
 * Description: A minimal single-row footer displaying dynamic copyright year, site name, and a short audit-style tagline, centered for clean branding.
 * Categories: iftin-footers,
 * Keywords: footer, copyright, minimal footer, branding, site info, legal
 * Viewport Width: 1500
 * Inserter: true
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","bottom":"30px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:30px;padding-bottom:30px"><!-- wp:paragraph {"style":{"typography":{"textAlign":"center","fontSize":"14px"}}} -->
<p class="has-text-align-center" style="font-size:14px">
© <?php echo esc_html( wp_date( 'Y' ) ); ?> <?php echo esc_html( get_bloginfo( 'name' ) ); ?>. Audited Protocol Layer.
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->