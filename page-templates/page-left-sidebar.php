<?php 
/* Template Name: Left Sidebar */
get_header(); ?>

<div id="main" class="left-sidebar">
	
	<?php while ( have_posts() ) : the_post(); ?>
	
		<article id="page-<?php the_ID(); ?>" <?php post_class(); ?>>
		
		<?php if (get_field('headline_display') == 'alternate') { ?>
			<header class="page-heading alt">
				<div class="container">
					<h1 class="page-title"><?php the_field('alternate_headline'); ?></h1>
				</div>
			</header>
		<?php } elseif (get_field('headline_display') == 'none') { ?>
			<div class="no-heading"></div>
		<?php } else { ?>
			<header class="page-heading">
				<div class="container">
					<h1 class="page-title"><?php the_title(); ?></h1>
				</div>
			</header>
		<?php } ?>
		
			<section class="page-section">
			
				<div class="container">

					<div class="row">
					
						<div class="col-md-8 col-md-push-4">
						
							<div class="page-wrapper">
							
								<div class="content">
									<?php the_content(); ?>
								</div>
								
								<footer>
								<?php wp_link_pages( array(
									'next_or_number'   => 'number',
									'before'      => '<ul class="page-numbers"><li>Page:</li><li>',
									'separator'   => '</li><li>',
									'after'       => '</li></ul>'
								) ); ?>
								</footer>
								
							</div>
							
						</div>
				
						<div class="col-md-4 col-md-pull-8">
							<aside id="sidebar">
								<?php get_sidebar(); ?>
							</aside>
						</div>
						
					</div><!-- .row -->
					
				</div><!-- .container -->
				
			</section>
							
		</article>
					
	<?php endwhile; ?>
					
</div><!-- #main -->

<?php get_footer(); ?>