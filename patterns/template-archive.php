<?php
/**
 * Title: Archive Page
 * Slug: iftin/template-archive
 * Description: Displays archive pages.
 * Template Types: archive
 * Categories: iftin-pages
 * Inserter: false
 */
?>

<!-- wp:template-part {"slug":"header"} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","bottom":"30px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:30px;padding-bottom:30px">

	<!-- wp:query-title {"type":"archive","level":1} /-->

	<!-- wp:term-description /-->

</div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"iftin/post-loop-grid"} /-->

<!-- wp:template-part {"slug":"footer"} /-->