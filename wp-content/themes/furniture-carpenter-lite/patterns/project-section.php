<?php
/**
 * Title: Project Section
 * Slug: furniture-carpenter-lite/project-section
 * Categories: template
 */
?>
<!-- wp:group {"className":"project-sec","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group project-sec"><!-- wp:heading {"style":{"typography":{"textAlign":"center","fontSize":"26px","fontStyle":"Thin","fontWeight":"600"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0","left":"0","right":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","fontFamily":"Fira_Sans"} -->
<h2 class="wp-block-heading has-text-align-center has-secondary-color has-text-color has-link-color has-fira-sans-font-family" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-size:26px;font-style:Thin;font-weight:600"><?php esc_html_e('OUR PROJECT','furniture-carpenter-lite'); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"project-para","style":{"typography":{"textAlign":"center","fontSize":"15px","fontStyle":"Thin","fontWeight":"400"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0","left":"0","right":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","fontFamily":"Poppins"} -->
<p class="has-text-align-center project-para has-secondary-color has-text-color has-link-color has-poppins-font-family" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-size:15px;font-style:Thin;font-weight:400"><?php esc_html_e('Custom furniture, elegant interiors, and premium woodwork designed to transform every space.','furniture-carpenter-lite'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:query {"queryId":19,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"metadata":{"categories":["posts"],"patternName":"core/query-standard-posts","name":"Standard"}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group {"align":"wide","className":"imgs-box","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide imgs-box"><!-- wp:post-featured-image {"isLink":true,"align":"wide"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"project-content","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group project-content"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-terms {"term":"category","style":{"typography":{"fontSize":"14px","fontStyle":"Thin","fontWeight":"400","textTransform":"uppercase"}},"fontFamily":"Fira_Sans"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"fontSize":"20px","textTransform":"uppercase"}},"fontFamily":"Fira_Sans"} /--></div>
<!-- /wp:group -->

<!-- wp:post-excerpt {"moreText":"de"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->