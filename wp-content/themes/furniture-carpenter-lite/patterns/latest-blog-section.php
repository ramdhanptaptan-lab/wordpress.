<?php
/**
 * Title: Latest Blog Section
 * Slug: furniture-carpenter-lite/latest-blog-section
 * Categories: template
 */
?>

<!-- wp:group {"className":"blog-section","style":{"spacing":{"margin":{"top":"0em","bottom":"0em"},"blockGap":"0","padding":{"top":"3em","bottom":"3em","left":"0","right":"0"}}},"backgroundColor":"body-color","layout":{"type":"constrained","contentSize":"80%","wideSize":"100%"}} -->
<div class="wp-block-group blog-section has-body-color-background-color has-background" style="margin-top:0em;margin-bottom:0em;padding-top:3em;padding-right:0;padding-bottom:3em;padding-left:0"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"className":"wp-block-heading has-text-align-center has-fira-sans-font-family","style":{"typography":{"fontSize":"37px","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground"} -->
<h3 class="wp-block-heading has-text-align-center has-fira-sans-font-family has-foreground-color has-text-color has-link-color" style="font-size:37px;font-weight:700"><?php esc_html_e('Our Blog','furniture-carpenter-lite'); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"blog-short-title","style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"},"margin":{"right":"0","bottom":"1em","top":"0","left":"0"}},"typography":{"fontSize":"14px"},"border":{"radius":"5px"},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground","fontFamily":"Poppins"} -->
<p class="has-text-align-center blog-short-title has-foreground-color has-text-color has-link-color has-poppins-font-family" style="border-radius:5px;margin-top:0;margin-right:0;margin-bottom:1em;margin-left:0;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;font-size:14px"><?php esc_html_e('Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry.','furniture-carpenter-lite'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained","contentSize":"100%","wideSize":"100%"}} -->
<div class="wp-block-group"><!-- wp:query {"queryId":60,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":true},"metadata":{"categories":["posts"],"patternName":"core/query-grid-posts","name":"Grid"}} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"blog-parts  owl-carousel","style":{"spacing":{"padding":{"top":"0px","bottom":"0px"}},"typography":{"fontSize":"16px"}},"fontFamily":"Poppins","layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"border":{"radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"}}},"backgroundColor":"background","layout":{"inherit":false}} -->
<div class="wp-block-group has-background-background-color has-background" style="border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"className":"blog-img","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"1px","right":"1px"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group blog-img" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:1px;padding-bottom:0;padding-left:1px"><!-- wp:post-featured-image {"width":"100%","height":"250px","style":{"border":{"radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"0px","bottomRight":"0px"}}}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"content-box","style":{"spacing":{"padding":{"top":"10px","bottom":"10px","left":"10px","right":"10px"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":{"bottomLeft":"30px","bottomRight":"30px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group content-box" style="border-bottom-left-radius:30px;border-bottom-right-radius:30px;margin-top:0;margin-bottom:0;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px"><!-- wp:post-title {"isLink":true,"style":{"typography":{"textTransform":"capitalize","fontSize":"24px"},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"spacing":{"padding":{"left":"10px"}}},"textColor":"foreground","fontFamily":"Poppins"} /-->

<!-- wp:post-excerpt {"style":{"typography":{"fontSize":"15px"},"spacing":{"padding":{"top":"7px","bottom":"0","left":"10px","right":"0"},"margin":{"top":"0","bottom":"0","left":"0","right":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontFamily":"Poppins"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->