<?php
/**
 * Title: Hero
 * Slug: filmmaker-production-studio/hero
 * Categories: banner, filmmaker-production-studio
 * Keywords: hero, film, stage, cinema
 * Description: Letterboxed hero frame with a single still, camera gate marks, studio slate line, headline, lede and calls to action, closed by a camera report strip.
 */
$fps_dir = get_template_directory_uri();
?>
<!-- wp:group {"metadata":{"patternName":"filmmaker-production-studio/hero","name":"Hero","description":"Letterboxed hero frame with a single still, camera gate marks, studio slate line, headline, lede and calls to action, closed by a camera report strip.","categories":["banner","filmmaker-production-studio"]},"align":"full","className":"fps-stage","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull fps-stage" style="margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0"><!-- wp:cover {"url":"<?php echo esc_url( $fps_dir ); ?>/assets/images/hero/hero-main.webp","dimRatio":60,"customOverlayColor":"#0a0908","isUserOverlayColor":true,"isDark":true,"sizeSlug":"full","align":"full","className":"fps-stage-frame","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"var(--fps-gutter)","right":"var(--fps-gutter)"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1320px"}} -->
<div class="wp-block-cover alignfull fps-stage-frame" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:var(--fps-gutter);padding-bottom:0;padding-left:var(--fps-gutter)"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-60 has-background-dim" style="background-color:#0a0908"></span><img class="wp-block-cover__image-background" src="<?php echo esc_url( $fps_dir ); ?>/assets/images/hero/hero-main.webp" alt="<?php esc_attr_e( 'A camera operator framing an actor on a location shoot', 'filmmaker-production-studio' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"fps-stage-slate","style":{"spacing":{"blockGap":"24px","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
<div class="wp-block-group fps-stage-slate" style="margin-top:0;margin-bottom:0"><!-- wp:group {"className":"fps-markerline","style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group fps-markerline"><!-- wp:paragraph {"className":"fps-marker","fontSize":"marker"} -->
<p class="fps-marker has-marker-font-size"><?php esc_html_e( 'motion picture studio.', 'filmmaker-production-studio' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"fps-marker-sub","fontSize":"label"} -->
<p class="fps-marker-sub has-label-font-size"><?php esc_html_e( 'Springfield, CA', 'filmmaker-production-studio' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"fps-stage-frames"} -->
<p class="fps-stage-frames"><?php esc_html_e( 'ANAMORPHIC', 'filmmaker-production-studio' ); ?> <strong>2.39 : 1</strong></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"fps-stage-copy","style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"800px","justifyContent":"left"}} -->
<div class="wp-block-group fps-stage-copy" style="margin-top:0;margin-bottom:0"><!-- wp:heading {"level":1,"className":"fps-stage-title","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"h1"} -->
<h1 class="wp-block-heading fps-stage-title has-h-1-font-size" style="margin-top:0;margin-bottom:0"><?php esc_html_e( 'We film', 'filmmaker-production-studio' ); ?> <em><?php esc_html_e( 'the quiet part', 'filmmaker-production-studio' ); ?></em></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"fps-stage-lede","style":{"spacing":{"margin":{"top":"clamp(16px, 1.5vw, 24px)","bottom":"0"}}}} -->
<p class="fps-stage-lede" style="margin-top:clamp(16px, 1.5vw, 24px);margin-bottom:0"><?php esc_html_e( 'Narrative, brand and documentary work, made by one crew from the first read to the final mix. Currently booking from the fourth quarter of 2026.', 'filmmaker-production-studio' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"fps-stage-cta","style":{"spacing":{"margin":{"top":"clamp(22px, 2.2vw, 34px)","bottom":"0"},"blockGap":"12px"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-buttons fps-stage-cta" style="margin-top:clamp(22px, 2.2vw, 34px);margin-bottom:0"><!-- wp:button {"className":"is-style-fps-light"} -->
<div class="wp-block-button is-style-fps-light"><a class="wp-block-button__link wp-element-button" href="#journal"><?php esc_html_e( 'See the work', 'filmmaker-production-studio' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-fps-ghost"} -->
<div class="wp-block-button is-style-fps-ghost"><a class="wp-block-button__link wp-element-button" href="#contact"><?php esc_html_e( 'Start a project', 'filmmaker-production-studio' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

</div>
<!-- /wp:group -->
