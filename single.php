<?php get_header(); ?>

	<div id="main" class="container sidebar-right single-post">
		<div class="row">
		
			<div class="col-md-8">
				<div id="postwrapper">
				
				<?php while ( have_posts() ) : the_post(); ?>
				
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					
						<header class="post-header">
						
							<h1 class="post-title"><?php the_title(); ?></h1>
							
							<?php get_template_part( 'post-meta' ); ?>
							
						</header>
						
						<section class="post-content">
						
							<?php the_content('Read more&hellip;'); ?>
							
							<?php wp_link_pages( array(
								'next_or_number'   => 'number',
								'before'      => '<ul class="page-numbers"><li>Page:',
								'separator'   => '</li><li>',
								'after'       => '</li></ul>'
							) ); ?>
							
						</section>
						
						<footer class="post-utility">
							<div class="post-tags"><?php the_tags('<span class="hashtag">#</span>', '<span class="hashtag">#</span>', ''); ?></div>
						</footer>
						
						<hr>
						
						<?php get_template_part( 'social-share-buttons' ); ?>
						
						<hr>
						
					</article>
					
					<div id="comments" class="post-comments">
						<?php if ( comments_open() || get_comments_number() ) { comments_template( '', true ); } ?>
					</div>
				
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