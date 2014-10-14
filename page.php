<?php get_header(); ?>

	<div id="main" class="container">
		<div class="row">
		
			<div class="col-md-8">
				<div id="pagewrapper">
				
				<?php while ( have_posts() ) : the_post(); ?>
				
					<article id="page-<?php the_ID(); ?>" <?php post_class(); ?>>
					
						<header class="page-headline">
							<h1 class="page-title"><?php the_title(); ?></h1>
						</header>
						
						<section class="page-content">
						
							<?php the_content(); ?>
							
							<?php wp_link_pages( array(
								'next_or_number'   => 'number',
								'before'      => '<ul class="page-numbers"><li>Page:',
								'separator'   => '</li><li>',
								'after'       => '</li></ul>'
							) ); ?>
							
						</section>
						
					</article>
				
				<?php endwhile; ?>
				
				</div>
			</div>
			
			<div class="col-md-4">
				<aside id="sidebar">
					<?php get_sidebar(); ?>
				</aside>
			</div>
		
		</div>
	</div>

<?php get_footer(); ?>