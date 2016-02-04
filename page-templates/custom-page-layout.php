<?php 
/* Template Name: Custom Layout */
get_header(); ?>

<div id="main" class="custom-layout">
			
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
		
			<?php
			
			// check if the flexible content field has rows of data
			if( have_rows('content_sections') ):
			    while ( have_rows('content_sections') ) : the_row();
			
					if( get_row_layout() == 'content_section' ): $sectionnumber = 1; $rownumber = 1; ?>
					
					
						<?php /* if (get_sub_field('background_image')) { echo 'background: ur('; the_sub_field('background_image'); echo ');'; } */ ?>
						
						<section id="<?php the_sub_field('section_id'); ?>" class="page-section custom-section section-<?php echo $sectionnumber; ?> <?php the_sub_field('section_class'); ?>" style="<?php if (get_sub_field('background_color')) { echo 'background: '; the_sub_field('background_color'); echo ';'; } ?>">
							<div class="<?php the_sub_field('section_width'); ?>">
								<div class="section-content <?php the_sub_field('content_class'); ?>" style="<?php the_sub_field('content_inline_styles'); ?>">
									
									
									<?php if(get_sub_field('section_heading')) { ?><h2 class="section-heading"><?php the_sub_field('section_heading'); ?></h2><?php } ?>
									
									<?php if(get_sub_field('section_subheading')) { ?><p class="section-subheading"><?php the_sub_field('section_subheading'); ?></p><?php } ?>
									
									<?php if( have_rows('layout_row') ):
									    while ( have_rows('layout_row') ) : the_row();

											if (get_row_layout() == 'one_column_row' ): ?>
												
												<?php
													/* Desktop */
													if( get_sub_field('md_column_layout') == '2-8-2') {
														$col1md = 'col-md-8 col-md-offset-2';
													} elseif ( get_sub_field('md_column_layout') == '3-6-3') {
														$col1md = 'col-md-6 col-md-offset-3';
													} else {
														$col1md = 'col-md-12';
													}
													/* Tablet */
													if( get_sub_field('sm_column_layout') == '2-8-2') {
														$col1sm = ' col-sm-8 col-sm-offset-2';
													} elseif ( get_sub_field('sm_column_layout') == '3-6-3') {
														$col1sm = ' col-sm-6 col-sm-offset-3';
													} else {
														$col1sm = '';
													}
												 ?>
												 
												<div id="row-<?php echo $rownumber; ?>" class="row">
												
													<div class="<?php echo($col1md); echo($col1sm); ?>">
														<div class="content-1 content clearfix"><?php the_sub_field('column_1'); ?></div>
													</div>
													
												</div>
												
											<?php $rownumber++; endif;
											
											if (get_row_layout() == 'two_column_row' ): ?>
												
												<?php 
													/* Desktop */
													if( get_sub_field('md_column_layout') == '3-9') {
														$col1md = 'col-md-3';
														$col2md = 'col-md-9';
														if( get_sub_field('swap_columns') ) {
															$col1md = 'col-md-3 col-md-push-9';
															$col2md = 'col-md-9 col-md-pull-3';
														}
													} elseif ( get_sub_field('md_column_layout') == '4-8') {
														$col1md = 'col-md-4';
														$col2md = 'col-md-8';
														if( get_sub_field('swap_columns') ) {
															$col1md = 'col-md-4 col-md-push-8';
															$col2md = 'col-md-8 col-md-pull-4';
														}
													} elseif ( get_sub_field('md_column_layout') == '8-4') {
														$col1md = 'col-md-8';
														$col2md = 'col-md-4';
														if( get_sub_field('swap_columns') ) {
															$col1md = 'col-md-8 col-md-push-4';
															$col2md = 'col-md-4 col-md-pull-8';
														}
													} elseif ( get_sub_field('md_column_layout') == '9-3') {
														$col1md = 'col-md-9';
														$col2md = 'col-md-3';
														if( get_sub_field('swap_columns') ) {
															$col1md = 'col-md-9 col-md-push-3';
															$col2md = 'col-md-3 col-md-pull-9';
														}
													} else {
														$col1md = 'col-md-6';
														$col2md = 'col-md-6';
														if( get_sub_field('swap_columns') ) {
															$col1md = 'col-md-6 col-md-push-6';
															$col2md = 'col-md-6 col-md-pull-6';
														}
													}
													/* Tablet */
													if( get_sub_field('sm_column_layout') == '3-9') {
														$col1sm = ' col-sm-3';
														$col2sm = ' col-sm-9';
														if( get_sub_field('swap_columns') ) {
															$col1sm = ' col-sm-3 col-sm-push-9';
															$col2sm = ' col-sm-9 col-sm-pull-3';
														}
													} elseif ( get_sub_field('sm_column_layout') == '4-8') {
														$col1sm = ' col-sm-4';
														$col2sm = ' col-sm-8';
														if( get_sub_field('swap_columns') ) {
															$col1sm = ' col-sm-4 col-sm-push-8';
															$col2sm = ' col-sm-8 col-sm-pull-4';
														}
													} elseif ( get_sub_field('sm_column_layout') == '6-6') {
														$col1sm = ' col-sm-6';
														$col2sm = ' col-sm-6';
														if( get_sub_field('swap_columns') ) {
															$col1sm = ' col-sm-6 col-sm-push-6';
															$col2sm = ' col-sm-6 col-sm-pull-6';
														}
													} elseif ( get_sub_field('sm_column_layout') == '8-4') {
														$col1sm = ' col-sm-8';
														$col2sm = ' col-sm-4';
														if( get_sub_field('swap_columns') ) {
															$col1sm = ' col-sm-8 col-sm-push-4';
															$col2sm = ' col-sm-4 col-sm-pull-8';
														}
													} elseif ( get_sub_field('sm_column_layout') == '9-3') {
														$col1sm = ' col-sm-9';
														$col2sm = ' col-sm-3';
														if( get_sub_field('swap_columns') ) {
															$col1sm = ' col-sm-9 col-sm-push-3';
															$col2sm = ' col-sm-3 col-sm-pull-9';
														}
													} else {
														$col1sm = '';
														$col2sm = '';
													}
													/* Mobile */
													if( get_sub_field('xs_column_layout') == '4-8') {
														$col1xs = ' col-xs-4';
														$col2xs = ' col-xs-8';
														if( get_sub_field('swap_columns') ) {
															$col1xs = ' col-xs-4 col-xs-push-8';
															$col2xs = ' col-xs-8 col-xs-pull-4';
														}
													} elseif ( get_sub_field('xs_column_layout') == '6-6') {
														$col1xs = ' col-xs-6';
														$col2xs = ' col-xs-6';
														if( get_sub_field('swap_columns') ) {
															$col1xs = ' col-xs-6 col-xs-push-6';
															$col2xs = ' col-xs-6 col-xs-pull-6';
														}
													} elseif ( get_sub_field('xs_column_layout') == '8-4') {
														$col1xs = ' col-xs-8';
														$col2xs = ' col-xs-4';
														if( get_sub_field('swap_columns') ) {
															$col1xs = ' col-xs-8 col-xs-push-4';
															$col2xs = ' col-xs-4 col-xs-pull-8';
														}
													} else {
														$col1xs = '';
														$col2xs = '';
													}
												 ?>
												<div id="row-<?php echo $rownumber; ?>" class="row">
												
													<div class="<?php echo($col1md); echo($col1sm); echo($col1xs); ?>">
														<div class="content-1 content clearfix"><?php the_sub_field('column_1'); ?></div>
													</div>
													
													<div class="<?php echo($col2md); echo($col2sm); echo($col2xs); ?>">
														<div class="content-2 content clearfix"><?php the_sub_field('column_2'); ?></div>
													</div>
													
												</div>
												
											<?php $rownumber++; endif;
											
											if (get_row_layout() == 'three_column_row' ): ?>
												
												<?php 
													/* Desktop */
													if( get_sub_field('md_column_layout') == '3-3-6') {
														$col1md = 'col-md-3';
														$col2md = 'col-md-3';
														$col3md = 'col-md-6';
													} elseif ( get_sub_field('md_column_layout') == '3-6-3') {
														$col1md = 'col-md-3';
														$col2md = 'col-md-6';
														$col3md = 'col-md-3';
													} elseif ( get_sub_field('md_column_layout') == '6-3-3') {
														$col1md = 'col-md-6';
														$col2md = 'col-md-3';
														$col3md = 'col-md-3';
													} else {
														$col1md = 'col-md-4';
														$col2md = 'col-md-4';
														$col3md = 'col-md-4';
													}
													/* Tablet */
													if( get_sub_field('sm_column_layout') == '4-4-4') {
														$col1sm = ' col-sm-4';
														$col2sm = ' col-sm-4';
														$col3sm = ' col-sm-4';
													} elseif ( get_sub_field('sm_column_layout') == '3-3-6') {
														$col1sm = ' col-sm-3';
														$col2sm = ' col-sm-3';
														$col3sm = ' col-sm-6';
													} elseif ( get_sub_field('sm_column_layout') == '3-6-3') {
														$col1sm = ' col-sm-3';
														$col2sm = ' col-sm-6';
														$col3sm = ' col-sm-3';
													} elseif ( get_sub_field('sm_column_layout') == '6-3-3') {
														$col1sm = ' col-sm-6';
														$col2sm = ' col-sm-3';
														$col3sm = ' col-sm-3';
													} elseif ( get_sub_field('sm_column_layout') == '6-6-12') {
														$col1sm = ' col-sm-6';
														$col2sm = ' col-sm-6';
														$col3sm = ' col-sm-12';
													} elseif ( get_sub_field('sm_column_layout') == '12-6-6') {
														$col1sm = ' col-sm-12';
														$col2sm = ' col-sm-6';
														$col3sm = ' col-sm-6';
													} else {
														$col1sm = '';
														$col2sm = '';
														$col3sm = '';
													}
													/* Mobile */
													if( get_sub_field('xs_column_layout') == '4-4-4') {
														$col1xs = ' col-xs-4';
														$col2xs = ' col-xs-4';
														$col3xs = ' col-xs-4';
													} elseif ( get_sub_field('xs_column_layout') == '6-6-12') {
														$col1xs = ' col-xs-6';
														$col2xs = ' col-xs-6';
														$col3xs = ' col-xs-12';
													} elseif ( get_sub_field('xs_column_layout') == '12-6-6') {
														$col1xs = ' col-xs-12';
														$col2xs = ' col-xs-6';
														$col3xs = ' col-xs-6';
													} else {
														$col1xs = '';
														$col2xs = '';
														$col3xs = '';
													}
												 ?>
												
												<div id="row-<?php echo $rownumber; ?>" class="row">
												
													<div class="<?php echo($col1md); echo($col1sm); echo($col1xs); ?>">
														<div class="content-1 content clearfix"><?php the_sub_field('column_1'); ?></div>
													</div>
													
													<div class="<?php echo($col2md); echo($col2sm); echo($col2xs); ?>">
														<div class="content-2 content clearfix"><?php the_sub_field('column_2'); ?></div>
													</div>
													
													<div class="<?php echo($col3md); echo($col3sm); echo($col3xs); ?>">
														<div class="content-3 content clearfix"><?php the_sub_field('column_3'); ?></div>
													</div>
													
												</div>
												
											<?php $rownumber++; endif;
											
											if (get_row_layout() == 'four_column_row' ): ?>
												
												<?php 
													/* Desktop */
													$col1md = 'col-md-3';
													$col2md = 'col-md-3';
													$col3md = 'col-md-3';
													$col4md = 'col-md-3';
													/* Tablet */
													if( get_sub_field('sm_column_layout') == '3-3-3-3') {
														$col1sm = ' col-sm-3';
														$col2sm = ' col-sm-3';
														$col3sm = ' col-sm-3';
														$col4sm = ' col-sm-3';
													} elseif ( get_sub_field('sm_column_layout') == '6-6-6-6') {
														$col1sm = ' col-sm-6';
														$col2sm = ' col-sm-6';
														$col3sm = ' col-sm-6';
														$col4sm = ' col-sm-6';
													} else {
														$col1sm = '';
														$col2sm = '';
														$col3sm = '';
														$col4sm = '';
													}
													/* Mobile */
													if( get_sub_field('xs_column_layout') == '6-6-6-6') {
														$col1xs = ' col-xs-6';
														$col2xs = ' col-xs-6';
														$col3xs = ' col-xs-6';
														$col4xs = ' col-xs-6';
													} else {
														$col1xs = '';
														$col2xs = '';
														$col3xs = '';
														$col4xs = '';
													}
												 ?>
												 
												<div id="row-<?php echo $rownumber; ?>" class="row">
												
													<div class="<?php echo($col1md); echo($col1sm); echo($col1xs); ?>">
														<div class="content-1 content clearfix"><?php the_sub_field('column_1'); ?></div>
													</div>
													
													<div class="<?php echo($col2md); echo($col2sm); echo($col2xs); ?>">
														<div class="content-2 content clearfix"><?php the_sub_field('column_2'); ?></div>
													</div>
													
													<?php 
													if( get_sub_field('sm_column_layout') == '6-6-6-6') { echo '<div class="clearfix visible-sm"></div>'; }
													if( get_sub_field('xs_column_layout') == '6-6-6-6') { echo '<div class="clearfix visible-xs"></div>'; }
													?>
													
													<div class="<?php echo($col3md); echo($col3sm); echo($col3xs); ?>">
														<div class="content-3 content clearfix"><?php the_sub_field('column_3'); ?></div>
													</div>
													
													<div class="<?php echo($col4md); echo($col4sm); echo($col4xs); ?>">
														<div class="content-4 content clearfix"><?php the_sub_field('column_4'); ?></div>
													</div>
													
												</div>
												
											<?php $rownumber++; endif;
											
											if (get_row_layout() == 'row_separator' ): ?>
											
												<div class="clearfix <?php the_sub_field('clear_screen_size'); ?>"></div>
											
											<?php endif;
											
											if (get_row_layout() == 'section_break' ): ?>
											
												<div class="clearfix section-break">
													<?php if (get_sub_field('use_section_icon')) { ?>
													<div class="section-break-icon"><?php the_sub_field('section_break_icon'); ?></div>
													<?php } ?>
												</div>
											
											<?php endif;
											
										endwhile;
									endif; ?>
									
								</div>
							</div>
						</section>
						
					<?php $sectionnumber++; endif; 
		
			    endwhile;
			else :
			
			    // no layouts found
			
			endif;
			
			?>
			
		</article>
	
	<?php endwhile; ?>
			
</div>

<?php get_footer(); ?>