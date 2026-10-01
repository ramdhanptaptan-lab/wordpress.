<?php
/**
 * Title: Archive Banner
 * Slug: filmmaker-production-studio/banner-archive
 * Categories: banner, filmmaker-production-studio
 * Description: Letterboxed page banner over a night cinema still, carrying the archive marker, the archive title and a breadcrumb line.
 */
$fps_dir = get_template_directory_uri();
?>
<!-- wp:cover {"url":"<?php echo esc_url( $fps_dir ); ?>/assets/images/banner/banner-main.webp","dimRatio":70,"customOverlayColor":"#0a0908","isUserOverlayColor":true,"isDark":true,"sizeSlug":"full","align":"full","metadata":{"patternName":"filmmaker-production-studio/banner-archive","name":"Archive Banner","description":"Letterboxed page banner over a night cinema still, carrying the archive marker, the archive title and a breadcrumb line.","categories":["banner","filmmaker-production-studio"]},"className":"fps-page-banner fps-banner-archive","style":{"spacing":{"padding":{"top":"clamp(96px, 9vw, 150px)","bottom":"clamp(48px, 5vw, 72px)","left":"var(--fps-gutter)","right":"var(--fps-gutter)"},"margin":{"top":"0","bottom":"0"},"blockGap":"14px"}},"layout":{"type":"constrained","contentSize":"1320px"}} -->
<div class="wp-block-cover alignfull fps-page-banner fps-banner-archive" style="margin-top:0;margin-bottom:0;padding-top:clamp(96px, 9vw, 150px);padding-right:var(--fps-gutter);padding-bottom:clamp(48px, 5vw, 72px);padding-left:var(--fps-gutter)"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-70 has-background-dim" style="background-color:#0a0908"></span><img class="wp-block-cover__image-background" src="<?php echo esc_url( $fps_dir ); ?>/assets/images/banner/banner-main.webp" alt="" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"fps-banner-inner","style":{"spacing":{"blockGap":"18px","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1320px","justifyContent":"left"}} -->
<div class="wp-block-group fps-banner-inner" style="margin-top:0;margin-bottom:0"><!-- wp:group {"className":"fps-markerline","style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group fps-markerline"><!-- wp:paragraph {"className":"fps-marker","fontSize":"marker"} -->
<p class="fps-marker has-marker-font-size"><?php esc_html_e( 'the archive.', 'filmmaker-production-studio' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"fps-marker-sub","fontSize":"label"} -->
<p class="fps-marker-sub has-label-font-size"><?php esc_html_e( 'every note filed', 'filmmaker-production-studio' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query-title {"type":"archive","showPrefix":false,"fontSize":"h2","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} /-->

<!-- wp:paragraph {"className":"fps-crumbs","style":{"spacing":{"margin":{"top":"6px","bottom":"0"}}}} -->
<p class="fps-crumbs" style="margin-top:6px;margin-bottom:0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'filmmaker-production-studio' ); ?></a> · <strong><?php esc_html_e( 'Archive', 'filmmaker-production-studio' ); ?></strong></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div></div>
<!-- /wp:cover -->
