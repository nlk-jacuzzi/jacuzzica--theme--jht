<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * NOTE : ALSO MAKE SURE ALL TRACKING PIXELS ARE ON FOOTER-MOBILE.PHP
 *
 * @package JHT
 * @subpackage JHT
 * @since JHT 1.0
 */
 ?>
    <div class="hd">
    	<div class="wrap">
        	<a href="<?php echo jht_homeurl_tfix(); ?>" class="logo">Jacuzzi</a>
        </div>
    </div>
    <div class="wrap" style="background:#fff;">
    <div class="ft" style="background:#fff;">
    	<span class="icon watermark"></span>
        <?php jht_socialmenu(true);
		wp_nav_menu( array( 'container' => 'false', 'menu_class' => 'footerMenuTop', 'theme_location' => 'ftline1' ) );
		wp_nav_menu( array( 'container' => 'false', 'menu_class' => 'footerMenuBottom', 'theme_location' => 'ftline2' ) );
//		wp_nav_menu( array( 'container' => 'false', 'menu_class' => 'footerMenuBottom', 'menu_id' => 'resourceMenu', 'theme_location' => 'ftres' ) );
        ?>
    </div>
    </div>
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
    <?php

	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>

</body>
</html>
