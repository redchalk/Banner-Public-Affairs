<!-- START WELDER VIDEO SECTION --> 
<section class="our-services-banner" style="overflow:hidden; position:relative; background:url('<?php bloginfo('template_url'); ?>/video/welder/welder.jpg') no-repeat top left; background-size:cover;">
	<div id="advantages-break"></div>
	<div class="services" style="position:relative; z-index:999;">		
		<div style="width:100%;" class="banner-video-overlay">
			<h2><?php echo get_field('our_services_title'); ?></h2>
			<h3><?php echo get_field('our_services_sub_title'); ?></h3>	
			
			<div class="cent">
				<a href="#banner-services" data-offset="90"><img class="two" src="<?php bloginfo('template_url'); ?>/images/down-arrow-white.png" alt="Down Arrow" /></a>
			</div>					
		</div>
	</div>
	<div class="video-overlay"></div>	
	<video id="welder" class="video-footage" preload autoplay loop>
		<source src="<?php bloginfo('template_url'); ?>/video/welder/welder.webm" />
		<source src="<?php bloginfo('template_url'); ?>/video/welder/welder.mp4"  />
		<source src="<?php bloginfo('template_url'); ?>/video/welder/welder.ogv"  />			
	</video>		
			 
	<div id="banner-services"></div>
</section>
<!--END WELDER VIDEO SECTION -->