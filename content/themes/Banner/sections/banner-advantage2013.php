<section>
	<article>
		<div class="entry">
			
			<!-- Title Of Section -->	
			<div class="title">
				<div class="title-wrap clearfix">
					<a>
						<h2><?php echo get_field('banner_advantage_title'); ?></h2>
						<div><?php echo get_field('banner_advantage_flip_title'); ?></div>
					</a>
				</div>
			</div>
							
			<!-- End Title Of Section -->	
			<div class="sub-title clearfix">
				<div class="sub-title-wrap">
					<h3><?php echo get_field('homepage_sub_title'); ?> </h3>
				</div>
			</div>
				
			<div class="wrap-banner">				
				<div class="advantage-row-top">
					<div class="box box-1">
						<div class="cent">
							<div class="circle-icons">1</div>
						</div>
						<h2><?php echo get_field('box_title_1'); ?></h2>
						<?php echo get_field('box_1_text'); ?>
					</div>
				
					<div class="box box-2">
						<div class="cent">
							<div class="circle-icons">2</div>
						</div>
						<h2><?php echo get_field('box_title_2'); ?></h2>
						<?php echo get_field('box_2_text'); ?>
					</div>
				</div>	
				<div class="advantage-row-bottom">
					<div class="box box-3">
						<div class="cent">
							<div class="circle-icons">3</div>
						</div>
						<h2><?php echo get_field('box_title_3'); ?></h2>
						<?php echo get_field('box_3_text'); ?>
					</div>
					
					<div class="box box-4">
						<div class="cent">
							<div class="circle-icons">4</div>
						</div>
						<h2><?php echo get_field('box_title_4'); ?></h2>
						<?php echo get_field('box_4_text'); ?>
					</div>
				</div>
									
				<div class="cent down-arrows">
					<a class="services-arrow" href="#advantages-break" data-offset="90"><img src="<?php bloginfo('template_url'); ?>/images/down-arrow-black.png" alt="Down Arrow" /></a>
				</div>
					
			</div>
				
		</div>
	</article>
</section>