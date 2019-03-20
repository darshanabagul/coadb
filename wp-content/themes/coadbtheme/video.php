<?php
/*Template Name: Video*/
 get_header('sub');
?>
	<!--Page Main content Start Here -->
	<div class="page-wrap">
		<?php get_header('search');?>
    	<!-- tab Starts Here -->
		<section class="tab-section hidden-xs">
	  		<div class="container">
		    	<div class="row">
			    	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			    		<ul>
			    			<?php 
				    			$args = array(
				    				'theme_location' => 'other',
				    				'container' => 'div',
				    				'container_class' => 'tab-wrap',
				    				'items_wrap' => '%3$s', // removes ul
				    			);
				    		?>
				    		<?php wp_nav_menu( $args ); ?>
						</ul>
			    	</div>
		   	 	</div>
	  		</div>
		</section>
		<!-- tab end Here -->
		<!-- Video section Starts Here --> 
		<section class="space same-box-wrap information-section  video-section-wrap bg-sky">
		   	<div class="container">
		       <div class="row video-wrap">
		           <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
		           		<div class="popup-video">
		    				<div class="embed-responsive embed-responsive-16by9">
		 						<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/urS_sIZWIws" allowfullscreen></iframe>
							</div>
		    			</div>
		           </div>
		           <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
		           		<div class="popup-video">
		   					<div class="embed-responsive embed-responsive-16by9">
		 						<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Ik4Mr4s3JLM&t" allowfullscreen></iframe>
							</div>
		           		</div>
		           </div>
		           <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
		           		<div class="popup-video">
		   					<div class="embed-responsive embed-responsive-16by9">
		 						<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/e-Mo_83-axY&t" allowfullscreen></iframe>
							</div>
		           		</div>
		           </div>
		           <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
		           		<div class="popup-video">
		   					<div class="embed-responsive embed-responsive-16by9">
		 						<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/7Wk7lVpxBtQ&t" allowfullscreen></iframe>
							</div>
		           		</div>
		           </div>
		           <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
		           		<div class="popup-video">
		   					<div class="embed-responsive embed-responsive-16by9">
		 						<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/I2Qy_FD2BHM" allowfullscreen></iframe>
							</div>
		           		</div>
		           </div>
		           <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
		           		<div class="popup-video">
		   					<div class="embed-responsive embed-responsive-16by9">
		 						<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/FQB3r1KUa_A" allowfullscreen></iframe>
							</div>
		           		</div>
		           </div>
		       </div>
		   </div>
		</section>
		<!-- Video section End Here -->
	</div>
<?php get_footer(); ?>
<script type="text/javascript">
	$('.popup-video').magnificPopup({
		delegate: 'a',
	    type: 'iframe',
	    gallery: {
	    	enabled:true
	  	}
	});
</script>