<?php
/**
 * Title: Posts Grid
 * Slug: filmmaker-production-studio/posts-grid
 * Categories: posts, filmmaker-production-studio
 * Inserter: no
 * Description: Three column query loop of journal cards with a no-results message and hairline pagination.
 */
?>
<!-- wp:query {"queryId":8,"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"metadata":{"categories":["posts"],"patternName":"filmmaker-production-studio/posts-grid","name":"Posts Grid"},"className":"fps-posts","layout":{"type":"default"}} -->
<div class="wp-block-query fps-posts"><!-- wp:post-template {"style":{"spacing":{"blockGap":"clamp(20px, 2.2vw, 34px)","margin":{"bottom":"clamp(48px, 5vw, 76px)"}}},"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/11","className":"fps-post-thumb"} /-->

<!-- wp:group {"className":"fps-post-card","style":{"spacing":{"blockGap":"11px","margin":{"top":"20px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group fps-post-card" style="margin-top:20px"><!-- wp:group {"className":"fps-post-meta","style":{"spacing":{"blockGap":"14px"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group fps-post-meta"><!-- wp:post-terms {"term":"category","fontSize":"label-xs","fontFamily":"dm-mono"} /-->

<!-- wp:post-date {"format":"j F Y","fontSize":"label"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":2,"isLink":true,"style":{"typography":{"fontSize":"clamp(18px, 1.5vw, 22px)"}}} /-->

<!-- wp:post-excerpt {"moreText":"","excerptLength":22,"className":"fps-post-excerpt"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"className":"fps-pagination","style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"align":"center","className":"fps-lede","fontSize":"lead"} -->
<p class="has-text-align-center fps-lede has-lead-font-size"><?php esc_html_e( 'Nothing in the can for that one. Try another search, or head back to the journal.', 'filmmaker-production-studio' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"<?php esc_attr_e( 'Search', 'filmmaker-production-studio' ); ?>","showLabel":false,"placeholder":"<?php esc_attr_e( 'Search the studio…', 'filmmaker-production-studio' ); ?>","width":100,"widthUnit":"%","buttonText":"<?php esc_attr_e( 'Search', 'filmmaker-production-studio' ); ?>","className":"fps-search-field","style":{"spacing":{"margin":{"top":"24px"}}}} /-->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->
