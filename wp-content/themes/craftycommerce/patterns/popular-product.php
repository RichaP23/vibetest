<?php
 /**
  * Title: Popular Product
  * Slug: craftycommerce/popular-product
  * Categories: craftycommerce
  */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"60px","bottom":"60px","right":"4.2vw","left":"4.2vw"},"blockGap":"var:preset|spacing|20"},"border":{"width":"0px","style":"none"}},"className":"","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group" style="border-style:none;border-width:0px;padding-top:60px;padding-right:4.2vw;padding-bottom:60px;padding-left:4.2vw"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|70","left":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"backgroundColor":"background-secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background-secondary-background-color has-background" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/popular-banner.jpg","id":3283,"dimRatio":30,"minHeight":427,"minHeightUnit":"px","contentPosition":"center center","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"border":{"radius":"0px"}},"className":"image-zoom-hover"} -->
<div class="wp-block-cover image-zoom-hover" style="border-radius:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:427px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-30 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-3283" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/popular-banner.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","textColor":"background"} -->
<h2 class="wp-block-heading has-text-align-center has-background-color has-text-color"><?php echo esc_html__( 'Accessories', 'craftycommerce' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)"><!-- wp:button {"backgroundColor":"primary","textColor":"background","className":"is-style-button"} -->
<div class="wp-block-button is-style-button"><a class="wp-block-button__link has-background-color has-primary-background-color has-text-color has-background wp-element-button"><?php echo esc_html__( 'Shop Now', 'craftycommerce' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|30"}}},"className":"wp-block-group-heading","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide wp-block-group-heading" style="padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:columns {"verticalAlignment":"center","align":"full"} -->
<div class="wp-block-columns alignfull are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"66.333%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.333%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html__( 'Popular', 'craftycommerce' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:separator {"backgroundColor":"primary","className":"is-style-default"} -->
<hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background is-style-default"/>
<!-- /wp:separator --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"33.3333%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.3333%"><!-- wp:group {"layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-button is-style-underline"} -->
<div class="wp-block-button is-style-button is-style-underline"><a class="wp-block-button__link wp-element-button"><?php echo esc_html__( 'See All', 'craftycommerce' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"10px","padding":{"bottom":"30px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="padding-bottom:30px"><!-- wp:woocommerce/product-new {"rows":1,"alignButtons":true,"categories":[],"contentVisibility":{"image":true,"title":true,"price":true,"rating":true,"button":true},"stockStatus":["","instock","outofstock","onbackorder"],"align":"wide"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->