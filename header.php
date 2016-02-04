<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1' /><![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php wp_title('|',true,''); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php get_template_part( 'favicons' ); ?>
<?php wp_head(); ?>
<script>var $j = jQuery;</script>
<!--[if lt IE 9]><script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script><![endif]-->

<script type="text/javascript">
$j(document).ready(function(){
	$j(".colorbox").colorbox();
	$j(".colorboxinline").colorbox({inline:true, width:"600px"});
	$j(".colorboxurl").colorbox({iframe:true, width:"600px", height:"520"});
	$j(".colorboxbigurl").colorbox({iframe:true, width:"90%", height:"90%"});
});

WebFontConfig = {
	google: { families: [ 'Noto+Serif:400,700,400italic:latin', 'Open+Sans:400italic,700italic,700,400:latin' ] }
};
(function() {
	var wf = document.createElement('script');
	wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
		'://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
	wf.type = 'text/javascript';
	wf.async = 'true';
	var s = document.getElementsByTagName('script')[0];
	s.parentNode.insertBefore(wf, s);
})();
</script>

<!-- GOOGLE ANALYTICS -->

</head>

<body <?php body_class( get_theme_mod('cs_layout') ); ?>>

<?php if (get_theme_mod('cs_layout') == 'compact') { get_template_part( 'navigation' ); } ?>

<?php if (get_theme_mod('cs_layout') == 'letterhead') { ?>
<div class="letterhead-wrapper boxed"><!--Letterhead Theme -->
<?php } ?>

<?php if (get_theme_mod('cs_layout') != 'compact') { ?>
<div id="headerbg" class="clearfix">
	<div id="header" class="container">
		<div id="top" class="row">
			
			<div class="col-sm-6">
				<a itemprop="url" id="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>" rel="home"><?php site_logo(); ?></a>
			</div>
			
			<div class="col-sm-6">
				<div id="promo-area">
					
					<?php get_template_part( 'socicons' ); ?>
					
				</div>
			</div>
		
		</div>
	</div>
</div><!-- #headerbg -->
<?php } ?>

<?php if (get_theme_mod('cs_layout') == 'centerstage') { ?>
<div class="centerstage-wrapper boxed"><!--CenterStage Theme -->
<?php } ?>

<?php if (get_theme_mod('cs_layout') != 'compact') {
	get_template_part( 'navigation' );
} ?>

<div id="mainbg" class="clearfix <?php if (get_theme_mod('cs_fixed_menu') == 'checked' && get_theme_mod('cs_layout') == 'compact') {
		echo 'fixednav'; } ?>">