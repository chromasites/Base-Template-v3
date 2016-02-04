<div id="social-share-buttons" class="hidden-xs">

	<div class="row">
		<div class="col-sm-2 col-sm-offset-1"><a href="https://twitter.com/share" class="twitter-share-button" data-count="none">Tweet</a></div>
		<div class="col-sm-2"><div class="fb-share-button" data-layout="button"></div></div>
		<div class="col-sm-2"><script type="IN/Share" data-counter="right"></script></div>
		<div class="col-sm-2"><div class="g-plusone" data-size="medium" data-annotation="none"></div></div>
		<div class="col-sm-3"><a id="emailafriend" title="Email this to a friend" href="mailto:?subject=Check%20out%20this%20post%20from%20<?php echo rawurlencode(bloginfo('name')); ?>&body=<?php echo rawurlencode(get_the_title()); ?>%0A%0A<?php print(urlencode(the_permalink())); ?>"><span class="fa fa-envelope"></span> Email</a></div>
	</div>
	
	<!-- FACEBOOK -->
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=502646873095879";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	
	<!-- TWITTER -->
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	
	<!-- LINKEDIN -->
	<script src="//platform.linkedin.com/in.js" type="text/javascript">
	 lang: en_US
	</script>
	
	<!-- GOOGLE+ -->
	<script type="text/javascript">
	  (function() {
	    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
	    po.src = 'https://apis.google.com/js/plusone.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
	  })();
	</script>
	
</div>