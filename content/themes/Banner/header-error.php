<!DOCTYPE html>

<!--[if lt IE 7]>
  <html class="no-js lt-ie9 lt-ie8 lt-ie7"> 
<![endif]-->

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>	
	
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>
	
    <!-- Responsive and mobile friendly stuff -->
	<meta name="format-detection" content="telephone=no">
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
	<meta name="apple-mobile-web-app-capable" content="yes" />
	
	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif ((is_page('Home') || (is_404()))) {
		         bloginfo('name'); echo ' | '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>
	
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/reset.css" type="text/css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo ('template_url'); ?>/fonts/stylesheet.css" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/styles.css" type="text/css" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/component.css" type="text/css" />
	<link rel="stylesheet" media="(max-width: 767px)" href="<?php bloginfo('template_url'); ?>/css/component-mobile.css" type="text/css" />
			
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	
	<!--[if lt IE 9]>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/inc/iealert/style.css" />
		<link rel="stylesheet" href="<?php bloginfo ('template_url'); ?>/css/ie.css">
	<![endif]-->
	
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo ('template_url'); ?>/js/modernizr.js"></script>
	
	<?php wp_head(); ?>
	
	<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
	
	<script>
      function initialize() {
        var map_canvas = document.getElementById('map-wrap');
        var map_canvas2 = document.getElementById('map-wrap2');
        var myLatlng = new google.maps.LatLng(38.8943000, -77.0107833);
        var map_options = {
          center: myLatlng,
          zoom: 18,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(map_canvas, map_options)
        var map2 = new google.maps.Map(map_canvas2, map_options)
                
        var marker = new google.maps.Marker({
			position: myLatlng,
			map: map,
			title: 'Banner Public Affairs'
		});
		
		var marker = new google.maps.Marker({
			position: myLatlng,
			map: map2,
			title: 'Banner Public Affairs'
		});        
      }    
      
	  google.maps.event.addDomListener(window, 'load', initialize);
    </script>		
</head>

<body <?php body_class(); ?>>

<div class="hide-smartphone">	
	
	<header>
	
		<div class="header-wrap">
			<h1><a href="<?php echo get_option('home'); ?>/"><img src="<?php bloginfo('template_url'); ?>/images/banner-logo-header-large.png" alt="Banner Public Affairs Logo" /></a></h1>
		</div>
		 
		 <div class="wrap-text">
			<div class="text-wrap">
				<h2>404 ERROR - PAGE DOES NOT EXIST!</h2>
				<p>If you think you were directed to this page in error, please try double-checking your URL. <a href="http://bannerpublicaffairs.com/" title="Banner Public Affairs Homepage">You may also click here to go directly to the home page.</a> If this problem persists, please send us an email using the below contact form. Thank you.</p>
			</div>
		</div>
	
	</header>	

</div>

<!-- Smartphone -->
<div class="hide-desktop">	
	
	<header>
		
		<div id="banner-top-m"></div>
		<img src="<?php bloginfo('template_url'); ?>/images/Banner-Public-Affairs-View.jpg" alt="Banner Public Affairs View" />
		 
		 <div class="wrap-text">
			<div class="text-wrap">
				<p>If you think you were directed to this page in error, please try double-checking your URL or using the above site navigation. <a href="http://bannerpublicaffairs.com/" title="Banner Public Affairs Homepage">You may also click here to go directly to the home page.</a></p>
			</div>
		</div>
	
	</header>
</div>
