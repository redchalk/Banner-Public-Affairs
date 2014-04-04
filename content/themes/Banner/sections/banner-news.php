<section>
	<!-- Title Of Section -->
	<div class="title">
		<div class="title-wrap clearfix">
			<a>
				<h2><?php echo get_field('news_flip_title_first_line'); ?></h2>
				<div><?php echo get_field('news_flip_title_second_line'); ?></div>
			</a>
		</div>
	</div>
	<!-- End Title Of Section -->
	<div class="news-wrap clearfix">
		<div class="news-section">
			<?php
			  	$args=array(
			  		'cat' => 2,
			    	'showposts' => 20,
			    	'caller_get_posts'=> 1
			    );
				
				$my_query = null;
				$my_query = new WP_Query($args);
				
				if( $my_query->have_posts() ) {
					
					echo '' . $type .'';
					
					while ($my_query->have_posts()) : $my_query->the_post(); ?>
				    
				    	<div class="news-post">
							<div class="news-date"><?php the_date('m/d/y'); ?></div> 
							<div class="news-copy"><?php the_excerpt() ?><a class="news-link" href="<?php the_field('news_post_link') ?>" title="<?php the_title(); ?>" target="_blank">&#187; Read Full Article</a></div>
						</div>
					
					<?php endwhile; } //if ($my_query)
					
					wp_reset_query();  // Restore global post data stomped by the_post(). ?>
				
		</div><!-- END NEWS SECTION -->
		
		<div class="test-slider clearfix">
			<?php if(get_field('client_testimonials')): ?>
				<div class="slideshow cycle-slideshow" data-cycle-fx=scrollHorz data-cycle-timeout=5000 data-cycle-slides=">div">
					<?php while(has_sub_field('client_testimonials')): ?>
						<div class="slide-text">
							<p><?php echo get_sub_field('client_testimonial_copy'); ?></p>
							<div class="cname"><?php echo get_sub_field('persons_name'); ?>, <em><?php echo get_sub_field('company_name'); ?></em></div>
						</div>
					<?php endwhile; ?>
				</div>
			<?php endif; ?>
			
			<div class="bottom-quote-large"></div>
		</div><!-- END TEST SLIDER -->
							
		<div class="cent down-arrows">
			<a href="#talk-break" data-offset="90"><img src="<?php bloginfo('template_url'); ?>/images/down-arrow-black.png" alt="Down Arrow" /></a>
		</div>
	
	</div>
</section>