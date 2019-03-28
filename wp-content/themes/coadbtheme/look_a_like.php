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
		                 <button class="btn secondary-btn facebook-btn"><i class="fa fa-facebook fa-1x" aria-hidden="true"></i> Continue with Facebook</button>
		            </div>
		        </div>
		    </div>
		</section>
	</div>
	<!-- Look-A-Like section End Here -->
<?php get_footer(); ?>