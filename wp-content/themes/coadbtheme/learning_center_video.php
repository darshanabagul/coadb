<?php
/*Template Name: Video*/
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
                                <h1>Videos</h1>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Banner Ends Here -->
            
            
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
						    	'walker' => new Learning_Description_Walker // custom walker to replace li with div
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
	


<?php get_footer(); ?>