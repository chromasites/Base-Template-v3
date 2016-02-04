</div><!-- #mainbg -->

<?php if (get_theme_mod('cs_layout') == 'centerstage') { ?>
</div><!-- .centerstage-wrapper -->
<?php } ?>

<div id="footerbg" class="clearfix">
	<div id="footer" class="container">
		
		<div class="row">
		  
		  <div class="col-lg-3 col-md-4 col-sm-5  col-lg-push-9 col-md-push-8 col-sm-push-7">
		    
		    <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
				<div class="input-group input-group-sm">
					<input id="search-input" type="text" class="form-control" placeholder="Search..." name="s">
					<span class="input-group-btn">
						<button class="btn btn-default" type="submit"><span class="fa fa-search"></span></button>
					</span>
				</div><!-- /input-group -->
			</form>
		    
		  </div>
		  
		  <div class="col-lg-9 col-md-8 col-sm-7 col-lg-pull-3 col-md-pull-4 col-sm-pull-5">
		    	<span id="copyright">&copy; <?php echo date("Y"); echo " "; bloginfo('name'); ?></span>
		    	<span id="login"><?php wp_loginout($_SERVER['REQUEST_URI']); ?></span>
		  </div>
		
		</div>
	
	</div>
</div><!-- #footerbg -->

<?php if (get_theme_mod('cs_layout') == 'letterhead') { ?>
</div><!-- .letterhead-wrapper -->
<?php } ?>

<div id="subfooter" class="container">
	<a id="chromasites" href="http://www.chromasites.com/" title="Like what you see? Get your Chroma Sites website today!" target="_blank" class="light">Website Design by Chroma Sites</a>
</div><!-- #subfooter -->

<?php wp_footer(); ?>

<!--<?php echo get_num_queries(); ?>q/<?php timer_stop(1); ?>s-->

</body>
</html>