<section>
	<!-- Title Of Section -->
	<div class="title">
		<div class="title-wrap clearfix">
			<a>
				<h2><?php echo get_field('our_services_flip_title_first_line'); ?></h2>
				<div><?php echo get_field('our_services_flip_title_second_line'); ?></div>
			</a>
		</div>
	</div>		
	<!-- End Title Of Section -->	
	
	<div class="sub-title clearfix">
		<div class="sub-title-wrap">
			<h3>Our services are comprehensive — an integrated combination of government relations and communications, tailored to fit each clients’ needs and proven effective. Banner supports each client engagement with a campaign management model that combines strategic planning and research with robust measurement and reporting.</h3>
		</div>
	</div>
		
	<div class="our-services-wrap">
		
		<div>IMAGE HERE</div>
		
		<div class="our-services-left clearfix">
			<?php if(get_field('services')): ?>
				<div id="services">
					<?php while(has_sub_field('services')): ?>
						<div class="service <?php echo get_sub_field('type_a_unique_id_for_this_link'); ?> clearfix">
							<a class="showservice" href="<?php echo get_sub_field('type_a_unique_id_for_this_link'); ?>">
								<div class="service-icon cent" style="background:url(<?php echo get_sub_field('services_image'); ?>) no-repeat; background-size:63px;"></div>
								<h2 class="service-table"><?php echo get_sub_field('service_title'); ?></h2>
							</a>
						</div>
					<?php endwhile; ?>	
				</div>
			<?php endif; ?>
		</div>
					
		<div id="menu_container" class="our-services-right">
			<?php if(get_field('services')): ?>
				<?php while(has_sub_field('services')): ?>
					<div class="serviceinfo <?php echo get_sub_field('type_a_unique_id_for_this_link'); ?>" >
						<?php echo get_sub_field('service_text'); ?>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
		
		<div class="services">
			<?php if(get_field('services')): ?>			
				<?php while(has_sub_field('services')): ?>
					<a class="service-m" style="background:url(<?php echo get_sub_field('services_image'); ?>) no-repeat 10px -70px; background-size:63px;">			
						<h2><?php echo get_sub_field('service_title'); ?></h2>					
					</a>
						
					<div class="serviceinfo-m" style="display:none;">
							<?php echo get_sub_field('service_text'); ?>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>

		<div class="cent down-arrows">
			<a href="#services-break" data-offset="90"><img src="<?php bloginfo('template_url'); ?>/images/down-arrow-black.png" alt="Down Arrow" /></a>
		</div>
	
	</div><!-- END OUR-SERVICES-WRAP -->
</section>