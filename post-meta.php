<div class="post-meta row">	

	<div class="col-sm-12">
		<div class="byline"><span class="by">by </span><?php the_author_posts_link(); ?></div>
	</div>
	
	<div class="col-sm-8">
		<div class="categories"><span class="fa fa-folder-open"></span> <?php the_category(', '); ?></div>
	</div>
	
	<div class="col-sm-4 right-side">
		
		<span class="datetime">
			<span class="fa fa-clock-o"></span> <time><?php the_time('F jS, Y'); ?></time>
		</span>
		
		<?php if ( comments_open() ) { ?>
		<span class="comment-count">
			<?php comments_popup_link( '<span class="fa fa-comments"></span>', '<span class="fa fa-comments"></span> 1', '<span class="fa fa-comments"></span> %', 'comments-link', ''); ?>
		</span>
		<?php } ?>
		
	</div>
	
</div>