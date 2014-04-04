<!-- Services Area -->
<section id="banner-services-m">
		
	<div class="title">
		<div class="title-wrap clearfix">
			<h2><span><?php echo get_field('our_services_flip_title_first_line'); ?></span></h2>
		</div>
	</div>
</section>
<!-- End Title Of Section -->	

<section>	
	<div class="our-services-wrap">
		<div class="services">
			<?php if(get_field('services')): ?>			
					
				<?php while(has_sub_field('services')): ?>
					<a class="service-m" style="background:url(<?php echo get_sub_field('services_image'); ?>) no-repeat 10px -70px;">			
						<h2><?php echo get_sub_field('service_title'); ?></h2>					
					</a>
						
					<div class="serviceinfo-m" style="display:none;">
							<?php echo get_sub_field('service_text'); ?>
					</div>
	
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</section>
<!-- End Services Area -->