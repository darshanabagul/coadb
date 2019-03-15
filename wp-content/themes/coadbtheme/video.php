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
		<section class="space same-box-wrap information-section video-section-wrap bg-sky">
		    <div class="container">
		        <div class="row">
		            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
		            	<div class="popup-video">
		            		<a href="https://www.youtube.com/watch?v=urS_sIZWIws" href="javascript:;" title="Click Here To Play Video" class="img-select">
						        <img src="https://img.youtube.com/vi/zXuMp_35u4I/maxresdefault.jpg" title="Play Video" class="img-responsive image">
						    </a>
		            	</div>
		            </div>
		            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
		            	<div class="popup-video">
		            		<a href="https://www.youtube.com/watch?v=Ik4Mr4s3JLM&t" href="javascript:;" title="Click Here To Play Video" class="img-select">
						        <img src="https://img.youtube.com/vi/zXuMp_35u4I/maxresdefault.jpg" title="Play Video" class="img-responsive image">
						    </a>
		            	</div>
		            </div>
		            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
		            	<div class="popup-video">
		            		<a href="https://www.youtube.com/watch?v=e-Mo_83-axY&t" href="javascript:;" title="Click Here To Play Video" class="img-select">
						        <img src="https://img.youtube.com/vi/zXuMp_35u4I/maxresdefault.jpg" title="Play Video" class="img-responsive image">
						    </a>
		            	</div>
		            </div>
		            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
		            	<div class="popup-video">
		            		<a href="https://www.youtube.com/watch?v=7Wk7lVpxBtQ&t" href="javascript:;" title="Click Here To Play Video" class="img-select">
						        <img src="https://img.youtube.com/vi/zXuMp_35u4I/maxresdefault.jpg" title="Play Video" class="img-responsive image">
						    </a>
		            	</div>
		            </div>
		            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
		            	<div class="popup-video">
		            		<a href="https://www.youtube.com/watch?v=I2Qy_FD2BHM" href="javascript:;" title="Click Here To Play Video" class="img-select">
						        <img src="https://img.youtube.com/vi/zXuMp_35u4I/maxresdefault.jpg" title="Play Video" class="img-responsive image">
						    </a>
		            	</div>
		            </div>
		            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
		            	<div class="popup-video">
		            		<a href="https://www.youtube.com/watch?v=FQB3r1KUa_A&t=15s" href="javascript:;" title="Click Here To Play Video" class="img-select">
						        <img src="https://img.youtube.com/vi/zXuMp_35u4I/maxresdefault.jpg" title="Play Video" class="img-responsive image">
						    </a>
		            	</div>
		            </div>
		        </div>
		    </div>
		</section>
		<!-- Video section End Here -->
	</div>
<?php get_footer(); ?>