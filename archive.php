<?php get_header(); ?>

<div id="main" class="right-sidebar post-archive">
	
	<header class="page-heading">
		<div class="container">
			<h1 class="archive-title"><?php get_template_part( 'archive-titles' ); ?></h1>
		</div>
	</header>
	
	<div class="container">
			
		<div class="row">
		
			<div id="post-list" class="col-md-8">
				
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
				<div class="post-wrapper">
				
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					
						<header class="post-heading">
							<h2 class="post-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
							<?php get_template_part( 'post-meta' ); ?>
						</header>
						
						<section class="content">
							<?php the_content('Read more&hellip;'); ?>
						</section>
						
						<?php the_tags('<footer class="post-utility"><div class="post-tags"><span class="fa fa-tags"></span>', '', '</div></footer>'); ?>
						
					</article>
					
				</div><!-- .posts-wrapper -->
					
			<?php endwhile; ?>
				
				<ul class="pager">
					<li class="previous"><?php next_posts_link( 'Older Posts' ); ?></li>
					<li class="next"><?php previous_posts_link( 'Newer Posts' ); ?></li>
				</ul>
				
			<?php else : ?>
			
				<h3 class="no-posts-found">Sorry, no posts were found.</h3>
				
			<?php endif; ?>
				
			</div><!-- #post-list -->
			
			<div class="col-md-4">
				<aside id="sidebar">
					<?php get_sidebar(); ?>
				</aside>
			</div>
		
		</div><!-- .row -->
		
	</div><!-- .container -->
</div><!-- #main -->

<?php get_footer(); ?>