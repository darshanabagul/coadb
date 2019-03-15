 <?php
	/*Template Name: Look A Like*/
	get_header('sub');
?>
	<!--Page Main content Start Here -->
	<div class="page-wrap">
		<?php get_header('search');?>
		<!-- tab Starts Here -->
		<section class="tab-section">
		  <div class="container">
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
		</section>
		<!-- tab end Here -->
		<!-- Look-A-Like section Starts Here --> 
		<section class="video-section-wrap bg-sky">
		    <div class="container">
		        <div class="row">
		            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
		            	<h2 class="heading">Which noble person from history do you look like?</h2>
		                <button class="btn secondary-btn facebook-btn"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i> Continue with Facebook</button>
		            </div>
		        </div>
		    </div>
		</section>
	</div>
	<!-- Look-A-Like section End Here -->
<?php get_footer(); ?>