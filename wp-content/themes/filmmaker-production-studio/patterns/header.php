<?php
/**
 * Title: Header
 * Slug: filmmaker-production-studio/header
 * Categories: header, filmmaker-production-studio
 * Description: Studio topbar with booking note and contact links, above a sticky navigation bar carrying the logo, primary menu and a start-a-project button.
 */
$fps_dir = get_template_directory_uri();
?>
<!-- wp:group {"metadata":{"patternName":"filmmaker-production-studio/header","name":"Header","description":"Studio topbar with booking note and contact links, above a sticky navigation bar carrying the logo, primary menu and a start-a-project button.","categories":["header","filmmaker-production-studio"]},"className":"fps-header-wrap","style":{"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"},"position":{"type":"sticky","top":"0px"}},"layout":{"type":"default"}} -->
<div class="wp-block-group fps-header-wrap" style="margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0"><!-- wp:group {"className":"fps-topbar","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"var(--fps-gutter)","right":"var(--fps-gutter)"},"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"1320px"}} -->
<div class="wp-block-group fps-topbar" style="padding-top:0;padding-right:var(--fps-gutter);padding-bottom:0;padding-left:var(--fps-gutter)"><!-- wp:group {"className":"fps-topbar-row","style":{"spacing":{"blockGap":"20px","padding":{"top":"8px","bottom":"8px"}},"dimensions":{"minHeight":"40px"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group fps-topbar-row" style="min-height:40px;padding-top:8px;padding-bottom:8px"><!-- wp:group {"className":"fps-topbar-left","style":{"spacing":{"blockGap":"26px"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group fps-topbar-left"><!-- wp:group {"className":"fps-markerline","style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group fps-markerline"><!-- wp:paragraph {"className":"fps-marker","style":{"typography":{"fontSize":"14px"}}} -->
<p class="fps-marker" style="font-size:14px"><?php esc_html_e( 'Halide.', 'filmmaker-production-studio' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"fps-marker-sub","style":{"typography":{"fontSize":"11px"}}} -->
<p class="fps-marker-sub" style="font-size:11px"><?php esc_html_e( 'est. 2017', 'filmmaker-production-studio' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"fps-topbar-note","fontSize":"label"} -->
<p class="fps-topbar-note has-label-font-size"><?php esc_html_e( 'Currently booking Q4 2026', 'filmmaker-production-studio' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"fps-topbar-right","style":{"spacing":{"blockGap":"22px"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group fps-topbar-right"><!-- wp:group {"className":"fps-topbar-item","style":{"spacing":{"blockGap":"7px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group fps-topbar-item"><!-- wp:image {"width":"13px","height":"13px","scale":"contain","className":"fps-topbar-ico"} -->
<figure class="wp-block-image is-resized fps-topbar-ico"><img src="<?php echo esc_url( $fps_dir ); ?>/assets/images/header/icon-mail.svg" alt="" style="object-fit:contain;width:13px;height:13px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"fontSize":"label"} -->
<p class="has-label-font-size"><a href="mailto:contact@example.com">contact@example.com</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"fps-topbar-item","style":{"spacing":{"blockGap":"7px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group fps-topbar-item"><!-- wp:image {"width":"13px","height":"13px","scale":"contain","className":"fps-topbar-ico"} -->
<figure class="wp-block-image is-resized fps-topbar-ico"><img src="<?php echo esc_url( $fps_dir ); ?>/assets/images/header/icon-phone.svg" alt="" style="object-fit:contain;width:13px;height:13px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"fontSize":"label"} -->
<p class="has-label-font-size"><a href="tel:+10005758980">+1 (000) 575-898</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"fps-navbar","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"var(--fps-gutter)","right":"var(--fps-gutter)"},"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"1320px"}} -->
<div class="wp-block-group fps-navbar" style="padding-top:0;padding-right:var(--fps-gutter);padding-bottom:0;padding-left:var(--fps-gutter)"><!-- wp:group {"className":"fps-navbar-row","style":{"spacing":{"blockGap":"28px"},"dimensions":{"minHeight":"74px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group fps-navbar-row" style="min-height:74px"><!-- wp:group {"className":"fps-header-logo","style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group fps-header-logo"><!-- wp:image {"width":"116px","height":"41px","scale":"contain","className":"fps-logo-mark"} -->
<figure class="wp-block-image is-resized fps-logo-mark"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( $fps_dir ); ?>/assets/images/header/header-logo.webp" alt="<?php esc_attr_e( 'Halide Motion Picture Co., home', 'filmmaker-production-studio' ); ?>" style="object-fit:contain;width:116px;height:41px"/></a></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:navigation {"textColor":"bone-dim","className":"fps-header-nav","overlayMenu":"mobile","overlayBackgroundColor":"noir","overlayTextColor":"bone","style":{"spacing":{"blockGap":"30px"}},"layout":{"type":"flex","justifyContent":"right","flexWrap":"nowrap"}} -->
<!-- wp:navigation-link {"label":"<?php esc_attr_e( 'Home', 'filmmaker-production-studio' ); ?>","url":"<?php echo esc_url( home_url( '/' ) ); ?>","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"<?php esc_attr_e( 'Studio', 'filmmaker-production-studio' ); ?>","url":"#studio","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"<?php esc_attr_e( 'Questions', 'filmmaker-production-studio' ); ?>","url":"#faq","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"<?php esc_attr_e( 'Journal', 'filmmaker-production-studio' ); ?>","url":"#journal","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"<?php esc_attr_e( 'Contact', 'filmmaker-production-studio' ); ?>","url":"#contact","kind":"custom","isTopLevelLink":true} /-->
<!-- /wp:navigation -->

<!-- wp:group {"className":"fps-header-actions","style":{"spacing":{"blockGap":"14px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group fps-header-actions"><!-- wp:buttons {"className":"fps-header-btn"} -->
<div class="wp-block-buttons fps-header-btn"><!-- wp:button {"className":"is-style-fps-light is-style-fps-small"} -->
<div class="wp-block-button is-style-fps-light is-style-fps-small"><a class="wp-block-button__link wp-element-button" href="#contact"><?php esc_html_e( 'Start a project', 'filmmaker-production-studio' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
