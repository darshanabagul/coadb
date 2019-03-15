<footer>
		<!-- Footer Starts Here -->
		<div class="footer-main">
			<div class="container ftr-top">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="ftr-soc">
				    		<a href="https://www.facebook.com/COADB-915440015218550" target="_blank" rel="nofollow" title="Facebook"><i class="fa fa-facebook-f"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="https://plus.google.com/109578789296952154822/" target="_blank"><i class="fa fa-google-plus"></i></a>
							<a href="#"><i class="fa fa-instagram"></i></a>
						</div>
						<div class="ftr-link">
							<?php 
					    		$args = array(
					    			'theme_location' => 'footer',        
					    			'menu' => 'main-menu',
							        'container' => 'a', // parent container 
							        'container_id' => 'my_nav', //parent container ID
							        'depth' => 1,
							        'items_wrap' => '%3$s', // removes ul
							    	'walker' => new Description_Walker // custom walker to replace li with div
					    		);
					    	?>
				    		<?php wp_nav_menu( $args ); ?>
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
	<script>
			$(document).ready(function(){
			  // Nav
			  var sidebar = $('.cd-side-nav'),
				sidebarTrigger = $('.cd-nav-trigger');
				sidebarTrigger.on('click', function(event){
					event.preventDefault();
					$([sidebar, sidebarTrigger]).toggleClass('nav-is-visible');
				});
        
        	$('.popup-video').magnificPopup({
					delegate: 'a',
				  type: 'iframe',
				  gallery:{
				    enabled:true
				  }
				});

			$('.popup-modal').magnificPopup({
			    type: 'inline',
			    preloader: false,
			    focus: '#username',
			    modal: true
			}); 

			$("input[name='select-option-radio']",$('.check-option')).change(
		    function(e)
		    {
		    	e.preventDefault();
		    	var elems = document.querySelectorAll(".check-option");
				  [].forEach.call(elems, function(el) {
				    el.classList.remove("option-active");
				  });
		    	$(this).closest('.check-option').toggleClass("option-active");
		    	return false;
		    });
			})
		$(document).ready(function(){
			  // Nav
			  var sidebar = $('.cd-side-nav'),
				sidebarTrigger = $('.cd-nav-trigger');
				sidebarTrigger.on('click', function(event){
					event.preventDefault();
					$([sidebar, sidebarTrigger]).toggleClass('nav-is-visible');
				});

			$("input[name='select-option-radio']",$('.check-option')).change(
		    function(e)
		    {
		    	e.preventDefault();
		    	var elems = document.querySelectorAll(".check-option");
				  [].forEach.call(elems, function(el) {
				    el.classList.remove("option-active");
				  });
		    	$(this).closest('.check-option').toggleClass("option-active");
		    	return false;
		    });
			});
	$(document).ready(function(){
        wh = $(window).width();
        if (wh >= 767)
        {
          $(".my-vertical-filter").slick({
					  dots: false,
					  infinite: false,
					  speed: 300,
					  slidesToShow: 5,
					  slidesToScroll: 5,
					  vertical:true,
					  responsive: [
					    {
					      breakpoint: 1024,
					      settings: {
					        slidesToShow: 5,
					        slidesToScroll: 5,
					        infinite: false,
					        dots: false
					      }
					    }
					  ]
				  });
        }
        else
        {
         	$(".my-vertical-filter").slick({
            dots: false,
					  infinite: false,
					  speed: 300,
					  slidesToShow: 2,
					  slidesToScroll: 2,
					  swipe:true,
					  touchMove:true,
					  vertical:false,
					  responsive: [
					    {
					      breakpoint: 600,
					      settings: {
					        slidesToShow: 2,
					        slidesToScroll: 2,
					        infinite: false
					      }
					    },
					    {
					      breakpoint: 480,
					      settings: {
					        slidesToShow: 1,
					        slidesToScroll: 1,
					        infinite: false
					      }
					    }
					  ]
					});
			  }
      });
		</script>
</footer>
</body>
</html>