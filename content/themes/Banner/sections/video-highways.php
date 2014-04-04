<!-- START HIGHWAY VIDEO SECTION -->
<section style="overflow:hidden; position:relative; background:url('<?php bloginfo('template_url'); ?>/video/highways/highways.jpg') no-repeat top left; background-size:cover;" class="our-services-banner">
	<div id="talk-break"></div>
	<div style="position:relative; z-index:999;" class="services">		
		<div style="width:100%;" class="banner-video-overlay">
			<h2><?php echo get_field('contact_title'); ?></h2>
			<h3><?php echo get_field('contact_sub_title'); ?></h3>	
			
			<div class="cent">
				<a href="#banner-contact" data-offset="90"><img class="five" src="<?php bloginfo('template_url'); ?>/images/down-arrow-white.png" alt="Down Arrow" /></a>
			</div>					
		</div>
	</div>
	<div class="video-overlay"></div>	
	<video id="highways" class="video-footage" preload autoplay loop>
		<source src="<?php bloginfo('template_url'); ?>/video/highways/highways.mp4"  type="video/mp4" />
		<source src="<?php bloginfo('template_url'); ?>/video/highways/highways.webm" type="video/webm" />
		<source src="<?php bloginfo('template_url'); ?>/video/highways/highways.ogv"  type="video/ogg" />
	</video>		
	<div id="banner-contact"></div>
</section>	
<!-- END HIGHWAY VIDEO SECTION -->