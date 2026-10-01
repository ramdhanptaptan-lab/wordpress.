<?php
/**
 * Title: Footer
 * Slug: filmmaker-production-studio/footer
 * Categories: footer, filmmaker-production-studio
 * Description: Four column studio footer with the logo and blurb, two link stacks, a contact block with icons, and a bottom bar carrying the copyright and social links.
 */
$fps_dir = get_template_directory_uri();
?>
<!-- wp:group {"metadata":{"patternName":"filmmaker-production-studio/footer","name":"Footer","description":"Four column studio footer with the logo and blurb, two link stacks, a contact block with icons, and a bottom bar carrying the copyright and social links.","categories":["footer","filmmaker-production-studio"]},"anchor":"contact","align":"full","className":"fps-footer","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0","left":"var(--fps-gutter)","right":"var(--fps-gutter)"},"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"1320px"}} -->
<div id="contact" class="wp-block-group alignfull fps-footer" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:var(--fps-gutter);padding-bottom:0;padding-left:var(--fps-gutter)"><!-- wp:columns {"className":"fps-footer-top","style":{"spacing":{"padding":{"top":"clamp(52px, 5vw, 84px)","bottom":"clamp(52px, 5vw, 84px)"},"blockGap":{"top":"clamp(26px, 2.8vw, 50px)","left":"clamp(26px, 2.8vw, 50px)"}}}} -->
<div class="wp-block-columns fps-footer-top" style="padding-top:clamp(52px, 5vw, 84px);padding-bottom:clamp(52px, 5vw, 84px)"><!-- wp:column {"width":"32%","className":"fps-footer-brand","style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column fps-footer-brand" style="flex-basis:32%"><!-- wp:group {"className":"fps-footer-logo","style":{"spacing":{"blockGap":"10px","margin":{"bottom":"20px"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group fps-footer-logo" style="margin-bottom:20px"><!-- wp:image {"width":"116px","height":"41px","scale":"contain","className":"fps-footer-logo-mark"} -->
<figure class="wp-block-image is-resized fps-footer-logo-mark"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( $fps_dir ); ?>/assets/images/footer/footer-logo.webp" alt="<?php esc_attr_e( 'Halide Motion Picture Co., home', 'filmmaker-production-studio' ); ?>" style="object-fit:contain;width:116px;height:41px"/></a></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p style="margin-top:0;margin-bottom:0"><?php esc_html_e( 'A motion picture studio in Springfield, California. Narrative, brand and documentary work, made by the same crew from first read to final mix.', 'filmmaker-production-studio' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"19%","style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column" style="flex-basis:19%"><!-- wp:heading {"level":4,"style":{"spacing":{"margin":{"top":"0","bottom":"18px"}}}} -->
<h4 class="wp-block-heading" style="margin-top:0;margin-bottom:18px"><?php esc_html_e( 'Studio', 'filmmaker-production-studio' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:group {"className":"fps-footer-nav","style":{"spacing":{"blockGap":"11px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group fps-footer-nav"><!-- wp:paragraph -->
<p><a href="#journal"><?php esc_html_e( 'Selected work', 'filmmaker-production-studio' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="#studio"><?php esc_html_e( 'Inside the studio', 'filmmaker-production-studio' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="#studio"><?php esc_html_e( 'The unit', 'filmmaker-production-studio' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="#faq"><?php esc_html_e( 'How it works', 'filmmaker-production-studio' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="#journal"><?php esc_html_e( 'Cutting room notes', 'filmmaker-production-studio' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"19%","style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column" style="flex-basis:19%"><!-- wp:heading {"level":4,"style":{"spacing":{"margin":{"top":"0","bottom":"18px"}}}} -->
<h4 class="wp-block-heading" style="margin-top:0;margin-bottom:18px"><?php esc_html_e( 'Services', 'filmmaker-production-studio' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:group {"className":"fps-footer-nav","style":{"spacing":{"blockGap":"11px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group fps-footer-nav"><!-- wp:paragraph -->
<p><a href="#studio"><?php esc_html_e( 'Story & direction', 'filmmaker-production-studio' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="#studio"><?php esc_html_e( 'Production & crew', 'filmmaker-production-studio' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="#studio"><?php esc_html_e( 'Post & colour', 'filmmaker-production-studio' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="#faq"><?php esc_html_e( 'Shoot planner', 'filmmaker-production-studio' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="#contact"><?php esc_html_e( 'Kit hire', 'filmmaker-production-studio' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"30%","className":"fps-footer-contact","style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column fps-footer-contact" style="flex-basis:30%"><!-- wp:heading {"level":4,"style":{"spacing":{"margin":{"top":"0","bottom":"18px"}}}} -->
<h4 class="wp-block-heading" style="margin-top:0;margin-bottom:18px"><?php esc_html_e( 'Get in touch', 'filmmaker-production-studio' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"14px","margin":{"bottom":"26px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-bottom:26px"><!-- wp:group {"className":"fps-footer-contact-row","style":{"spacing":{"blockGap":"12px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group fps-footer-contact-row"><!-- wp:image {"width":"16px","height":"16px","scale":"contain","className":"fps-footer-ico"} -->
<figure class="wp-block-image is-resized fps-footer-ico"><img src="<?php echo esc_url( $fps_dir ); ?>/assets/images/footer/icon-mail.svg" alt="" style="object-fit:contain;width:16px;height:16px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p><a href="mailto:contact@example.com">contact@example.com</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"fps-footer-contact-row","style":{"spacing":{"blockGap":"12px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group fps-footer-contact-row"><!-- wp:image {"width":"16px","height":"16px","scale":"contain","className":"fps-footer-ico"} -->
<figure class="wp-block-image is-resized fps-footer-ico"><img src="<?php echo esc_url( $fps_dir ); ?>/assets/images/footer/icon-phone.svg" alt="" style="object-fit:contain;width:16px;height:16px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p><a href="tel:+10005758980">+1 (000) 575-898</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"fps-footer-contact-row","style":{"spacing":{"blockGap":"12px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group fps-footer-contact-row"><!-- wp:image {"width":"16px","height":"16px","scale":"contain","className":"fps-footer-ico"} -->
<figure class="wp-block-image is-resized fps-footer-ico"><img src="<?php echo esc_url( $fps_dir ); ?>/assets/images/footer/icon-location.svg" alt="" style="object-fit:contain;width:16px;height:16px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p><?php esc_html_e( '9785 Southwest Vancouver, Springfield, CA', 'filmmaker-production-studio' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-fps-ghost is-style-fps-small"} -->
<div class="wp-block-button is-style-fps-ghost is-style-fps-small"><a class="wp-block-button__link wp-element-button" href="mailto:contact@example.com"><?php esc_html_e( 'Start a project', 'filmmaker-production-studio' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"className":"fps-footer-bar","style":{"spacing":{"padding":{"top":"24px","bottom":"24px"},"blockGap":"20px"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group fps-footer-bar" style="padding-top:24px;padding-bottom:24px"><!-- wp:paragraph -->
<p><?php
	printf(
	        /* translators: 1: current year. 2: linked theme name. */
	        wp_kses_post( __( 'Copyright © %1$s %2$s — Filmmaker WordPress Theme', 'filmmaker-production-studio' ) ),
	        esc_html( gmdate( 'Y' ) ),
	        '<a href="' . esc_url( 'https://blockwpthemes.com/product/filmmaker-wordpress-theme/?utm_source=wordpress&utm_medium=theme&utm_campaign=free_footer' ) . '" target="_blank" rel="noopener noreferrer">' . esc_html__( 'BWP Filmmaker', 'filmmaker-production-studio' ) . '</a>'
	);
	?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"22px"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><a href="#contact"><?php esc_html_e( 'Instagram', 'filmmaker-production-studio' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="#contact"><?php esc_html_e( 'Vimeo', 'filmmaker-production-studio' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="#contact"><?php esc_html_e( 'Letterboxd', 'filmmaker-production-studio' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="#faq"><?php esc_html_e( 'Privacy', 'filmmaker-production-studio' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="#faq"><?php esc_html_e( 'Terms', 'filmmaker-production-studio' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
