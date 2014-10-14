</div><!-- #mainbg -->

<?php if ( get_theme_mod( 'chromasites_layout_option' ) == 'centerstage' ) { ?>
</div><!-- .centerstage-wrapper -->
<?php } ?>


<div id="footerbg" class="clearfix">
	<div id="footer" class="container">
	
		<?php wp_nav_menu( array(
		        'theme_location'    => 'footer',
		        'depth'             => 1,
		        'container'         => false,
		        'menu_class'        => 'footer-nav pull-left' )
		    );
		?>
		
		<span id="copyright" class="pull-right">&copy;<?php echo date("Y"); echo " "; bloginfo('name'); ?></span>
	
	</div>
</div><!-- #footerbg -->

<?php if ( get_theme_mod( 'chromasites_layout_option' ) == 'letterhead' ) { ?>
</div><!-- .letterhead-wrapper -->
<?php } ?>

<div id="subfooter" class="container">
	<a id="chromasites" href="http://www.chromasites.com/" title="Like what you see? Get your Chroma Sites website today!" target="_blank" class="light">Small Business Websites from Chroma Sites</a>
</div><!-- #subfooter -->

<?php wp_footer(); ?>

<!--<?php echo get_num_queries(); ?>q/<?php timer_stop(1); ?>s-->

</body>
</html>