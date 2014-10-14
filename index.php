<?php get_header(); ?>

	<div id="main" class="container sidebar-right postlist">
		<div class="row">
		
			<div class="col-md-8">
				<div id="postwrapper" class="posts-wrapper">
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					
						<header class="post-header">
						
							<h2 class="post-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
							
							<?php get_template_part( 'post-meta' ); ?>
							
						</header>
						
						<section class="post-content">
							<?php the_content('Read more&hellip;'); ?>
						</section>
						
					</article>
						
					<?php endwhile; ?>
					<ul class="pager">
						<li class="previous"><?php next_posts_link( 'Older' ); ?></li>
						<li class="next"><?php previous_posts_link( 'Newer' ); ?></li>
					</ul>
				<?php else : ?>
					<h3>Sorry, no posts were found.</h3>
				<?php endif; ?>
				
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