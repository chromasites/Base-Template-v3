<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1' /><![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php bloginfo('name'); ?><?php wp_title('|',true,''); ?></title>
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.ico" />
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_stylesheet_directory_uri(); ?>/images/apple-favicon.png">
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head(); ?>
<script>var $j = jQuery;</script>
<!--[if lt IE 9]>
<script src="/ie/dest/respond.min.js"></script>
<link href="<?php echo esc_url( home_url( '/' ) ); ?>ie/dest/respond-proxy.html" id="respond-proxy" rel="respond-proxy" />
<link href="/ie/dest/respond.proxy.gif" id="respond-redirect" rel="respond-redirect" />
<script src="/ie/dest/respond.proxy.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
<![endif]-->

<script type="text/javascript">
$j(document).ready(function(){
	$j(".colorbox").colorbox();
	$j(".colorboxinline").colorbox({inline:true, width:"600px"});
	$j(".colorboxurl").colorbox({iframe:true, width:"600px", height:"520"});
	$j(".colorboxbigurl").colorbox({iframe:true, width:"90%", height:"90%"});
});
WebFont.load({
	google: {
	  families: ['']
	}
});
$j('a[href*=#]:not([href=#])').click(function() {
    $('html, body').animate({
        scrollTop: $( $.attr(this, 'href') ).offset().top
    }, 500);
    return false;
});
</script>

<!-- GOOGLE ANALYTICS -->

</head>
<body <?php body_class( get_theme_mod( 'chromasites_layout_option' ) ); ?>>

<?php if ( get_theme_mod( 'chromasites_layout_option' ) == 'letterhead' ) { ?>
<div class="letterhead-wrapper"><!--Letterhead Theme -->
<?php } ?>


<div id="headerbg" class="clearfix">
	<div id="header" class="container">
		<div class="row">
			
			<div class="col-sm-6">
				<a itemprop="url" id="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>" rel="home">
				<?php if ( get_theme_mod( 'chromasites_upload_logo' ) ) : ?>
					<img itemprop="logo" src="<?php echo esc_url( get_theme_mod( 'chromasites_upload_logo' ) ); ?>" alt="<?php bloginfo('name'); ?>">
				<?php else : ?>
				<img src=" <?php echo get_stylesheet_directory_uri(); ?>/images/chromasites-wp-logo.png" alt="<?php bloginfo('name'); ?>">
				<?php endif; ?>
				</a>
			</div>
			
			<div class="col-sm-6">
				<div id="promo-area" class="pull-right">
					
					<?php get_template_part( 'socicons' ); ?>
					
					<div class="header-widgets">
					<?php if ( ! dynamic_sidebar( 'header-widget-area' ) ) : endif; ?>
					</div>
					
				</div>
			</div>
		
		</div>
	</div>
</div><!-- #headerbg -->

<?php if ( get_theme_mod( 'chromasites_layout_option' ) == 'centerstage' ) { ?>
<div class="centerstage-wrapper"><!--CenterStage Theme -->
<?php } ?>


<div id="navigationbg" class="clearfix">
	
	<nav class="navbar navbar-chroma" role="navigation">
	  <div class="container">
	  
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary-navbar-collapse">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo('name'); ?>">  <span class="fa fa-home"></span></a>
	    </div>
	
	    <!-- Nav Walker -->
	    <div id="primary-navbar-collapse" class="collapse navbar-collapse">
			<?php wp_nav_menu( array(
			'menu'              => 'primary',
			'theme_location'    => 'primary',
			'depth'             => 2,
			'container'         => '',
			'container_class'   => '',
			'container_id'      => '',
			'menu_class'        => 'nav navbar-nav',
			'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
			'walker'            => new wp_bootstrap_navwalker())
			); ?>
	      
	      <!-- Search Field -->
		      <ul class="nav navbar-nav navbar-right">
		        <li id="search-button" class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-search"></span></a>
		          <ul class="dropdown-menu" role="menu">
		            <li>
			            <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
			            	<input id="search-input" type="search" class="search-field" placeholder="Search..." value="" name="s" title="Search for:" />
			            </form>
		            </li>
		          </ul>
		        </li>
		      </ul>
	      
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container -->
	</nav>

</div><!-- #navigationbg -->

<div id="mainbg" class="clearfix">