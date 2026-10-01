<?php
/**
 * Title: Search Banner
 * Slug: filmmaker-production-studio/banner-search
 * Categories: banner, filmmaker-production-studio
 * Description: Letterboxed page banner over a night cinema still, carrying the search marker, the results title and a search field.
 */
$fps_dir = get_template_directory_uri();
?>
<!-- wp:cover {"url":"<?php echo esc_url( $fps_dir ); ?>/assets/images/banner/banner-main.webp","dimRatio":70,"customOverlayColor":"#0a0908","isUserOverlayColor":true,"isDark":true,"sizeSlug":"full","align":"full","metadata":{"patternName":"filmmaker-production-studio/banner-search","name":"Search Banner","description":"Letterboxed page banner over a night cinema still, carrying the search marker, the results title and a search field.","categories":["banner","filmmaker-production-studio"]},"className":"fps-page-banner fps-banner-search","style":{"spacing":{"padding":{"top":"clamp(96px, 9vw, 150px)","bottom":"clamp(48px, 5vw, 72px)","left":"var(--fps-gutter)","right":"var(--fps-gutter)"},"margin":{"top":"0","bottom":"0"},"blockGap":"14px"}},"layout":{"type":"constrained","contentSize":"1320px"}} -->
<div class="wp-block-cover alignfull fps-page-banner fps-banner-search" style="margin-top:0;margin-bottom:0;padding-top:clamp(96px, 9vw, 150px);padding-right:var(--fps-gutter);padding-bottom:clamp(48px, 5vw, 72px);padding-left:var(--fps-gutter)"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-70 has-background-dim" style="background-color:#0a0908"></span><img class="wp-block-cover__image-background" src="<?php echo esc_url( $fps_dir ); ?>/assets/images/banner/banner-main.webp" alt="" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"fps-banner-inner","style":{"spacing":{"blockGap":"18px","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1320px","justifyContent":"left"}} -->
<div class="wp-block-group fps-banner-inner" style="margin-top:0;margin-bottom:0"><!-- wp:group {"className":"fps-markerline","style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group fps-markerline"><!-- wp:paragraph {"className":"fps-marker","fontSize":"marker"} -->
<p class="fps-marker has-marker-font-size"><?php esc_html_e( 'looking for something.', 'filmmaker-production-studio' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"fps-marker-sub","fontSize":"label"} -->
<p class="fps-marker-sub has-label-font-size"><?php esc_html_e( 'search results', 'filmmaker-production-studio' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query-title {"type":"search","fontSize":"h2","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} /-->

<!-- wp:search {"label":"<?php esc_attr_e( 'Search', 'filmmaker-production-studio' ); ?>","showLabel":false,"placeholder":"<?php esc_attr_e( 'Search the studio…', 'filmmaker-production-studio' ); ?>","width":460,"widthUnit":"px","buttonText":"<?php esc_attr_e( 'Search', 'filmmaker-production-studio' ); ?>","className":"fps-search-field","style":{"spacing":{"margin":{"top":"22px"}}}} /-->
</div>
<!-- /wp:group -->
</div></div>
<!-- /wp:cover -->
