<?php
/**
 * Title: home
 * Slug: daniloparrajr-theme/home
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","metadata":{"name":"Main"},"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group"><!-- wp:columns {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|fluid-800","bottom":"var:preset|spacing|fluid-800"}}}} -->
<div class="wp-block-columns alignwide" style="padding-top:var(--wp--preset--spacing--fluid-800);padding-bottom:var(--wp--preset--spacing--fluid-800)"><!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|600"}}} -->
<div class="wp-block-column"><!-- wp:heading {"level":1,"fontSize":"display"} -->
<h1 class="wp-block-heading has-display-font-size"><?php esc_html_e('Journal', 'daniloparrajr-theme');?></h1>
<!-- /wp:heading -->

<!-- wp:group {"layout":{"type":"constrained","contentSize":"530px","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><?php esc_html_e('I love to write about my design and creation process whenever i get a chance. I post new content every week.', 'daniloparrajr-theme');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|300"}}} -->
<div class="wp-block-column"><!-- wp:heading {"fontSize":"text-5"} -->
<h2 class="wp-block-heading has-text-5-font-size"><?php esc_html_e('Categories', 'daniloparrajr-theme');?></h2>
<!-- /wp:heading -->

<!-- wp:categories {"showOnlyTopLevel":true,"className":"is-style-columns"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"metadata":{"name":"Posts"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|fluid-800","bottom":"var:preset|spacing|fluid-800"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--fluid-800);padding-bottom:var(--wp--preset--spacing--fluid-800)"><!-- wp:query {"queryId":0,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[]},"align":"wide","layout":{"contentSize":null,"type":"constrained"}} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide","className":"archive-loop","style":{"spacing":{"blockGap":"var:preset|spacing|fluid-200"}},"layout":{"type":"grid","columnCount":null,"minimumColumnWidth":"20rem"}} -->
<!-- wp:group {"metadata":{"name":"Post"}} -->
<div class="wp-block-group"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","sizeSlug":"large","style":{"border":{"radius":{"topLeft":"15px","topRight":"15px","bottomLeft":"15px","bottomRight":"15px"}}}} /-->

<!-- wp:group {"metadata":{"name":"Meta"},"style":{"spacing":{"blockGap":"var:preset|spacing|100"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-date {"datetime":"2026-04-04T04:58:19.914Z"} /-->

<!-- wp:post-title {"isLink":true,"fontSize":"headline-6"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|fluid-800"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--fluid-800)"><!-- wp:query-pagination {"align":"wide","layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:group --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->