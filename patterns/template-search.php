<?php
/**
 * Title: Search Results
 * Slug: iftin/template-search
 * Description: Displays search results.
 * Template Types: search
 * Categories: iftin-pages
 * Inserter: false
 */
?>

<!-- wp:template-part {"slug":"header"} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","bottom":"30px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:30px;padding-bottom:30px">

	<!-- wp:query-title {"type":"search","level":1} /-->

	<!-- wp:search {"showLabel":false,"placeholder":"Search..."} /-->

</div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"iftin/post-loop-grid"} /-->

<!-- wp:template-part {"slug":"footer"} /-->