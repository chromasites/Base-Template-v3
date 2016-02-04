<?php get_header(); ?>

<div id="main" class="no-sidebar search-page">
	<div class="container">
	
		<header class="search-header">
			<div id="primarysearchform" class="searchform">
				<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
					<div class="input-group input-group-lg">
						<input type="search" class="search-field form-control" placeholder="Search..." value="<?php echo get_search_query(); ?>" name="s" title="Search for:" />
						<span class="input-group-btn">
							<button class="btn btn-default" type="submit"><span class="fa fa-search"></span><span class="hidden-xs"> Search</span></button>
						</span>
					</div>
				</form>
				<hr>
			</div>
		</header>
		
		<div class="row">
	
			<div id="search-list" class="col-md-8">
			
			<?php if (have_posts()) : ?>
			
				<div id="search-results">
				
					<?php $searchdomain = site_url();
					$findhttp = array( 'http://', 'https://' );
					$replacehttp = '';
					$displaydomain = str_replace( $findhttp, $replacehttp, $searchdomain );
					?>
				
					<h1 class="search-results">
					Results found on <?php echo $displaydomain; ?> for: 
					<nobr><strong><?php echo get_search_query(); ?></strong> 
					(<?php timer_stop(1,2); ?> seconds)</nobr>
					</h1>
					
			<?php while (have_posts()) : the_post(); ?>
			
					<div class="post-wrapper">
					
						<article class="search-content" <?php post_class(); ?>>
						
							<h2 class="search-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
							
							<p class="search-link">
								<?php $permalink = get_permalink();
								$findhttp = array( 'http://', 'https://' );
								$replacehttp = '';
								$displayurl = str_replace( $findhttp, $replacehttp, $permalink );
								echo $displayurl;
								?>
							</p>
								
							<?php if ('post' == get_post_type()) { ?>
							<p class="search-meta">
								<span class="search-date"><time><?php the_time('F j, Y'); ?></time></span> - 
								<span class="search-author">by <?php the_author(); ?> </span> 
								<span class="search-comments"> <?php comments_number( '', '- 1 comment', '- % comments' ); ?></span>
							</p>
							<?php } ?>
								
							<div class="search-excerpt content"><?php the_excerpt(); ?></div>
							
						</article>
						
					</div>
				
			<?php endwhile; ?>
			
					<ul class="pager">
						<li class="previous"><?php next_posts_link( 'Previous' ); ?></li>
						<li class="next"><?php previous_posts_link( 'More Results' ); ?></li>
					</ul>
					
				</div>
				
			<?php else : ?>
			
				<h3 class="no-posts-found">Sorry, no results were found. Please try another search.</h3>
				
			<?php endif; ?>
			
			</div>
			
			<div class="col-md-4"></div>

		</div><!-- .row -->
		
	</div><!-- .container -->
</div><!-- #main -->

<?php get_footer(); ?>