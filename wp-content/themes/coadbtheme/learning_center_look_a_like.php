 <?php
	/*Template Name: Look A Like*/
	get_header('sub');
?>


<!--Page Main content Start Here -->
		<div class="page-wrap">
			<!-- Banner Starts Here -->
			<div class="faq-main" id="searchBar">
				<div class="container">
					<div class="row">
						<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12">
							<div class="search-inner">
								<div class="row">
									<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12">
										<form>
											<div class="input-group">
												<input type="text" class="form-control" placeholder="Type your surname here">
												<span class="input-group-btn">
													<a type="button" class="btn btn-default" href="./surname_listing.html"><i class="fa fa-search"></i></a>
												</span>
											</div>
										</form>
									</div>
								</div>
                                <h1>Look-A-Like</h1>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Banner Ends Here -->
            
            
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
<!-- Look-A-Like section End Here -->


<?php get_footer(); ?>