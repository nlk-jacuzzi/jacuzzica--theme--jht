<?php
/*
 *		Sidebar - Tracking Codes
 *
 *		Can just add necessary tracking codes here to be injected on all pages with 
 *		@ get_sidebar('trackingcode')
 *
 */


$slug = jht_getslug();

function interested_in_owning() {
	if ( !isset($_COOKIE['jhtsession']) || $_COOKIE['jhtsession'] > 0 ) {
		return true;
	}
	else {
		return false;
	}
}

function is_thanks_page() {
	$thanks_pages = array(
		'quote-thanks',
		'brochure-thanks',
		'escape-thanks',
		'trade-in-thanks',
		'thanks',
		'email-thank-you',
		'appointment-thanks',
		'email-thank-you2',
		'thank-you',
		'truckload-thanks',
		);
	if ( in_array( jht_getslug(), $thanks_pages ) ) {
		return true;
	} 
	else {
		return false;
	}
}

/******************** GOOGLE TRACKING CODES ********************/
function google_tracking_codes_footer() {


	// Remarketing tags on form pages only (to be phased out)
	if ( ( is_page_template('page-quote.php') == true ) 
		|| ( is_page_template('page-quoteb.php') == true ) 
		|| ( is_page_template('page-tradein.php') == true ) 
		|| ( is_page_template('page-brochure.php') == true ) 
		|| ( is_page_template('page-jacuzzi-brochure-onepart.php') == true ) 
		|| ( is_page_template('page-twoColForm.php') == true ) 
		|| ( is_page_template('page-newlanding1.php') == true ) 
		|| ( is_page_template('page-newlanding1b.php') == true ) 
		|| ( is_page_template('page-newlanding2.php') == true )
		|| ( is_page_template('page-direct.php') == true )
		|| ( is_page_template('page-direct2.php') == true )
		|| ( is_page_template('page-directcanada.php') == true )
		|| ( is_page_template('page-directtwo.php') == true ) ) {
		?>
			<!-- Google Code for Form Pages :: Remarketing Tag -->
			<script type="text/javascript">
			/* <![CDATA[ */
			var google_conversion_id = 972980329;
			var google_conversion_label = "hDJcCIeR_gIQ6YD6zwM";
			var google_custom_params = window.google_tag_params;
			var google_remarketing_only = true;
			/* ]]> */
			</script>
			<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
			</script>
			<noscript>
			<div style="display:inline;">
			<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/972980329/?value=0&amp;label=hDJcCIeR_gIQ6YD6zwM&amp;guid=ON&amp;script=0"/>
			</div>
			</noscript>
		<?php
	}

	// Request Brochure Thanks
	if ( is_page('brochure-thanks') ) {
		?>
			<!-- Google Code for Brochure Request Conversion Page -->
			<script type="text/javascript">
			/* <![CDATA[ */
			var google_conversion_id = 972980329;
			var google_conversion_language = "en";
			var google_conversion_format = "3";
			var google_conversion_color = "ffffff";
			var google_conversion_label = "AcT5CPeqvwIQ6YD6zwM";
			var google_conversion_value = 50;
			var google_remarketing_only = false;
			/* ]]> */
			</script>
			<script type="text/javascript" src="http://www.googleadservices.com/pagead/conversion.js">
			</script>
			<noscript>
			<div style="display:inline;">
			<img height="1" width="1" style="border-style:none;" alt="" src="http://www.googleadservices.com/pagead/conversion/972980329/?value=50&amp;label=AcT5CPeqvwIQ6YD6zwM&amp;guid=ON&amp;script=0"/>
			</div>
			</noscript>
		<?php
	}

	// Escape Thanks
	if ( is_page('escape-thanks') ) {
		?>
				<script>
				var prodName ="Escape With Jacuzzi";  				// add a name for Form being submitted
				var randId = Math.floor((Math.random()*10000)+1);
				var thankUrl = '/jh'+window.location.pathname;
				var thankTitle = prodName;
				if (!prodName || prodName.length === 0){
					var thankTitle = document.title;	
				}
				  _gaq.push(['_addTrans',
				    randId,           // order ID - required
				    thankUrl,  // affiliation or store name
				    '1',          // total - required
				    '',           // tax
				    '',              // shipping
				    '',       // city
				    '',     // state or province
				    ''             // country
				  ]);
				   // add item might be called for every item in the shopping cart
				   // where your ecommerce engine loops through each item in the cart and
				   // prints out _addItem for each
				  _gaq.push(['_addItem',
				    randId,           // order ID - required
				    thankUrl,           // SKU/code - required
				    thankTitle,        // product name
				    '',   // category or variation
				    '1',          // unit price - required
				    '1'               // quantity - required
				  ]);
				  _gaq.push(['_trackTrans']); //submits transaction to the Analytics servers
				</script>
		<?php
	}

	if ( is_page_template('page-directthanks.php') ) { ?>
          <!-- Google Code for Brochure Request Conversion Page -->
          <script type="text/javascript">
          /* <![CDATA[ */
          var google_conversion_id = 972980329;
          var google_conversion_language = "en";
          var google_conversion_format = "3";
          var google_conversion_color = "ffffff";
          var google_conversion_label = "AcT5CPeqvwIQ6YD6zwM";
          var google_conversion_value = 50;
          var google_remarketing_only = false;
          /* ]]> */
          </script>
          <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
          </script>
          <noscript>
          <div style="display:inline;">
          <img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/972980329/?value=50&label=AcT5CPeqvwIQ6YD6zwM&guid=ON&script=0"/>
          </div>
          </noscript>
          <!-- End Google Code for Brochure Request Conversion Page -->
		<?php
	}

	if ( is_page_template('page-directthankscanada.php') ) { ?>
          <!-- Google Code for Canada Brochure Request Conversion Page -->
          <script type="text/javascript">
          /* <![CDATA[ */
          var google_conversion_id = 972980329;
          var google_conversion_language = "en";
          var google_conversion_format = "2";
          var google_conversion_color = "ffffff";
          var google_conversion_label = "jdEBCN-qrQUQ6YD6zwM";
          var google_conversion_value = 150.00;
          /* ]]> */
          </script>
          <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
          </script>
          <noscript>
          <div style="display:inline;">
          <img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/972980329/?value=150.00&label=jdEBCN-qrQUQ6YD6zwM&guid=ON&script=0"/>
          </div>
          </noscript>
          <!-- End Google Code for Canada Brochure Request Conversion Page -->

      <?php
	}

	if ( is_page(9937) ) { ?>
		<!-- Google Code for Get a Quote.orig Conversion Page -->
		<script type="text/javascript">
		/* <![CDATA[ */
		var google_conversion_id = 972980329;
		var google_conversion_language = "en";
		var google_conversion_format = "3";
		var google_conversion_color = "ffffff";
		var google_conversion_label = "m4OTCO-rvwIQ6YD6zwM";
		var google_conversion_value = 1.000000;
		var google_remarketing_only = false;
		/* ]]> */
		</script>
		<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
		</script>
		<noscript>
		<div style="display:inline;">
		<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/972980329/?value=1.000000&amp;label=m4OTCO-rvwIQ6YD6zwM&amp;guid=ON&amp;script=0"/>
		</div>
		</noscript>
	<?php }
}
add_action('wp_footer', 'google_tracking_codes_footer');

function google_tracking_codes_header() {
}
//add_action('wp_head', 'google_tracking_codes_header'); // <-- removed, using Yoast plugin instead

/********************* END GOOGLE ******************************/


/************* ALL OTHER TRACKERS *******************/
	function pixel_serving_sys() { 
		$slug = jht_getslug();
		if ( $slug == 'quote-thanks' ) {
			if ( !defined('JHTMOBPX') ) {
				?>
				<script type='text/javascript'>
				// Conversion Name: Quote Thank you page
				var ebRand = Math.random()+'';
				ebRand = ebRand * 1000000;
				//<![CDATA[
				document.write('<scr'+'ipt src="HTTP://bs.serving-sys.com/BurstingPipe/ActivityServer.bs?cn=as&amp;ActivityID=193856&amp;rnd=' + ebRand + '"></scr' + 'ipt>');
				//]]>
				</script>
				<noscript>
        <?php } ?>
				<img width="1" height="1" style="border:0" src="HTTP://bs.serving-sys.com/BurstingPipe/ActivityServer.bs?cn=as&amp;ActivityID=193856&amp;ns=1"/>
        <?php if ( !defined('JHTMOBPX') ) { ?>
				</noscript>
        <?php }
		}

		if ( $slug == 'brochure-thanks' ) {
			if ( !defined('JHTMOBPX') ) {
				?>
				<script type='text/javascript'>
				// Conversion Name: Brochure Thank you page
				var ebRand = Math.random()+'';
				ebRand = ebRand * 1000000;
				//<![CDATA[
				document.write('<scr'+'ipt src="HTTP://bs.serving-sys.com/BurstingPipe/ActivityServer.bs?cn=as&amp;ActivityID=193857&amp;rnd=' + ebRand + '"></scr' + 'ipt>');
				//]]>
				</script>
				<noscript>
        <?php } ?>
				<img width="1" height="1" style="border:0" src="HTTP://bs.serving-sys.com/BurstingPipe/ActivityServer.bs?cn=as&amp;ActivityID=193857&amp;ns=1"/>
        <?php if ( !defined('JHTMOBPX') ) { ?>
				</noscript>
        <?php }
		}
	}

	function pixel_quantcast() {
		$slug = jht_getslug();
		if ( $slug == 'quote-thanks' ) {
			if ( !defined('JHTMOBPX') ) {
				?>
				<!-- Start Quantcast Tag -->
				<script type="text/javascript"> 
				var _qevents = _qevents || [];

				(function() {
				var elem = document.createElement('script');
				elem.src = (document.location.protocol == "https:" ? "https://secure" : "http://edge") + ".quantserve.com/quant.js";
				elem.async = true;
				elem.type = "text/javascript";
				var scpt = document.getElementsByTagName('script')[0];
				scpt.parentNode.insertBefore(elem, scpt);
				})();

				_qevents.push(
				{qacct:"p-TAV6snse1j2Rf",labels:"_fp.event.Jacuzzi Hot Tub Request a Quote"}
				);
				</script>
				<noscript><?php } ?>
				<img src="//pixel.quantserve.com/pixel/p-TAV6snse1j2Rf.gif?labels=_fp.event.Jacuzzi+Hot+Tub+Request+a+Quote" style="display: none;" border="0" height="1" width="1" alt="Quantcast"/>
				<?php if ( !defined('JHTMOBPX') ) { ?></noscript>
				<!-- End Quantcast tag -->
		<?php }
		}

		if ( $slug == 'brochure-thanks' ) {
			if ( !defined('JHTMOBPX') ) {
				?>
				<!-- Start Quantcast Tag -->
				<script type="text/javascript"> 
				var _qevents = _qevents || [];

				(function() {
				var elem = document.createElement('script');
				elem.src = (document.location.protocol == "https:" ? "https://secure" : "http://edge") + ".quantserve.com/quant.js";
				elem.async = true;
				elem.type = "text/javascript";
				var scpt = document.getElementsByTagName('script')[0];
				scpt.parentNode.insertBefore(elem, scpt);
				})();

				_qevents.push(
				{qacct:"p-TAV6snse1j2Rf",labels:"_fp.event.Jacuzzi Hot Tub Request Brochure"}
				);
				</script>
				<noscript><?php } ?>
				<img src="//pixel.quantserve.com/pixel/p-TAV6snse1j2Rf.gif?labels=_fp.event.Jacuzzi+Hot+Tub+Request+Brochure" style="display: none;" border="0" height="1" width="1" alt="Quantcast"/>
				<?php if ( !defined('JHTMOBPX') ) { ?></noscript>
				<!-- End Quantcast tag -->
		<?php }
		}
		
		if ( is_page_template('page-dlresults.php') ) { ?>
				<!-- Start Quantcast Tag -->
				<script type="text/javascript"> 
				var _qevents = _qevents || [];

				(function() {
				var elem = document.createElement('script');
				elem.src = (document.location.protocol == "https:" ? "https://secure" : "http://edge") + ".quantserve.com/quant.js";
				elem.async = true;
				elem.type = "text/javascript";
				var scpt = document.getElementsByTagName('script')[0];
				scpt.parentNode.insertBefore(elem, scpt);
				})();

				_qevents.push(
				{qacct:"p-TAV6snse1j2Rf",labels:"_fp.event.Jacuzzi Hot Tub Locate a Dealer"}
				);
				</script>
				<noscript>
				<img src="//pixel.quantserve.com/pixel/p-TAV6snse1j2Rf.gif?labels=_fp.event.Jacuzzi+Hot+Tub+Locate+a+Dealer" style="display: none;" border="0" height="1" width="1" alt="Quantcast"/>
				</noscript>
				<!-- End Quantcast tag -->
		<?php }
	}

	function pixel_msoft() {
		$slug = jht_getslug();
		if ( $slug == 'brochure-thanks' ) {
			if ( !defined('JHTMOBPX') ) {
				?>
				<script type="text/javascript"> if (!window.mstag) mstag = {loadTag : function(){},time : (new Date()).getTime()};</script> <script id="mstag_tops" type="text/javascript" src="//flex.msn.com/mstag/site/2007fee5-1f40-4bc4-b858-08ac4cb4c99b/mstag.js"></script> <script type="text/javascript"> mstag.loadTag("analytics", {dedup:"1",domainId:"1183768",type:"1",revenue:"50",actionid:"28343"})</script> <noscript> <?php } ?><iframe src="//flex.msn.com/mstag/tag/2007fee5-1f40-4bc4-b858-08ac4cb4c99b/analytics.html?dedup=1&domainId=1183768&type=1&revenue=50&actionid=28343" frameborder="0" scrolling="no" width="1" height="1" style="visibility:hidden;display:none"> </iframe><?php if ( !defined('JHTMOBPX') ) { ?> </noscript>
		<?php }
		}

		if ( $slug == 'quote-thanks' ) {
			if ( !defined('JHTMOBPX') ) {
				?>
				<script type="text/javascript"> if (!window.mstag) mstag = {loadTag : function(){},time : (new Date()).getTime()};</script> <script id="mstag_tops" type="text/javascript" src="//flex.msn.com/mstag/site/2007fee5-1f40-4bc4-b858-08ac4cb4c99b/mstag.js"></script> <script type="text/javascript"> mstag.loadTag("analytics", {dedup:"1",domainId:"1183768",type:"1",revenue:"50",actionid:"28339"})</script> <noscript> <?php } ?><iframe src="//flex.msn.com/mstag/tag/2007fee5-1f40-4bc4-b858-08ac4cb4c99b/analytics.html?dedup=1&domainId=1183768&type=1&revenue=50&actionid=28339" frameborder="0" scrolling="no" width="1" height="1" style="visibility:hidden;display:none"> </iframe><?php if ( !defined('JHTMOBPX') ) { ?> </noscript>
		<?php }
		}
		
		if ( $slug == 'trade-in-thanks' ) { ?>
				<script type="text/javascript"> if (!window.mstag) mstag = {loadTag : function(){},time : (new Date()).getTime()};</script> <script id="mstag_tops" type="text/javascript" src="//flex.msn.com/mstag/site/2007fee5-1f40-4bc4-b858-08ac4cb4c99b/mstag.js"></script> <script type="text/javascript"> mstag.loadTag("analytics", {dedup:"1",domainId:"1183768",type:"1",revenue:"50",actionid:"141675"})</script> <noscript> <iframe src="//flex.msn.com/mstag/tag/2007fee5-1f40-4bc4-b858-08ac4cb4c99b/analytics.html?dedup=1&domainId=1183768&type=1&revenue=50&actionid=141675" frameborder="0" scrolling="no" width="1" height="1" style="visibility:hidden;display:none"> </iframe> </noscript>
		<?php }

		if ( $slug == 'thanks' ) { ?>
				<script type="text/javascript"> if (!window.mstag) mstag = {loadTag : function(){},time : (new Date()).getTime()};</script> <script id="mstag_tops" type="text/javascript" src="//flex.msn.com/mstag/site/2007fee5-1f40-4bc4-b858-08ac4cb4c99b/mstag.js"></script> <script type="text/javascript"> mstag.loadTag("analytics", {dedup:"1",domainId:"1183768",type:"1",revenue:"50",actionid:"141674"})</script> <noscript> <iframe src="//flex.msn.com/mstag/tag/2007fee5-1f40-4bc4-b858-08ac4cb4c99b/analytics.html?dedup=1&domainId=1183768&type=1&revenue=50&actionid=141674" frameborder="0" scrolling="no" width="1" height="1" style="visibility:hidden;display:none"> </iframe> </noscript>
		<?php }

		if ( $slug == 'thank-you' ) { ?>
				<script type="text/javascript"> if (!window.mstag) mstag = {loadTag : function(){},time : (new Date()).getTime()};</script> <script id="mstag_tops" type="text/javascript" src="//flex.msn.com/mstag/site/2007fee5-1f40-4bc4-b858-08ac4cb4c99b/mstag.js"></script> <script type="text/javascript"> mstag.loadTag("analytics", {dedup:"1",domainId:"1183768",type:"1",revenue:"50",actionid:"142137"})</script> <noscript> <iframe src="//flex.msn.com/mstag/tag/2007fee5-1f40-4bc4-b858-08ac4cb4c99b/analytics.html?dedup=1&domainId=1183768&type=1&revenue=50&actionid=142137" frameborder="0" scrolling="no" width="1" height="1" style="visibility:hidden;display:none"> </iframe> </noscript>
		<?php }
	}

	function pixel_futureads() { 
		?>
			<!-- FutureAds 160 x 600 -->
			<script type="text/javascript" src="https://tracking.trafficvance.com/?id=1G3056G6860GC53D7D13&amp;fetch=0&amp;value=0">
			</script>
			<noscript>
			<div style="display: inline;">
			<img height="1" width="1" style="border-style: none;" alt="" src="https://tracking.trafficvance.com/?id=1G3056G6860GC53D7D13&amp;fetch=1&amp;value=0" />
			</div>
			</noscript>
		<?php 
	}

	function pixel_integer() { 
		?>
			<!-- Integer Retargeting Pixel -->
			<script language="JavaScript" type="text/javascript">
			if (typeof ord=='undefined') {ord=Math.random()*10000000000000000;}
			document.write('<img src="http://ad.doubleclick.net/activity;dc_pixel_url=ohn.bfppixel;dc_seg=131977;ord='+ord+'?" width="1" height="1" border="0" alt="">');
			</script>
			<noscript><img src="http://ad.doubleclick.net/activity;dc_pixel_url=ohn.bfppixel;dc_seg=131977;ord=123456789?" width="1" height="1" border="0" alt=""></noscript>
			<!-- End Integer Retargeting Pixel -->
		<?php 
	}

	function pixel_trafficvance() {
		$slug = jht_getslug(); ?>
			<script type="text/javascript" src="https://tracking.trafficvance.com/?id=1G306BG674CG6AE1B737&amp;fetch=0&amp;value=0"></script>
			<noscript><div style="display: inline;"><img height="1" width="1" style="border-style: none;" alt="" src="https://tracking.trafficvance.com/?id=1G306BG674CG6AE1B737&amp;fetch=1&amp;value=0" /></div></noscript>
		<?php 
	}

	function pixel_turn_beacon() { 
		?>
			<!-- Do Not Remove - Turn Tracking Beacon Code - Do Not Remove -->
			<!-- Advertiser Name : Sundance Spas (Gold) -->
			<!-- Beacon Name : Sundance Spa Remarketing Pixel -->
			<!-- If Beacon is placed on a Transaction or Lead Generation based page, please populate the turn_client_track_id with your order/confirmation ID -->
			<script type="text/javascript">
			turn_client_track_id = "";
			</script>
			<script type="text/javascript" src="http://r.turn.com/server/beacon_call.js?b2=ig_outROcC9hZdoiZUTitPTAIm7cZMBYWwssug9Uz3y3uMS2pytS1vOwLYK93uS7Sp_jyZw7bxk-eF3bDn0uvg"></script>
			<noscript><img border="0" src="http://r.turn.com/r/beacon?b2=ig_outROcC9hZdoiZUTitPTAIm7cZMBYWwssug9Uz3y3uMS2pytS1vOwLYK93uS7Sp_jyZw7bxk-eF3bDn0uvg&amp;cid="></noscript>
			<!-- End Turn Tracking Beacon Code Do Not Remove -->
		<?php 
	}

	function pixel_site_catalyst() { 
	  if(!is_page_template('page-dlresults.php') || strpos($_SERVER['URI'], 'dealer-locator') !== false) {
			if ( !defined('JHTMOBPX') ) {
				?>
			<!-- SiteCatalyst code version: H.10.
			Copyright 1997-2007 Omniture, Inc. More info available at
			http://www.omniture.com -->
			<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/SiteCatalyst.js"></script>
			<script type="text/javascript"><!--
			/* You may give each page an identifying name, server, and channel on
			the next lines. sidebar-trackingcode loaded. */
			s.pageName=""
			s.server=""
			s.channel=""
			s.pageType=""
			s.prop1=""
			s.prop2=""
			s.prop3=""
			s.prop4=""
			s.prop5=""
			s.referrer=""
			/* Conversion Variables */
			s.campaign=""
			s.state=""
			s.zip=""
			s.events="<?php
				if ( is_page(4422) ) { // brochure-thanks
					print 'event2';
				} elseif( is_page(4513) ) { // quote-thanks
					print 'event4';
				} elseif( is_page(6782) ) { // truckload-thanks 
					print 'event9';
				} elseif( is_page(6329) ) { // appointment-thanks 
					print 'event10';
				} elseif( is_page_template('page-dlresults.php') ) { // delaer result
					print 'event7';
				} elseif( is_page_template('page-dllanding.php') ) { // delaer landing
					print '';
				} elseif( is_page('thank-you') ) { // deals/thank-you/
					print 'event3';
				}
				?>"
			s.products=""
			s.purchaseID=""
			s.eVar1=""
			s.eVar2=""
			s.eVar3=""
			s.eVar4=""
			s.eVar5=""
			/************* DO NOT ALTER ANYTHING BELOW THIS LINE ! **************/
			var s_code=s.t();if(s_code)document.write(s_code)//--></script>
			<script language="JavaScript"><!--
			if(navigator.appVersion.indexOf('MSIE')>=0)document.write(unescape('%3C')+'\!-'+'-')
			//--></script>
			<noscript><?php } ?>
			<a href="http://www.omniture.com" title="Web Analytics"><img src="http://jacuzzipremiumhottubs.jacuzzi.com.112.2O7.net/b/ss/jacuzzipremiumhottubs.jacuzzi.com/1/H.10--NS/0" height="1" width="1" border="0" alt=""/></a>
			<?php if ( !defined('JHTMOBPX') ) { ?></noscript><!--/DO NOT REMOVE/-->
			<!-- End SiteCatalyst code version: H.10. -->
			<?php 
			}
		}
	}

	function pixel_videology() {
		// retargeting pixel
		?>
			<img height='1' width='1' alt='' src='http://set.tidaltv.com/Pong.ashx?tids=77250|2400' />
		<?php

		// conversion pixel
		if ( interested_in_owning() && is_thanks_page() ) { ?>
			<img height='1' width='1' alt='' src='http://trk.tidaltv.com/ILogger.aspx?Event=Action&amp;apid=2675' />
		<?php }
	}

	function pixel_bazaarinvoice() {

		global $post;
		$val = get_post_meta( $post->ID, 'lead-type', true );

		?>
		<!-- load bvpai.js -->
		<script type="text/javascript"
		src="//display-stg.ugc.bazaarvoice.com/static/jacuzzi/en_US/bvapi.js">
		</script>
		<?php

		if ( !empty( $val ) ) {
			// page by page updates
			$s = '<script>
			$BV.SI.trackConversion({
			"type" : "lead",
			"value" : "'.$val.'"
			});
			</script>';

			print $s;
		}
	}

	add_action('wp_footer', 'pixel_serving_sys');
	add_action('wp_footer', 'pixel_quantcast');
	add_action('wp_footer', 'pixel_site_catalyst');
	add_action('wp_footer', 'pixel_msoft');
	add_action('wp_footer', 'pixel_videology');

	if ( interested_in_owning() && is_thanks_page() ) {
		add_action('wp_footer', 'pixel_adroll');
		add_action('wp_footer', 'pixel_trafficvance');
		add_action('wp_footer', 'pixel_turn_beacon');
		add_action('wp_footer', 'pixel_integer');
		add_action('wp_footer', 'pixel_futureads');
	}

	add_action('wp_footer', 'pixel_bazaarinvoice');

/************* END OF THE OTHERS ********************/

?>