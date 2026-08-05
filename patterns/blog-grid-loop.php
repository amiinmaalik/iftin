<?php
/**
 * Title: Blog Grid Loop
 * Slug: iftin/blog-grid-loop
 * Description: A responsive blog grid layout showcasing latest blockchain insights and articles with images, titles, and excerpts in a three-column structure.
 * Categories: iftin-heroes, iftin-stats, iftin-blog
 * Keywords: blog, grid, articles, blockchain, news, insights, posts, web3 content
 * Viewport Width: 1500
 * Inserter: true
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"40px","bottom":"40px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-top:40px;padding-bottom:40px"><!-- wp:heading {"style":{"typography":{"fontSize":"42px"},"spacing":{"margin":{"bottom":"48px"}}}} -->
<h2 class="wp-block-heading" style="margin-bottom:48px;font-size:42px">Latest Blockchain Insights</h2>
<!-- /wp:heading -->

<!-- wp:columns {"verticalAlignment":"top","style":{"spacing":{"blockGap":{"left":"32px"},"padding":{"top":"1px","bottom":"1px"}}}} -->
<div class="wp-block-columns are-vertically-aligned-top" style="padding-top:1px;padding-bottom:1px"><!-- wp:column {"verticalAlignment":"top","style":{"spacing":{"blockGap":"32px"}}} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":{"topLeft":"12px","topRight":"12px","bottomLeft":"12px","bottomRight":"12px"}}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/blog-1.webp' ) ); ?>" alt=" blog-1="" style="border-top-left-radius:12px;border-top-right-radius:12px;border-bottom-left-radius:12px;border-bottom-right-radius:12px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"24px"},"spacing":{"margin":{"top":"20px"}}}} -->
<h3 class="wp-block-heading" style="margin-top:20px;font-size:24px">The Rise of Layer-2 Scaling Solutions</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"16px"}}} -->
<p style="font-size:16px">Explore how Ethereum layer-2 protocols are reducing gas fees and boosting transaction speed for global dApps.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top"} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/blog-2.webp' ) ); ?>" alt="" blog-2=""/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"24px"},"spacing":{"margin":{"top":"20px"}}}} -->
<h3 class="wp-block-heading" style="margin-top:20px;font-size:24px">Advanced Smart Contract Auditing Protocols</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"16px"}}} -->
<p style="font-size:16px">Security is foundational for decentralized applications. Learn the critical compilation frameworks to secure Web3 consensus engines.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top"} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/blog-3.webp' ) ); ?>" alt="" blog-3=""/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"24px"},"spacing":{"margin":{"top":"20px"}}}} -->
<h3 class="wp-block-heading" style="margin-top:20px;font-size:24px">Institutional Capital in DeFi Networks</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"16px"}}} -->
<p style="font-size:16px">An in-depth analysis of how decentralized finance protocols are capturing traditional finance liquidity pools.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->