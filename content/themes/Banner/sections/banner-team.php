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
			
			<div class="thirds">
				<p><span>Banner's principals</span> are experienced in political and corporate campaigns. Our knowledge of government and industry sectors including defense, cybersecurity, telecommunications, technology, transportation, energy and financial services enables us to quickly and effectively strategize, plan and implement for our clients.</p>
			</div>
			
			<div class="thirds">
				<p><span>Banner’s government relations team</span> has a deep understanding of Congress as an institution—its personalities, rules and protocols—and, consequently, have outstanding records of success in moving Congress from the inside.</p>
			</div>
			
			<div class="thirds">
				<p><span>Banner’s communications team</span> has proven experience gained from managing “must-win” corporate campaigns with blue chip clients. Banner has an impressive record of client successes: enabling clients to win and secure government contracts, (re)building reputations, and defending brands through turbulent times. The Banner team has the combination of strategic experience and a “channel agnostic” approach that delivers the right message through the right channel to the right audience at the right time.</p>
			</div>			
			
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