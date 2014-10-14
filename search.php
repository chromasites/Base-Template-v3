<?php get_header(); ?>

	<div id="main" class="container">
		<div class="row">
		
			<div class="col-md-12">
				<div id="pagewrapper">
				
					<div id="searchpage" <?php post_class(); ?>>
						
						<div class="page-content">
						
							<div class="row">							
							
								<div class="col-sm-12">
									<div id="primarysearchform" class="searchform">
									<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
										<input type="search" class="search-field" placeholder="Search..." value="<?php echo get_search_query(); ?>" name="s" title="Search for:" />
										<input type="submit" class="search-submit" value="Search" />
									</form>
									</div>
									<hr>
								</div>
								
								<div class="col-md-8">
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
									
										<article class="search-content">
										
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
												
											<div class="search-excerpt"><?php the_excerpt(); ?></div>
											
										</article>
									
								<?php endwhile; ?>
										<ul class="pager">
											<li class="previous"><?php next_posts_link( 'Previous' ); ?></li>
											<li class="next"><?php previous_posts_link( 'More Results' ); ?></li>
										</ul>
										
									</div>
								<?php else : ?>
									<h3>Sorry, no results were found. Please try another search.</h3>
								<?php endif; ?>
								</div>
								
								<div class="col-md-4"></div>

							</div>
							
						</div>
						
					</div>
				
				</div>
			</div>
		
		</div>
	</div>

<?php get_footer(); ?>