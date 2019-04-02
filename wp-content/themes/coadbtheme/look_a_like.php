 <?php
	/*Template Name: Look A Like*/
	get_header('sub');
?>
	<!--Page Main content Start Here -->
	<div class="page-wrap">
		<?php get_header('search');?>
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
		<!-- Look-A-Like section Starts Here --> 
		<section class="space same-box-wrap information-section video-section-wrap bg-sky">
		    <div class="container">
		        <div class="row">
		            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
		            	<h2 class="heading">To see who your royal or noble twin is, click the below button to play our game.</h2>
		            	<a href="https://www.facebook.com/v3.2/dialog/oauth?client_id=323788071575702&state=024a2fbb809d5b1162a1bb037338dd18&response_type=code&sdk=php-sdk-5.7.0&redirect_uri=https%3A%2F%2Fcoadb.com%2Flookalike%2Findex.php&scope=user_photos%2Cpublic_profile" class="btn secondary-btn facebook-btn"><i class="fa fa-facebook fa-1x" aria-hidden="true"></i> Continue with Facebook</a>
		            </div>
		        </div>
		    </div>
		</section>
	</div>
	<!-- Look-A-Like section End Here -->
<?php get_footer(); ?>