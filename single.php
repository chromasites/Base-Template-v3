<?php get_header(); ?>

<div id="main" class="right-sidebar">
	<div class="container">

		<div class="row">
		
			<div class="col-md-8">
			
				<div class="post-wrapper">
				
				<?php while ( have_posts() ) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					
						<header class="post-heading">
							<h1 class="post-title"><?php the_title(); ?></h1>
							<?php get_template_part( 'post-meta' ); ?>
						</header>
					
						<section class="content">
							<?php the_content(); ?>
							<?php wp_link_pages( array(
								'next_or_number'   => 'number',
								'before'      => '<ul class="page-numbers"><li>Page:</li><li>',
								'separator'   => '</li><li>',
								'after'       => '</li></ul>'
							) ); ?>
						</section>
					
						<?php the_tags('<footer class="post-utility"><div class="post-tags"><span class="fa fa-tags"></span>', '', '</div></footer>'); ?>
					
						<?php get_template_part( 'social-share-buttons' ); ?>
					
					</article>
				
					<?php if ( comments_open() || get_comments_number() ) { comments_template( '', true ); } ?>
				
				<?php endwhile; ?>
				
				</div><!-- .post-wrapper -->
				
			</div>
			
			<div class="col-md-4">
				<aside id="sidebar">
					<?php get_sidebar(); ?>
				</aside>
			</div>
			
		</div><!-- .row -->
		
	</div><!-- .container -->
</div><!-- #main -->

<?php get_footer(); ?>