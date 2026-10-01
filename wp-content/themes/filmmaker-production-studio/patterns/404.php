<?php
/**
 * Title: 404
 * Slug: filmmaker-production-studio/404
 * Categories: 404, filmmaker-production-studio
 * Description: Oversized error code with a serif italic centre digit, a short explanation, a search field and a link home.
 */
?>
<!-- wp:group {"tagName":"main","align":"full","className":"fps-404","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"clamp(96px, 9vw, 150px)","bottom":"clamp(72px, 7.6vw, 146px)","left":"var(--fps-gutter)","right":"var(--fps-gutter)"},"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"640px"}} -->
<main class="wp-block-group alignfull fps-404" style="margin-top:0;margin-bottom:0;padding-top:clamp(96px, 9vw, 150px);padding-right:var(--fps-gutter);padding-bottom:clamp(72px, 7.6vw, 146px);padding-left:var(--fps-gutter)"><!-- wp:paragraph {"align":"center","className":"fps-err-code","style":{"typography":{"fontSize":"clamp(6rem, 18vw, 11rem)"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p class="has-text-align-center fps-err-code" style="margin-top:0;margin-bottom:0;font-size:clamp(6rem, 18vw, 11rem)">4<em>0</em>4</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":1,"style":{"spacing":{"margin":{"top":"12px","bottom":"0"}}},"fontSize":"h2"} -->
<h1 class="wp-block-heading has-text-align-center has-h-2-font-size" style="margin-top:12px;margin-bottom:0"><?php esc_html_e( 'This page is not in the can', 'filmmaker-production-studio' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"fps-lede","style":{"spacing":{"margin":{"top":"16px","bottom":"32px"}}},"fontSize":"lead"} -->
<p class="has-text-align-center fps-lede" style="margin-top:16px;margin-bottom:32px"><?php esc_html_e( 'The page you asked for has moved or was never shot. Search for it, or start again from the home page.', 'filmmaker-production-studio' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"<?php esc_attr_e( 'Search', 'filmmaker-production-studio' ); ?>","showLabel":false,"placeholder":"<?php esc_attr_e( 'Search the studio…', 'filmmaker-production-studio' ); ?>","width":100,"widthUnit":"%","buttonText":"<?php esc_attr_e( 'Search', 'filmmaker-production-studio' ); ?>","className":"fps-search-field"} /-->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"30px"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons" style="margin-top:30px"><!-- wp:button {"className":"is-style-fps-light"} -->
<div class="wp-block-button is-style-fps-light"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Back to home', 'filmmaker-production-studio' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></main>
<!-- /wp:group -->
