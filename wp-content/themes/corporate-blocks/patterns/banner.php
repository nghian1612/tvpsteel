<?php
/**
 * Banner Section
 * 
 * slug: banner
 * title: Banner
 * categories: corporate-blocks
 */

return array(
    'title'      =>__( 'Banner', 'corporate-blocks' ),
    'categories' => array( 'corporate-blocks' ),
    'content'    => '<!-- wp:cover {"url":"'.esc_url(get_template_directory_uri()) .'/assets/images/banner.png","id":7,"dimRatio":50,"overlayColor":"black","minHeight":600,"isDark":false,"className":"wp-block-group alignfull"} -->
<div class="wp-block-cover is-light wp-block-group alignfull" style="min-height:600px"><span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim"></span><img class="wp-block-cover__image-background wp-image-7" alt="" src="'.esc_url(get_template_directory_uri()) .'/assets/images/banner.png" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:columns {"verticalAlignment":"center","align":"wide","className":"slider-banner"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center slider-banner"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"accent","fontSize":"upper-heading"} -->
<h5 class="wp-block-heading has-accent-color has-text-color has-upper-heading-font-size" style="font-style:normal;font-weight:600">WE ARE THE BEST</h5>
<!-- /wp:heading -->

<!-- wp:heading {"style":{"typography":{"fontSize":"45px"}},"textColor":"background"} -->
<h2 class="wp-block-heading has-background-color has-text-color" style="font-size:45px">We Bring Solutions<br>To Make Life Easier For<br>Your Business.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","textColor":"background","fontSize":"upper-heading"} -->
<p class="has-text-align-left has-background-color has-text-color has-upper-heading-font-size">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices</p>
<!-- /wp:paragraph -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"accent","textColor":"background"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-background-color has-accent-background-color has-text-color has-background wp-element-button" href="#"><strong>KNOW MORE</strong></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"background","textColor":"black"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-black-color has-background-background-color has-text-color has-background wp-element-button" href="#"><strong>CONTACT US</strong></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"width":""} -->
<div class="wp-block-column"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->',
);