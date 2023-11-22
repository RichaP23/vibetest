<?php
 /**
  * Title:  Header
  * Slug: craftycommerce/header
  * Categories: craftycommerce
  */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"10px","bottom":"10px","right":"5vw","left":"5vw"}},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"backgroundColor":"foreground","textColor":"background","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background-color has-foreground-background-color has-text-color has-background has-link-color" style="padding-top:10px;padding-right:5vw;padding-bottom:10px;padding-left:5vw"><!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
<div class="wp-block-group alignfull"><!-- wp:paragraph {"align":"center","fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size"><?php echo esc_html__( 'Black Friday', 'craftycommerce' ); ?>.<mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-background-color"><?php echo esc_html__( 'Save', 'craftycommerce' ); ?></mark><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-primary-color"> </mark><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-background-color">%<?php echo esc_html__( 'up to 50', 'craftycommerce' ); ?></mark> <?php echo esc_html__( 'Deal Ends: +  4 day.', 'craftycommerce' ); ?> </p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"spacing":{"padding":{"top":"0","right":"var:preset|spacing|40","bottom":"0","left":"var:preset|spacing|40"}}},"className":"is-style-outline","fontSize":"tiny"} -->
<div class="wp-block-button has-custom-font-size is-style-outline has-tiny-font-size"><a class="wp-block-button__link wp-element-button" style="padding-top:0;padding-right:var(--wp--preset--spacing--40);padding-bottom:0;padding-left:var(--wp--preset--spacing--40)"><?php echo esc_html__( 'Shop Now', 'craftycommerce' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","right":"5%","left":"5%"}}},"backgroundColor":"background-secondary","layout":{"type":"constrained"},"fontSize":"extra-small"} -->
<div class="wp-block-group alignwide has-background-secondary-background-color has-background has-extra-small-font-size" style="padding-top:var(--wp--preset--spacing--40);padding-right:5%;padding-bottom:var(--wp--preset--spacing--40);padding-left:5%"><!-- wp:columns {"verticalAlignment":"center","align":"full","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns alignfull are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"25%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:25%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:site-logo {"width":54,"shouldSyncIcon":true} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":"0px"}},"className":"mobile-aligncenter","layout":{"type":"constrained"}} -->
<div class="wp-block-group mobile-aligncenter" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:site-title {"textAlign":"left","align":"full","style":{"typography":{"fontStyle":"normal","fontWeight":"500","textTransform":"capitalize","lineHeight":"1.3"},"spacing":{"margin":{"bottom":"0"}}},"textColor":"foreground","fontSize":"large"} /-->

<!-- wp:paragraph {"align":"left","textColor":"foreground","fontSize":"normal"} -->
<p class="has-text-align-left has-foreground-color has-text-color has-normal-font-size"><?php echo esc_html__( 'E-commerce WP Theme', 'craftycommerce' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":""} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:navigation {"textColor":"foreground","overlayBackgroundColor":"background","overlayTextColor":"foreground","align":"wide","className":"has-left-submenu wp-block-navigation-animation","layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"center","flexWrap":"wrap","orientation":"horizontal"},"style":{"spacing":{"blockGap":"30px"},"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"capitalize","fontSize":"18px"}}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"20%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:20%"><!-- wp:group {"className":"mobile-aligncenter","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
<div class="wp-block-group mobile-aligncenter"><!-- wp:woocommerce/customer-account {"iconStyle":"alt","textColor":"foreground","fontSize":"normal"} /-->

<!-- wp:woocommerce/mini-cart {"miniCartIcon":"bag-alt","priceColor":{"color":"#e65238","name":"Primary","slug":"primary","class":"has-primary-icon-color"},"iconColor":{"color":"#e65238","name":"Primary","slug":"primary","class":"has-primary-icon-color"},"productCountColor":{},"fontSize":"normal"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->