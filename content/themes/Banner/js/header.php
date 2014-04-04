<!DOCTYPE html>
<!--[if lt IE 9]>
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
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/css/styles.css" />
	<link rel="stylesheet" type="text/css" media="screen and (min-width:769px)" href="<?php bloginfo('template_url'); ?>/css/desktop.css" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/component.css" type="text/css" />
			
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	
	<!--[if lt IE 9]>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/inc/iealert/style.css" />
	<![endif]-->
	
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo ('template_url'); ?>/js/modernizr.js"></script>
	<script type="text/javascript" src="<?php bloginfo ('template_url'); ?>/js/css3-mediaqueries.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/iealert.min.js"></script>
	
	<?php wp_head(); ?>
	
	<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
	
	<script type="text/javascript">
	  $(window).load(function() {
		  $(".loader").fadeOut("slow");
	  });
    </script>
	
	<script>
      function initialize() {
        var map_canvas = document.getElementById('map-wrap');        
        var myLatlng = new google.maps.LatLng(38.8943000, -77.0107833);
        var map_options = {
          center: myLatlng,
          zoom: 18,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(map_canvas, map_options)        
                
        var marker = new google.maps.Marker({
			position: myLatlng,
			map: map,
			title: 'Banner Public Affairs'
		});       
      }     
	  google.maps.event.addDomListener(window, 'load', initialize);
    </script>		
</head>

<body <?php body_class(); ?>>
	
	<!--PRELOADER-->
	<div class="loader"></div>
	
	<header>
		<div id="banner-top"></div>
		<img id="banner-view" src="<?php bloginfo('template_url'); ?>/images/Banner-Public-Affairs-View.jpg" alt="Banner Public Affairs View" />
		<div class="header-wrap">
			<h1><a href="<?php echo get_option('home'); ?>/"><img src="<?php bloginfo('template_url'); ?>/images/banner-logo-header-large.png" alt="Banner Public Affairs Logo" /></a></h1>
		</div>
		 
		 
		<!--MOBILE NAV-->
		<div class="nav-btn-ph">
			<img id="navImage" src="<?php bloginfo('template_url'); ?>/images/mobile-toggle-open.png" alt="Menu Toggle" />
		</div>
		<div id="nav-ph">
		  <ul class="main-nav-ph">
		    <li><a href="#the-advantage-m" data-offset="0">THE BANNER ADVANTAGE</a></li>
			<li><a href="#banner-services-m" data-offset="0">OUR SERVICES</a></li>
			<li><a href="#team-m" data-offset="0">OUR TEAM</a></li>
			<li><a href="#banner-news-m" data-offset="0">MAKING NEWS</a></li>
			<li><a href="#banner-contact-m" data-offset="0">CONTACT</a></li>
		  </ul>
		</div>
		 
		<!--DESKTOP NAV-->
		<div id="nav" style="display:none;">
		  <div class="nav-btn nav-exp"></div>
			<ul class="main-tabs">
        		<li><a href="#the-banner-advantage" data-offset="0">THE BANNER ADVANTAGE</a></li>
		 		<li><a href="#banner-services" data-offset="90">OUR SERVICES</a></li>
		 		<li><a href="#team" data-offset="90">OUR TEAM</a></li>
		 		<li><a href="#banner-news" data-offset="90">MAKING NEWS</a></li>
		 		<li><a href="#banner-contact" data-offset="90">CONTACT</a></li>
		 	</ul>
		 </div>
		 
		 <div class="wrap-text">
			<div class="text-wrap">
				<?php echo get_field('header_callout', 'option'); ?>
			</div>
		 </div>
	
		<div class="down-arrow">
			<a href="#the-banner-advantage" data-offset="0"><img src="<?php bloginfo('template_url'); ?>/images/down-arrow-white.png" alt="Down Arrow"/></a>
		</div>
	</header>
	
	<div id="the-banner-advantage"></div>
	
	<div class="logo-wrap">
		<div class="logo">
			<h1><a href="<?php echo get_option('home'); ?>/"><img src="<?php bloginfo('template_url'); ?>/images/banner-logo-header-small.png" alt="Banner Logo" /></a></h1>
		</div>
	</div>