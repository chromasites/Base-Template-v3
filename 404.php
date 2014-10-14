<?php get_header(); ?>

	<div id="main" class="container">
		<div class="row">
		
			<div class="col-md-12">
				<div id="pagewrapper" class="full-width error-404">
				
					<article id="errorpage" <?php post_class(); ?>>
						
						<section class="page-content">
						
							<div class="row">
							
								<div class="col-sm-4 col-sm-push-8">
									<h1 class="nomargin">404</h1>
								</div>
								
								<div class="col-sm-8 col-sm-pull-4">
									<h3>We're sorry, but this page isn't here anymore.</h3>
									<p>Try a search or the links below to find what you are looking for.</p>
								</div>								
							
								<div class="col-sm-12">
									<div id="primarysearchform" class="searchform">
									<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
										<input type="search" class="search-field" placeholder="Search..." value="<?php echo get_search_query(); ?>" name="s" title="Search for:" />
										<input type="submit" class="search-submit" value="Search" />
									</form>
									</div>
									<hr>
								</div>

								<div id="pages-404" class="col-sm-6">
									<h3>Pages</h3>
									<ul>
									<?php $args = array(
										'title_li'     => '', 
										'exclude'      => '',
										'include'      => '',
										'sort_column'  => 'menu_order, post_title'
									);
									wp_list_pages( $args );
									?>
									</ul>
								</div>
								
								<div id="posts-404" class="col-sm-6">
									<h3>Recent Blog Posts</h3>
									<ul>
									<?php
									$args = array( 'numberposts' => 10, 'post_status' => 'publish' );
									$recent_posts = wp_get_recent_posts( $args );
									
									foreach( $recent_posts as $recent ){
											echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="'.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a> </li> ';
										}
									?>
									</ul>
								</div>
								
							</div>
							
						</section>
						
					</article>
				
				</div>
			</div>
		
		</div>
	</div>

<?php get_footer(); ?>