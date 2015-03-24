<?php

global $post;
$menuopts = get_post_meta($post->ID,'jht_menuoption', true);
$showsilver = true;
$ctafoot = true;
if ( is_array( $menuopts ) ) {
	if ( isset( $menuopts['silver'] ) ) {
		$showsilver = ( $menuopts['silver'] !== 'No' );
	}
	if ( isset( $menuopts['ctafoot'] ) ) {
		$ctafoot = ( $menuopts['ctafoot'] !== 'No' );
	}
}
if ( $showsilver ) {
	get_sidebar('silverMenu');
}

if ( $ctafoot ) { ?>
            <div class="threeCol ctafoot">
                <div class="col col1 locatedealer">
					<p>See New Jacuzzi Hot Tubs and Get Expert Advice</p>
					<a class="goldButton-290 dealer" href="<?php bloginfo('url'); ?>/dealer-locator/"></a>
                </div>
                <div class="col col2 getbrochure">
					<p>Get a Free Brochure and Learn Even More</p>
					<a class="goldButton-290 brochure" href="<?php bloginfo('url'); ?>/request-brochure/"></a>
                </div>
                <div class="col col3 warranty">
                    <h3 class="bigtitle">Industry Leading <span>10 Year Warranty!</span></h3>
                    <a href="<?php echo get_permalink(3881) ?>"><img class="alignleft" src="<?php bloginfo('template_url'); ?>/images/icons/warranty-star.jpg" style="padding-bottom:50px;" /></a>
                </div>
            </div>
<?php } ?>