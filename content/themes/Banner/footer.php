	<footer>
		&copy;<?php echo date("Y"); echo " "; bloginfo('name'); ?>. All rights reserved. Branding and website design by <a href="http://www.redchalkstudios.com">Red Chalk Studios, Inc.</a>
	</footer>
	
	<?php wp_footer(); ?>
			
	<!--<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jsmobile.js"></script>-->
			
	<!-- START JS FOR TEAM BIOS -->
	<script src="<?php bloginfo('template_url'); ?>/js/grid.js"></script>
	<script>
		$(function() {
			Grid.init();
		});
	</script>	
	<!-- END JS FOR TEAM BIOS -->
			
	<!-- START JS FOR MOBILE NAVIGATION -->
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/cycle2.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/cycle2-auto-height.js"></script>
	<!--END JS FOR MOBILE NAVIGATION-->
			
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jsscripts.js"></script>  	
		
	<script>		
		var ua = navigator.userAgent.toLowerCase();
		var isAndroid = ua.indexOf("android") > -1 && ua.indexOf("mobile");
				
		if ((navigator.userAgent.match(/iPad/i) != null) || (navigator.userAgent.match(/iPhone/i) != null) || (navigator.userAgent.match(/iPod/i) != null) || (isAndroid)) { 
			document.getElementById("welder").style.display = "none";
			document.getElementById("powerlines").style.display = "none";
			document.getElementById("motherboard").style.display = "none";
			document.getElementById("highways").style.display = "none";
		}
			
		function callback () {
			document.querySelector('#welder').play();
			document.querySelector('#powerlines').play();
			document.querySelector('#motherboard').play();
			document.querySelector('#highways').play();
		}
		window.addEventListener("load", callback, false);			
	</script>
  </body>
</html>