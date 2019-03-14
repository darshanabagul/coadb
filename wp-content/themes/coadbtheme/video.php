<?php
/*Template Name: Video*/
 get_header('sub');
?>
	<!--Page Main content Start Here -->
	<div class="page-wrap">
		<?php get_header('search');?>
    	<!-- tab Starts Here -->
		<section class="tab-section">
		  <div class="container">
		   	<?php 
		    		$args = array(
		    				'theme_location' => 'other',
		    				'container' => 'div', // parent container 
		    				'container_class' => 'row', //parent container ID
					        'depth' => 2,
					        'items_wrap' => '%3$s', // removes ul
					    	//'walker' => new Learning_Description_Walker // custom walker to replace li with div
		    		);
			    ?>
			<?php wp_nav_menu( $args ); ?>
		  </div>
		</section>
		<!-- tab end Here -->
		<!-- Video section Starts Here --> 
		<section class="video-section-wrap bg-sky">
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