<section>
	<!-- Title Of Section -->
	<div class="title">
		<div class="title-wrap clearfix">
			<a>
				<h2><?php echo get_field('contact_flip_title_first_line'); ?></h2>
				<div><?php echo get_field('contact_flip_title_second_line'); ?></div>
			</a>
		</div>
	</div>
	<!-- End Title Of Section -->

	<div class="sub-title clearfix">
		<div class="sub-title-wrap">
			<h3><span class="number"><?php echo get_field('contact_phone_number'); ?></span><span class="address-line-one"><?php echo get_field('contact_mailing_address_line_1');?></span><span class="address-line-two"><?php echo get_field('contact_mailing_address_line_2'); ?></span></h3>
		</div>
	</div>
			
	<div id="map-wrap"></div>
			
	<div class="contact-wrap clearfix">
		<div class="bottom clearfix">
			<div class="contact-form">
				<?php get_template_part('sections/wufoo','form'); ?>
			</div>
			
			<img src="<?php bloginfo('template_url'); ?>/images/banner-logo-footer.png" alt="Banner Public Affairs" />
			<div class="footer-text">
				<?php echo get_field('footer_text'); ?>
			</div>
		</div><!-- END BOTTOM-->
	</div><!-- END CONTACT WRAP-->		
</section>