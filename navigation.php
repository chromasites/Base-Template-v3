<?php function navclass() {
	if (get_theme_mod('cs_fixed_menu') == 'checked' && get_theme_mod('cs_layout') == 'compact') {
		echo 'navbar-fixed-top ';
	}
	echo get_theme_mod('cs_nav_style');
} ?>

<nav class="navbar navbar-chroma <?php navclass(); ?>" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo home_url(); ?>">
      	<?php if (get_theme_mod('cs_layout') == 'compact') { site_logo(); } else { ?>
      	<span class="fa fa-home visible-xs-inline"></span>
      	<?php } ?>
      </a>
    </div>
	<div class="collapse navbar-collapse">
        <?php if ( has_nav_menu( 'mobile' ) ) {
        	wp_nav_menu( array(
             'menu'              => 'mobile',
             'theme_location'    => 'mobile',
             'depth'             => 2,
             'container'         => 'div',
             'container_class'   => 'visible-xs-block',
             'container_id'      => 'mobile-menu',
             'menu_class'        => 'nav navbar-nav',
             'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
             'walker'            => new wp_bootstrap_navwalker())
             );
             
             wp_nav_menu( array(
             'menu'              => 'primary',
             'theme_location'    => 'primary',
             'depth'             => 2,
             'container'         => 'div',
             'container_class'   => 'hidden-xs',
             'container_id'      => 'primary-menu',
             'menu_class'        => 'nav navbar-nav',
             'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
             'walker'            => new wp_bootstrap_navwalker())
             );
             
             } else {
             
             wp_nav_menu( array(
        	'menu'              => 'primary',
        	'theme_location'    => 'primary',
        	'depth'             => 2,
        	'container'         => '',
        	'container_class'   => '',
        	'container_id'      => 'primary-menu',
        	'menu_class'        => 'nav navbar-nav',
        	'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
        	'walker'            => new wp_bootstrap_navwalker())
        	);
        } ?>
       </div>
    </div>
</nav>