<!-- START POWERLINE VIDEO SECTION -->
<section style="overflow:hidden; position:relative; background:url('<?php bloginfo('template_url'); ?>/video/powerlines/powerlines.jpg') no-repeat top left; background-size:cover;" class="our-services-banner">
	<div id="services-break"></div>
	<div style="position:relative; z-index:999;" class="services">		
		<div style="width:100%;" class="banner-video-overlay">
			<h2><?php echo get_field('our_team_title'); ?></h2>
			<h3><?php echo get_field('our_team_sub_title'); ?></h3>	
		
			<div class="cent">
				<a href="#team" data-offset="90"><img class="three" src="<?php bloginfo('template_url'); ?>/images/down-arrow-white.png" alt="Down Arrow" /></a>
			</div>					
		</div>
	</div>
	<div class="video-overlay"></div>	
	<video id="powerlines" class="video-footage" preload autoplay loop>
		<source src="<?php bloginfo('template_url'); ?>/video/powerlines/powerlines.webm" type="video/webm" />
		<source src="<?php bloginfo('template_url'); ?>/video/powerlines/powerlines.mp4"  type="video/mp4" />
		<source src="<?php bloginfo('template_url'); ?>/video/powerlines/powerlines.ogv"  type="video/ogg" />
	</video>		
		
	<div id="team"></div>
</section>	
<!-- END POWERLINE VIDEO SECTION -->