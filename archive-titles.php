<?php
if ( is_category() ) {
	echo 'Viewing posts in the <em>'; echo single_cat_title() . '</em> category...';
} elseif ( is_tag() ) {
	echo 'Viewing posts about <em>'; echo single_tag_title().'</em>...';
} elseif ( is_author() ) {
	echo 'Viewing posts by <em>'; echo get_the_author().'</em>...';
} elseif ( is_year() ) {
	echo 'Viewing posts from <em>'; echo get_the_date('Y').'</em>';
} elseif ( is_month() ) {
	echo 'Viewing posts from <em>'; echo get_the_date('F Y').'</em>';
} elseif ( is_day() ) {
	echo 'Viewing posts from <em>'; echo get_the_date('l, F j, Y').'</em>';
} elseif ( is_post_type_archive() ) {
	echo post_type_archive_title();
} elseif (is_home() && get_option('page_for_posts')) {
	$blog_page_id = get_option('page_for_posts');
	echo get_page($blog_page_id)->post_title;
}else {
	echo 'Viewing Archives';
}

?>