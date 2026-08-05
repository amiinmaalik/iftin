<?php
/**
 * Title: Testimonials Grid
 * Slug: iftin/testimonials-grid
 * Description: Two-column testimonial section featuring customer feedback and profile information.
 * Categories: iftin-testimonials
 * Keywords: testimonials, reviews, founders, feedback
 * Viewport Width: 1500
 * Inserter: true
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"40px","bottom":"40px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-top:40px;padding-bottom:40px"><!-- wp:heading {"style":{"typography":{"textAlign":"center"}}} -->
<h2 class="wp-block-heading has-text-align-center">What Founders Say</h2>
<!-- /wp:heading -->

<!-- wp:columns {"verticalAlignment":null,"style":{"spacing":{"padding":{"top":"40px"}}}} -->
<div class="wp-block-columns" style="padding-top:40px"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:columns {"verticalAlignment":"center","style":{"border":{"radius":{"topLeft":"8px","topRight":"8px","bottomLeft":"8px","bottomRight":"8px"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center" style="border-top-left-radius:8px;border-top-right-radius:8px;border-bottom-left-radius:8px;border-bottom-right-radius:8px"><!-- wp:column {"verticalAlignment":"center","style":{"border":{"radius":{"topLeft":"12px","topRight":"12px","bottomLeft":"12px","bottomRight":"12px"}},"spacing":{"padding":{"right":"20px","left":"20px","top":"20px","bottom":"20px"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="border-top-left-radius:12px;border-top-right-radius:12px;border-bottom-left-radius:12px;border-bottom-right-radius:12px;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|medium"}}}} -->
<p style="margin-bottom:var(--wp--preset--spacing--medium)"><em>"Iftin theme allowed us to spin up our Web3 token platform sales dashboard inside an evening. Insanely clean code execution!"</em></p>
<!-- /wp:paragraph -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"layout":{"selfStretch":"fixed","flexSize":"40px"}}} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/user-1.webp' ) ); ?>" alt="user-1" /></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p><strong>Moha Farah</strong>, CEO of CryptX</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|medium"}}}} -->
<p style="margin-bottom:var(--wp--preset--spacing--medium)">"The block structural FSE system gives total autonomy back to companies over layout deployments without bloatware software."</p>
<!-- /wp:paragraph -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"layout":{"selfStretch":"fixed","flexSize":"40px"}}} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/user-2.webp' ) ); ?>" alt="user-2" /></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p><strong>Safiya Abdiaziz</strong>., DevOps Lead</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->