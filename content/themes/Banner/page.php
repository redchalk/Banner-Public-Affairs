<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
	<div class="post" id="post-<?php the_ID(); ?>">
		
		<?php get_template_part('sections/banner', 'advantage'); ?>
		
		<?php get_template_part('sections/video', 'welder'); ?>
				
		<?php get_template_part ('sections/banner','services'); ?>
				
		<?php get_template_part('sections/video', 'powerlines'); ?>
			
		<?php get_template_part('sections/banner','team'); ?>
					
		<?php get_template_part('sections/video', 'motherboard'); ?>
		
		<?php get_template_part('sections/banner','news'); ?>
		
		<?php get_template_part('sections/video', 'highways'); ?>
			
		<?php get_template_part('sections/banner','contact'); ?>

	</div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>