<div class="post-meta row">	

	<div class="byline col-xs-12">
		By <?php the_author_posts_link(); ?>
	</div>
	
	<div class="datetime col-sm-12">
		<span class="fa fa-clock-o"></span> <time><?php the_time('F jS, Y'); ?></time>
	</div>
	
	<div class="categories col-xs-9">
		<span class="fa fa-folder-open"></span> <?php the_category(', '); ?>
	</div>
	
	<div class="comment-count col-sm-3">
		<?php if ( comments_open() ) { ?>
		<span class="fa fa-comments"></span> <?php comments_popup_link( '0', '1', '%', 'comments-link', ''); ?>
		<?php } ?>
	</div>
	
</div>