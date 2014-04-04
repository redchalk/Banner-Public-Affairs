<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
								
				<section>
					<div class="title">
						<div class="title-wrap clearfix">
							<h2><?php the_title(); ?></h2>
						</div>
					</div>
					
					<!-- End Title Of Section -->
				
						<div class="news-wrap">
							<?php the_content(); ?>

							<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>		
							
							<?php edit_post_link('Edit this entry','','.'); ?>
							
							<?php previous_post_link('<h1>%link</h1>'); ?>
							<?php next_post_link('<h1>%link</h1>'); ?>
							
							<div class="cent"></div>
						</div>
					</div>
				</section>			
		</div>

	<?php endwhile; endif; ?>

<?php get_footer(); ?>