<?php
/**
 * Front / Homepage template file
 *
 * @package JHT
 * @subpackage JHT
 * @since JHT 1.0
 */
define('DONOTCACHEPAGE', true);

get_header(); ?>
    <div class="hero">
        <!-- PROMO SLIDE -->
        <?php /*
        <div class="slide1 slide" style="position: absolute; top: 0; left: 0; z-index: 2; background-image: url(<?php bloginfo('template_url'); ?>/images/heros/StaycationHomeHero_CAN.jpg); background-color: #fff;">
            <a href="<?php echo get_bloginfo('url'); ?>/promo/" style="width: 100%; height: 100%; display: block;">
                <div class="wrap"></div>
            </a>
        </div>
        */ ?>
        <!-- END PROMO -->
        <div class="slide0 slide" style="position: absolute; top: 0; left: 0; z-index: 2; background-image: url(<?php bloginfo('template_url'); ?>/images/heros/Final-j-500-CanEng.jpg);">
            <div class="wrap">
                <a href="<?php echo get_bloginfo('url'); ?>/j-500/" target="_blank"  style="position: absolute; color: transparent; width: 190px; height: 40px; top: 307px; left: 21px;">
                </a>
            </div>
        </div>
        <div class="slide2 slide slide-discover" style="display: none;">
            <a class="slidebg" href="<?php bloginfo('template_url'); ?>/images/heros/couple-in-jacuzzi-bg.jpg"></a>
        	<div class="wrap">
            	<div class="inner">
                    <h3>Discover Your<br />Perfect Jacuzzi<sup>&reg;</sup> Hot Tub</h3>
                    <ul class="collections">
                        <li class="jlx first"><a href="<?php echo get_permalink(48) ?>">j-lx collection</a></li>
                        <li class="j400"><a href="<?php echo get_permalink(52) ?>">j-400 collection</a></li>
                        <li class="j300"><a href="<?php echo get_permalink(58) ?>">j-300 collection</a></li>
                        <li class="j200"><a href="<?php echo get_permalink(62) ?>">j-200 collection</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="slide3 slide slide-discover" style="display:none;">
            <a class="slidebg" href="<?php bloginfo('template_url'); ?>/images/heros/couple-in-jacuzzi-bg.jpg"></a>
            <div class="wrap">
                <div class="inner">
                    <h3>Discover Your<br />Perfect Jacuzzi<sup>&reg;</sup> Hot Tub</h3>
                    <ul class="collections">
                        <li class="jlx first"><a href="<?php echo get_permalink(48) ?>">j-lx collection</a></li>
                        <li class="j400"><a href="<?php echo get_permalink(52) ?>">j-400 collection</a></li>
                        <li class="j300"><a href="<?php echo get_permalink(58) ?>">j-300 collection</a></li>
                        <li class="j200"><a href="<?php echo get_permalink(62) ?>">j-200 collection</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="slide4 slide slide-difference" style="display:none">
        	<a class="slidebg" href="<?php bloginfo('template_url'); ?>/images/heros/woman-under-water.jpg"></a>
        	<div class="wrap">
            	<div class="inner">
                	<h3>The Jacuzzi Difference</h3>
                    <h2><strong>100 Years</strong> of innovation</h2>
                    <div class="video">
                    	<p><a href="<?php echo get_permalink(3749) ?>"><img src="<?php bloginfo('template_url'); ?>/images/video-thumbs/jacuzzi-story.jpg" align="left" /> <span>The Jacuzzi Story</span></a></p>
                    </div>
                    <div class="horz-white-gradient"></div>
                    <div class="video">
                    	<p><a href="<?php echo get_permalink(3805) ?>"><img src="<?php bloginfo('template_url'); ?>/images/video-thumbs/hydrotherapy.jpg" align="left" /> <span>Why Hydrotherapy Works</span></a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide5 slide slide-whyjacuzzi" style="display:none">
            <a class="slidebg" href="<?php bloginfo('template_url'); ?>/images/heros/hero-why-jacuzzi-couple.jpg"></a>
            <div class="wrap">
                <div class="img-btn" goto="vidmodal" rel="//www.youtube.com/embed/qxYknzV-yNQ?rel=0"><img src="<?php bloginfo('template_url'); ?>/images/icons/play-video-circle.png" width="227" height="58" /></div>
            </div>
        </div>
        
    </div>
    <div class="goldBar5"></div>
    <?php get_sidebar('callouts'); ?>
    <div class="bd wrap">
    	<?php get_sidebar('silverMenu'); ?>
        <div class="threeCol">
            <div class="col col1and2 main">
                <div class="col warranty">
                    <h3 class='bigtitle'>Industry Leading 10 Year Warranty!</h3>
                    <p class=""><img src="<?php bloginfo('template_url'); ?>/images/icons/warranty-star.jpg" align="left" height="136" width="136" alt="Industry Leading 10 Year Warranty"/>When shopping for a hot tub, be sure to consider the warranty. Other brands offer warranties that last 1 or 2 years, but our quality tubs feature limited warranties for up to 10 years! In addition, Jacuzzi's network of authorized dealers are standing by to ensure years of worry-free enjoyment.<br /><a href="<?php echo get_permalink(4169) ?>">VIEW WARRANTY</a></p>
                </div>
                <div class="col main">
                    <?php while ( have_posts() ) : the_post();
						global $post;
						$ct = $post->post_content;
						
						$ct2 = $ct;
						
						if ( function_exists('jhtpolylangfix_contentcheck') ) {
							$ct = jhtpolylangfix_contentcheck(false);
						}
						$ct = apply_filters('the_content', $post->post_content);
						/*
						echo '<pre style="display:none">'. print_r($ct2,true) .'</pre>';
						echo '<pre style="display:none">'. print_r($ct,true) .'</pre>';
						*/
                        if( strpos($ct,'<!--more-->') ) {
                        $ct = str_replace('<!--more--></p>', '<a href="#" onclick="jQuery(this).hide().parent().next().show(); return false;"><br />Read More</a></p><div style="display:none">', $ct) .'</div>';
                        }
                        echo $ct;
                    endwhile; ?>
                </div>
            </div>
            <div class="col col3 blog">
            	<h2>Read Our Blog</h2>
                <p>From news on the best ways to care for your spa to how to get a better night's sleep. Learn and stay informed with our Jacuzzi<br />
                <a href="<?php echo get_permalink(5) ?>">Blog.</a></p>
                <?php $l = get_posts(array(
					'numberposts' => 1,
				));
				if ( count($l) > 0 ) {
					echo '<h3>Latest from the Blog:</h3>';
					$l = $l[0];
					echo '<h2>'. esc_attr($l->post_title) .'</h2>';
					$lc = wp_kses($l->post_content, array());
					echo '<p>';
					if ( strlen($lc) > 50 ) {
						$lc = substr($lc, 0, strrpos(substr($lc,0,50), ' ')) .'... ';
					}
					echo $lc .'<a href="'. get_permalink($l->ID) .'">Read More</a></p>';
				}
				?>
                <h3>Categories</h3>
                <ul><?php
                if ( false === ( $special_query_results = get_transient( 'wp_list_categories' ) ) ) {
					// It wasn't there, so regenerate the data and save the transient
					$special_query_results = wp_list_categories('title_li=&echo=0');
					set_transient( 'wp_list_categories', $special_query_results, 60*60*12 );
				}
				// Use the data like you would have normally...
				$wp_list_categories = get_transient( 'wp_list_categories' );
				echo $wp_list_categories;
				?></ul>
            </div>
<?php get_footer(); ?>
