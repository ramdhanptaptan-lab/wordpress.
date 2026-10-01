<?php
/**
 * Title: Single Post Banner
 * Slug: filmmaker-production-studio/banner-single
 * Categories: banner, filmmaker-production-studio
 * Description: Letterboxed post banner over a night cinema still, carrying the journal marker, the post title, category, date and author.
 */
$fps_dir = get_template_directory_uri();
?>
<!-- wp:cover {"url":"<?php echo esc_url( $fps_dir ); ?>/assets/images/banner/banner-main.webp","dimRatio":70,"customOverlayColor":"#0a0908","isUserOverlayColor":true,"isDark":true,"sizeSlug":"full","align":"full","metadata":{"patternName":"filmmaker-production-studio/banner-single","name":"Single Post Banner","description":"Letterboxed post banner over a night cinema still, carrying the journal marker, the post title, category, date and author.","categories":["banner","filmmaker-production-studio"]},"className":"fps-page-banner fps-banner-single","style":{"spacing":{"padding":{"top":"clamp(96px, 9vw, 150px)","bottom":"clamp(48px, 5vw, 72px)","left":"var(--fps-gutter)","right":"var(--fps-gutter)"},"margin":{"top":"0","bottom":"0"},"blockGap":"14px"}},"layout":{"type":"constrained","contentSize":"1320px"}} -->
<div class="wp-block-cover alignfull fps-page-banner fps-banner-single" style="margin-top:0;margin-bottom:0;padding-top:clamp(96px, 9vw, 150px);padding-right:var(--fps-gutter);padding-bottom:clamp(48px, 5vw, 72px);padding-left:var(--fps-gutter)"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-70 has-background-dim" style="background-color:#0a0908"></span><img class="wp-block-cover__image-background" src="<?php echo esc_url( $fps_dir ); ?>/assets/images/banner/banner-main.webp" alt="" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"fps-banner-inner","style":{"spacing":{"blockGap":"18px","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1320px","justifyContent":"left"}} -->
<div class="wp-block-group fps-banner-inner" style="margin-top:0;margin-bottom:0"><!-- wp:group {"className":"fps-markerline","style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group fps-markerline"><!-- wp:paragraph {"className":"fps-marker","fontSize":"marker"} -->
<p class="fps-marker has-marker-font-size"><?php esc_html_e( 'from the cutting room.', 'filmmaker-production-studio' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"fps-marker-sub","fontSize":"label"} -->
<p class="fps-marker-sub has-label-font-size"><?php esc_html_e( 'field report', 'filmmaker-production-studio' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":1,"fontSize":"h2","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} /-->

<!-- wp:group {"className":"fps-banner-meta","style":{"spacing":{"blockGap":"14px","margin":{"top":"18px"}}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group fps-banner-meta" style="margin-top:18px"><!-- wp:post-terms {"term":"category","fontSize":"label-xs","fontFamily":"dm-mono"} /-->

<!-- wp:post-date {"format":"j F Y","fontSize":"label"} /-->

<!-- wp:post-author-name {"isLink":false,"fontSize":"label"} /--></div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div></div>
<!-- /wp:cover -->
