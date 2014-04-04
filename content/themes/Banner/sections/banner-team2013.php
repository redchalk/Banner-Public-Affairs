<section>
	<!-- Title Of Section -->
	<div class="title">
		<div class="title-wrap clearfix">
			<a>
				<h2><?php echo get_field('team_bio_flip_title_first_line'); ?></h2>
				<div><?php echo get_field('team_bio_flip_title_second_line'); ?></div>
			</a>
		</div>
	</div>
	<!-- End Title Of Section -->
				
	<div class="sub-title clearfix">
		<div class="sub-title-wrap">
			<h3><?php echo get_field('our_team_description'); ?> </h3>
		</div>
	</div>
		
	<div class="team-wrap">
		<div class="main">
			<?php if(get_field('team_bios')): ?>
				<ul id="og-grid" class="og-grid">
					<?php while(has_sub_field('team_bios')): ?>
						<li>
							<a data-description="<h2><?php echo get_sub_field('employee_name'); ?></h2><div><?php echo get_sub_field('name_desc'); ?></div>" data-title="<?php echo get_sub_field('testimonial'); ?>">
								<img src="<?php echo get_sub_field('employee_photo'); ?>" alt="<?php echo get_sub_field('employee_name'); ?> Banner Public Affairs Bio Picture" />
								<h2><?php echo get_sub_field('employee_name'); ?></h2>
								<h3><?php echo get_sub_field('employee_title'); ?></h3>
							</a>
						</li>
					<?php endwhile; ?>
				</ul>
			<?php endif; ?>
		</div>						
		
		<div class="cent down-arrows">
			<a href="#news-break" data-offset="90"><img src="<?php bloginfo('template_url'); ?>/images/down-arrow-black.png" alt="Down Arrow" /></a>
		</div>
	</div>
</section>