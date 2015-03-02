<?php
/**
 * Template Name: Truckload Sales
 *
 * @package JHT
 * @subpackage JHT
 * @since JHT 1.0
 */

avala_form_submit();

get_header();
if ( have_posts() ) while ( have_posts() ) : the_post();
$custom = get_post_meta($post->ID,'jht_pageopts');
$pageopts = $custom[0];
$titleoverride = false;
if ( isset($pageopts['o']) ) if ( $pageopts['o'] != '' ) $titleoverride = $pageopts['o'];

	$landing_img = '';
	$img_id = get_post_meta( $post->ID, '_thumbnail_id', true );
	if ( $img_id ) {
		$img = get_post($img_id);
		$landing_img = "background-image: url('". $img->guid ."')";
	}
	?>
    <div class="hero truckload all-tubs" style="<?php echo $landing_img ?>">
    	<div class="wrap">
            <?php  $IP=$_SERVER['REMOTE_ADDR']; $ipcountry = file_get_contents('http://api.hostip.info/country.php?ip='.$IP); ?>

        	<div class="inner">
            	
                <?php // rather than the_content(), first just show more
				$allcontent = $post->post_content;
				$hasmore = false;
				$firstcontent = $allcontent;
				$morecontent = '';
				$morestart = strpos($allcontent, '<!--more-->');
				if ( $morestart ) {
					$firstcontent = substr($allcontent, 0, $morestart);
					$hasmore = true;
				}
				echo apply_filters( 'the_content', $firstcontent );
				?>
            </div>
            <div class="tub-grid">
            <div class="goldBar8"></div>
            <div class="side">
            	
                    <form action="<?php echo get_permalink(); ?>" method="post" id="requestform" class="truckloadform">

                        <?php avala_hidden_fields( 15, 9, 10 ); ?>

	                    <table cellpadding="0">
    	                	<tr>
    	                		<td>
                    				<h3>Request the<br />Truckload Sale<br />In Your Town</h3>
                    			</td>
                    		</tr>
                    		<tr>
                    			<td>
                    				<?php avala_field( 'first_name', 'text w170', true); ?>
                    			</td>
                    		</tr>
                    		<tr>
                    			<td>
                    				<?php avala_field( 'last_name', 'text w170', true); ?>
                    			</td>
                    		</tr>
                            <tr>
                                <td>
                                    <?php avala_field( 'email', 'text w170 email', true); ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <?php avala_field( 'phone', 'text w170 number', true, NULL, array( 'maxlength' => 16)); ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <?php avala_field( 'postal_code', 'text w170', true, NULL, array( 'maxlength' => 10 )); ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <?php avala_field( 'country', 'country w170 select', true); ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="gaptop">
                                    <?php avala_field( 'currently_own', 'w170 select' ); ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="gaptop">
                                    <?php avala_field( 'product_id_list', 'w170 select' ); ?> 
                                </td>
                            </tr>
                            <tr>
                                <td class="gaptop">
                                    <?php avala_field( 'buy_time_frame', 'w170' ); ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="gaptop">
                                    <?php avala_field( 'product_use', 'w170' ); ?>
                                </td>
                            </tr>
                            <tr class="divider">
                                <td></td>
                            </tr>
                            <tr>
                                <td>
                                    <?php avala_field('newsletter', '', false, 'field' ); ?>
                                </td>
                            </tr>
                            <tr class="divider">
                                <td></td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="submit" name="commit" class="submit medGoldBtn" value="Submit">
                                </td>
                            </tr>
                        </table>
                        <p class="note"><span class="rqd">*</span> Fields with an asterisk are required.<br />&nbsp;</p>
                        <p class="note">Your privacy is very important to us. See our <a href="<?php echo get_permalink(3987) ?>">Privacy Policy</a>.<br />&nbsp;</p>
                    </form>

                <div class="share">
                    <h3>Share This</h3>
                    <div class="share-bar">
                    <?php if(function_exists('sharethis_button')) sharethis_button(); ?>
                    </div>
                </div>
            </div>
            <div class="main">
					<?php
                    if ( $hasmore ) {
						$lastcontent = substr($allcontent, $morestart + 11);
						echo apply_filters( 'the_content', $lastcontent );
					} else {
						the_content();
					}
					// sales
					echo '<table class="sales">';
					
					$sales = get_posts( array(
						'post_type' => 'jht_sale',
						'numberposts' => -1
					));
					foreach ( $sales as $s ) {
						echo '<tr><td colspan="3"><div class="hr"></div></td></tr><tr><td class="date" width="72" height="72"><br />';
						$pdate = esc_attr($s->post_title);
						$spaceat = strpos( $pdate, ' ' );
						$truck = substr( $pdate, 0, $spaceat ) .'<br />'. substr( $pdate, $spaceat +1 );
						echo $truck .'</td><td rowspan="2" width="16">&nbsp;</td><td width="580" rowspan="2">'. apply_filters('the_content', $s->post_content) .'</td></tr>';
						echo '<tr><td>&nbsp;</td></tr>';
					}
					
					echo '</table>';
					?>
            </div>
        </div>
    </div>
</div>
<div class="bd wrap">
<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>
