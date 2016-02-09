<?php
/**
 * Template Name: Request a Quote (Direct / PPC Page)
 *
 * @package JHT
 * @subpackage JHT
 * @since JHT 1.0
 */
global $post, $wp_query;
if(isset($wp_query->query_vars['keyword'])) {
    $wp_query->query_vars['kw'] = $wp_query->query_vars['keyword'];
}
$custom = get_post_meta($post->ID,'jht_newppc_options');
$opts = $custom[0];

get_header();

if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <style>
    	.main .gform_wrapper .gform_footer input.button, .main .gform_wrapper .gform_footer input[type="submit"]
    	{
    			background-color: #D2A124;
				border-width: 1px 1px 5px;
				border-style: solid;
				border-color: #BC8900;
				-moz-border-top-colors: none;
				-moz-border-right-colors: none;
				-moz-border-bottom-colors: none;
				-moz-border-left-colors: none;
				border-image: none;
				border-radius: 8px;
				color: #FFF;
				cursor: pointer;
				font: 21px/50px "GSMT";
				text-transform: uppercase;
    		    box-sizing: border-box;
    			/* width: 296px; */
    	}
    	
    	.gform_wrapper .gfield_checkbox li label, .gform_wrapper .gfield_radio li label
    	{
    		margin-top: 4px !important;
    	}
    	
    	p.note a
    	{
    		color: #0092CB;
			text-decoration: none;
    	}
    	
    	
		.gplaceholder label
		{
			display: none !important;
		}
		
		
		
    </style>
    
    <div class="hero ppc-page <?php echo $opts['color']; ?>">
        <?php
        $pagetitle = esc_attr(the_title('','',false));
        if(isset($wp_query->query_vars['kw']) && $wp_query->query_vars['kw'] != '') {
            $pagetitle = $wp_query->query_vars['kw'];
            $pagetitle = ucwords(str_replace('-',' ',$kw));
        }
        echo '<img src="'.get_template_directory_uri().'/images/bg/ppc-header-'.$opts['color'].'.png" alt="'.$pagetitle.'" title="'.$pagetitle.'" />';
        ?>
    	<div class="wrap">
            <h1 class="title"><?php if ( $opts['title'] ) { echo $opts['title']; } else { the_title(); } ?></h1>
            <p class="main-text"><?php if ( $opts['text_main'] ) echo $opts['text_main']; ?></p>
            <ul>
                <?php
                foreach ( $opts['text_bullet'] as $k => $v ) {
                    if ( $v ):
                        echo '<li><span class="ppc-icon '.$opts['text_bullet_icon'][$k].'"></span>'.$v.'</li>';
                    endif;
                }
                ?>
            </ul>
        </div>
        <div class="wrap bottom">
            <p class="gold-text"><?php if ( $opts['text_gold'] ) echo $opts['text_gold']; ?></p>
        </div>
    </div>
    <div class="goldBar-ppc"></div>
    <div class="bd">
    	<div class="wrap">
            <div class="oneCol">
                <div class="main">
                    <?php echo do_shortcode('[gravityform id="13" name="No-Obligation Price Quote" title="false" description="false"]'); ?>
                    <p>* Indicates required fields</p>

                </div>
            </div>
<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>
