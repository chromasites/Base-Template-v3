<div class="sidebar-content">

	<?php
	if ( ! dynamic_sidebar( 'page-widget-area' ) ) : endif; /* Page Widgets */
	if (!is_page()) { if ( ! dynamic_sidebar( 'blog-widget-area' ) ) : endif; } /* Blog Widgets */
	?>

</div><!-- .sidebarcontent -->