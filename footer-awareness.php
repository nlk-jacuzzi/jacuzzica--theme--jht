<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package JHT
 * @subpackage JHT
 * @since JHT 1.0
 */
 
?>
        <div class="aware-foot">
            <div class="aware-rows">
                <div class="aware-row">
                    <div class="aware-row-left">
                        <img id="aware-foot-pic1" src="<?php bloginfo('template_url'); ?>/images/awareness/new-tubs-advice-pic.jpg">
                        <input type="button" id="aw-btn-1" class="aware-btn" onclick='location.href="../dealer-locator/";' value="Locate Your Nearest Dealer" />
                    </div>
                    <div class="aware-row-right">
                        <img id="aware-foot-pic2" src="<?php bloginfo('template_url'); ?>/images/awareness/find-the-tub-for-you-pic.jpg">
                        <input type="button" id="aw-btn-2" class="aware-btn" onclick='location.href="../collections/";' value="View hot tub collections" />
                    </div>
                </div>
            </div>
            <div class="aware-side">
                <div class="aware-right-sidebar">
                    <img id="aware-foot-pic3" src="<?php bloginfo('template_url'); ?>/images/awareness/most-popular-tubs-pic.jpg">
                    <input type="button" id="aw-btn-3" class="aware-btn" onclick='location.href="../best-selling-hot-tubs/";' value="View Our Best Selling Spa Models" />
                </div>
            </div>
        </div>

    </div><!-- wrap -->
</div><!-- bd -->
    <div class="hd">
        <div class="wrap">
            <a href="<?php echo jht_homeurl_tfix(); ?>" class="logo">Jacuzzi</a>
            <div class="aware-logo">There's Only One</div>
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
