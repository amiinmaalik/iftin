<?php
/**
 * Title: Post Loop Grid
 * Slug: iftin/post-loop-grid
 * Description: A reusable blog post grid layout used across archive, search, and index pages, featuring featured image, category meta, date, title, and excerpt in a responsive grid system.
 * Categories: iftin-blog, iftin-posts
 * Keywords: blog, posts, grid, archive, news, articles, loop, query
 * Viewport Width: 1500
 * Inserter: false
 */
?>

<!-- wp:query {"query":{"inherit":true},"layout":{"type":"default"}} -->
<div class="wp-block-query">

	<!-- wp:post-template {"layout":{"type":"grid","columnCount":2}} -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"16px","padding":{"bottom":"24px"}}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">

			<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9"} /-->

			<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"left"},"style":{"spacing":{"blockGap":"12px"}}} -->
			<div class="wp-block-group">

				<!-- wp:post-terms {"term":"category","fontSize":"small"} /-->

				<!-- wp:post-date {"fontSize":"small"} /-->

			</div>
			<!-- /wp:group -->

			<!-- wp:post-title {"isLink":true,"level":3} /-->

			<!-- wp:post-excerpt {"moreText":"Read More"} /-->

		</div>
		<!-- /wp:group -->

	<!-- /wp:post-template -->

	<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"center"}} -->
		<!-- wp:query-pagination-previous /-->
		<!-- wp:query-pagination-numbers /-->
		<!-- wp:query-pagination-next /-->
	<!-- /wp:query-pagination -->

	<!-- wp:query-no-results -->
		<!-- wp:paragraph -->
		<p>No posts found.</p>
		<!-- /wp:paragraph -->
	<!-- /wp:query-no-results -->

</div>
<!-- /wp:query -->