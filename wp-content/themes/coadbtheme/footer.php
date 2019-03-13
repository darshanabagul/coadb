<footer>
		<!-- Footer Starts Here -->
		<div class="footer-main">
			<div class="container ftr-top">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="ftr-soc">
				    		<a href="#"><i class="fa fa-facebook-f"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-google-plus"></i></a>
							<a href="#"><i class="fa fa-instagram"></i></a>
						</div>
						<div class="ftr-link">
							<?php 
					    		$args = array(
					    			'theme_location' => 'footer'
					    		);
					    	?>
				    		<?php wp_nav_menu( $args ); ?>
							<a href="#">Terms of Service</a>
							<a href="#">Privacy Policy</a>
							<a href="#">Return Policy</a>
						</div>
					</div>
				</div>
			</div>
			<div class="copyright-main">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="copyright-cont text-center">
								© 2019 Copyright Joy Empire Inc. | All rights reserved
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Footer Ends Here -->
	<?php wp_footer(); ?>
	 <script>
		window.onscroll = function() {myFunction()};
		var header = document.getElementById("myHeader");
		var sticky = header.offsetTop;
		function myFunction() {
		  if (window.pageYOffset > sticky) {
		    header.classList.add("sticky");
		  } else {
		    header.classList.remove("sticky");
		  }
		}
		$('.carousel1').carousel();

		$(document).ready(function(){
		  // Nav
		  var sidebar = $('.cd-side-nav'),
			sidebarTrigger = $('.cd-nav-trigger');
			sidebarTrigger.on('click', function(event){
				event.preventDefault();
				$([sidebar, sidebarTrigger]).toggleClass('nav-is-visible');
			});
		});
		$(".navbar-nav li").first().addClass("active");
	</script>
</footer>
</body>
</html>