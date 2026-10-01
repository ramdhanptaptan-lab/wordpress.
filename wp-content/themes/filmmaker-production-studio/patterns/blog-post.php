<?php
/**
 * Title: Journal
 * Slug: filmmaker-production-studio/blog-post
 * Categories: posts, filmmaker-production-studio
 * Keywords: journal, blog, posts, notes
 * Description: Cutting room journal with a section marker, a heading, a read-everything link and a three column query loop of recent posts.
 */
?>
<!-- wp:group {"metadata":{"patternName":"filmmaker-production-studio/blog-post","name":"Journal","description":"Cutting room journal with a section marker, a heading, a read-everything link and a three column query loop of recent posts.","categories":["posts","filmmaker-production-studio"]},"anchor":"journal","align":"full","className":"fps-journal","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"clamp(72px, 7.6vw, 146px)","bottom":"clamp(72px, 7.6vw, 146px)","left":"var(--fps-gutter)","right":"var(--fps-gutter)"},"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"1320px"}} -->
<div id="journal" class="wp-block-group alignfull fps-journal" style="margin-top:0;margin-bottom:0;padding-top:clamp(72px, 7.6vw, 146px);padding-right:var(--fps-gutter);padding-bottom:clamp(72px, 7.6vw, 146px);padding-left:var(--fps-gutter)"><!-- wp:group {"className":"fps-sec-head","style":{"spacing":{"blockGap":"36px","margin":{"bottom":"clamp(38px, 3.8vw, 58px)"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group fps-sec-head" style="margin-bottom:clamp(38px, 3.8vw, 58px)"><!-- wp:group {"className":"fps-sec-head-l","style":{"spacing":{"blockGap":"14px"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group fps-sec-head-l"><!-- wp:group {"className":"fps-markerline","style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group fps-markerline"><!-- wp:paragraph {"className":"fps-marker","fontSize":"marker"} -->
<p class="fps-marker has-marker-font-size"><?php esc_html_e( 'from the cutting room.', 'filmmaker-production-studio' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"fps-marker-sub","fontSize":"label"} -->
<p class="fps-marker-sub has-label-font-size"><?php esc_html_e( 'notes & field reports', 'filmmaker-production-studio' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"h2"} -->
<h2 class="wp-block-heading has-h-2-font-size" style="margin-top:0;margin-bottom:0"><?php esc_html_e( 'Things we learned the slow, expensive way', 'filmmaker-production-studio' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"fps-sec-head-link","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-buttons fps-sec-head-link"><!-- wp:button {"className":"is-style-fps-textlink"} -->
<div class="wp-block-button is-style-fps-textlink"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Read every note', 'filmmaker-production-studio' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":3,"query":{"perPage":3,"pages":1,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"fps-posts","layout":{"type":"default"}} -->
<div class="wp-block-query fps-posts"><!-- wp:post-template {"style":{"spacing":{"blockGap":"clamp(20px, 2.2vw, 34px)"}},"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/11","className":"fps-post-thumb"} /-->

<!-- wp:group {"className":"fps-post-card","style":{"spacing":{"blockGap":"11px","margin":{"top":"20px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group fps-post-card" style="margin-top:20px"><!-- wp:group {"className":"fps-post-meta","style":{"spacing":{"blockGap":"14px"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group fps-post-meta"><!-- wp:post-terms {"term":"category","fontSize":"label-xs","fontFamily":"dm-mono"} /-->

<!-- wp:post-date {"format":"j F Y","fontSize":"label"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":3,"isLink":true,"fontSize":"h4","style":{"typography":{"fontSize":"clamp(18px, 1.5vw, 22px)"}}} /-->

<!-- wp:post-excerpt {"moreText":"","excerptLength":22,"className":"fps-post-excerpt"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"className":"fps-body-sm","fontSize":"small"} -->
<p class="fps-body-sm has-small-font-size"><?php esc_html_e( 'No notes have been filed yet. The first field report will land here.', 'filmmaker-production-studio' ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->
