<?php
/**
 * Title: Crypto Ticker Bar
 * Slug: iftin/crypto-ticker-bar
 * Description: A horizontal crypto market ticker bar displaying live-style price movements for major trading pairs like BTC, ETH, and SOL with real-time percentage indicators.
 * Categories: iftin-heroes,
 * Keywords: crypto, ticker, bitcoin, ethereum, solana, market prices, trading, live data
 * Viewport Width: 1500
 * Inserter: true
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"40px","bottom":"40px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-top:40px;padding-bottom:40px"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"sizeSlug":"thumbnail","linkDestination":"none","className":"is-style-default","style":{"layout":{"selfStretch":"fixed","flexSize":"32px"}}} -->
<figure class="wp-block-image size-thumbnail is-style-default"><img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/btc.webp' ) ); ?>" alt=" btc=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p><strong>BTC/USDT<mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-links-color"> </mark><mark style="background-color:rgba(0, 0, 0, 0);color:#00ffb9" class="has-inline-color">+4.2%</mark></strong></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"sizeSlug":"thumbnail","linkDestination":"none","style":{"layout":{"selfStretch":"fixed","flexSize":"32px"}}} -->
<figure class="wp-block-image size-thumbnail"><img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/eth.webp' ) ); ?>" alt="" eth=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p><strong>ETH/USDT <mark style="background-color:rgba(0, 0, 0, 0);color:#00ffb9" class="has-inline-color">+2.8%</mark></strong></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"sizeSlug":"thumbnail","linkDestination":"none","style":{"layout":{"selfStretch":"fixed","flexSize":"32px"}}} -->
<figure class="wp-block-image size-thumbnail"><img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/sol.webp' ) ); ?>" alt="" sol=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p><strong>SOL/USDT <mark style="background-color:rgba(0, 0, 0, 0);color:#ff0101" class="has-inline-color">-1.1%</mark></strong></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->