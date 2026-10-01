<?php
/**
 * Title: Inside the Studio
 * Slug: filmmaker-production-studio/about
 * Categories: banner, filmmaker-production-studio
 * Keywords: about, studio, crew, company
 * Description: Studio portrait still with a stage tag, beside the founding story, a set of production notes and a director signature line.
 */
$fps_dir = get_template_directory_uri();
?>
<!-- wp:group {"metadata":{"patternName":"filmmaker-production-studio/about","name":"Inside the Studio","description":"Studio portrait still with a stage tag, beside the founding story, a set of production notes and a director signature line.","categories":["banner","filmmaker-production-studio"]},"anchor":"studio","align":"full","className":"fps-inside","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"clamp(72px, 7.6vw, 146px)","bottom":"clamp(72px, 7.6vw, 146px)","left":"var(--fps-gutter)","right":"var(--fps-gutter)"},"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"1320px"}} -->
<div id="studio" class="wp-block-group alignfull fps-inside" style="margin-top:0;margin-bottom:0;padding-top:clamp(72px, 7.6vw, 146px);padding-right:var(--fps-gutter);padding-bottom:clamp(72px, 7.6vw, 146px);padding-left:var(--fps-gutter)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"clamp(34px, 4.4vw, 84px)","left":"clamp(34px, 4.4vw, 84px)"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"51%","className":"fps-inside-shot","style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column is-vertically-aligned-center fps-inside-shot" style="flex-basis:51%"><!-- wp:image {"aspectRatio":"5/6","scale":"cover","sizeSlug":"large","className":"fps-inside-img"} -->
<figure class="wp-block-image size-large fps-inside-img"><img src="<?php echo esc_url( $fps_dir ); ?>/assets/images/about/about-main.webp" alt="<?php esc_attr_e( 'The studio floor lit for a shoot, with lamps, stands and a camera on sticks', 'filmmaker-production-studio' ); ?>" style="aspect-ratio:5/6;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"fps-inside-tag","style":{"spacing":{"padding":{"top":"13px","bottom":"13px","left":"17px","right":"17px"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group fps-inside-tag" style="padding-top:13px;padding-right:17px;padding-bottom:13px;padding-left:17px"><!-- wp:paragraph {"className":"fps-inside-tag-label"} -->
<p class="fps-inside-tag-label"><?php esc_html_e( 'ROOM 01 · STAGE', 'filmmaker-production-studio' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e( '2,400 sq ft, 19 ft grid, blackout to daylight in under an hour.', 'filmmaker-production-studio' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"49%","className":"fps-inside-copy","style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column is-vertically-aligned-center fps-inside-copy" style="flex-basis:49%"><!-- wp:group {"className":"fps-markerline","style":{"spacing":{"blockGap":"8px","margin":{"bottom":"16px"}}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group fps-markerline" style="margin-bottom:16px"><!-- wp:paragraph {"className":"fps-marker","fontSize":"marker"} -->
<p class="fps-marker has-marker-font-size"><?php esc_html_e( 'inside.', 'filmmaker-production-studio' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"fps-marker-sub","fontSize":"label"} -->
<p class="fps-marker-sub has-label-font-size"><?php esc_html_e( 'who we are', 'filmmaker-production-studio' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"style":{"spacing":{"margin":{"top":"0","bottom":"20px"}}},"fontSize":"h2"} -->
<h2 class="wp-block-heading has-h-2-font-size" style="margin-top:0;margin-bottom:20px"><?php esc_html_e( 'A small unit that keeps the same people on the film', 'filmmaker-production-studio' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"fps-lede","style":{"spacing":{"margin":{"top":"0","bottom":"18px"}}},"fontSize":"lead"} -->
<p class="fps-lede has-lead-font-size" style="margin-top:0;margin-bottom:18px"><?php esc_html_e( 'Halide started as three people and a borrowed Bolex. It is now a stage, a cutting room and a crew of thirty-seven who have mostly worked together long enough to argue productively.', 'filmmaker-production-studio' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"fps-body-sm","style":{"spacing":{"margin":{"top":"0","bottom":"32px"}}},"fontSize":"small"} -->
<p class="fps-body-sm has-small-font-size" style="margin-top:0;margin-bottom:32px"><?php esc_html_e( 'We take on around fourteen projects a year. That number is deliberate. It means the director who pitched your film is the one standing behind the monitor, and the editor knows why a take was printed before you have to explain it.', 'filmmaker-production-studio' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"fps-notes","style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"32px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group fps-notes" style="margin-top:0;margin-bottom:32px"><!-- wp:group {"className":"fps-note-row","style":{"spacing":{"blockGap":"18px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group fps-note-row"><!-- wp:paragraph {"className":"fps-note-term"} -->
<p class="fps-note-term"><?php esc_html_e( 'Founded', 'filmmaker-production-studio' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"fps-note-desc"} -->
<p class="fps-note-desc"><?php esc_html_e( '2017, in a garage on Vancouver Street with one light and a great deal of optimism.', 'filmmaker-production-studio' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"fps-note-row","style":{"spacing":{"blockGap":"18px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group fps-note-row"><!-- wp:paragraph {"className":"fps-note-term"} -->
<p class="fps-note-term"><?php esc_html_e( 'Rooms', 'filmmaker-production-studio' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"fps-note-desc"} -->
<p class="fps-note-desc"><?php esc_html_e( 'Stage, grade suite, sound booth and a cutting room with a door that actually closes.', 'filmmaker-production-studio' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"fps-note-row","style":{"spacing":{"blockGap":"18px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group fps-note-row"><!-- wp:paragraph {"className":"fps-note-term"} -->
<p class="fps-note-term"><?php esc_html_e( 'Kit', 'filmmaker-production-studio' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"fps-note-desc"} -->
<p class="fps-note-desc"><?php esc_html_e( 'Large-format bodies, vintage spherical glass, and a dolly older than most of the crew.', 'filmmaker-production-studio' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"fps-sign","style":{"spacing":{"blockGap":"16px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group fps-sign"><!-- wp:image {"width":"34px","height":"34px","scale":"contain","className":"fps-sign-ico"} -->
<figure class="wp-block-image is-resized fps-sign-ico"><img src="<?php echo esc_url( $fps_dir ); ?>/assets/images/about/icon-iris.svg" alt="" style="object-fit:contain;width:34px;height:34px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"fps-sign-name"} -->
<p class="fps-sign-name"><?php esc_html_e( 'Marguerite Auer', 'filmmaker-production-studio' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Director & founder', 'filmmaker-production-studio' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
