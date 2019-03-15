<?php
/*Template Name: Buy clothing & merch*/
 get_header('sub');
?>
<!--Page Main content Start Here -->
<div class="page-wrap which_one_is_mine_page">
	<!-- Banner Starts Here -->
	<div class="search-dtls-main" id="searchBar">
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
						<h1><span>Allen Family</span> Crest, Coat of Arms and Name History</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- tab Starts Here -->
	<section class="tab-section hidden-xs">
	  <div class="container">
	    <div class="row">
	    	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	    		<ul>
	    			<?php 
		    			$args = array(
		    				'theme_location' => 'surname',
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
	<!-- Banner Ends Here -->
	<section class="space same-box-wrap clothing-items-section bg-sky">
		<div class="container">
			<div class="row">
            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
            	<div class="vertical-filter bg-white">
            	  <p class="filter-head"> Select Your Coat of Arms </p>
            	  <section class="my-vertical-filter slider filter-items">
					<div>
						<div class="list">
            	  			<label class="btn btn-radio btn-block active">
								<input type="radio" id="1" name="select-option-img" value="1" />
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/s1.png" alt="" title="" class="img-responsive">
								<div class="top-right">01</div>
							</label>
            	  		</div>
					</div>
					<div>
						<div class="list">
            	  			<label class="btn btn-radio btn-block">
								<input type="radio" id="1" name="select-option-img" value="1" />
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/s1.png" alt="" title="" class="img-responsive">
								<div class="top-right">02</div>
							</label>
            	  		</div>
					</div>
				    <div>
					    <div class="list">
  	  						<label class="btn btn-radio btn-block">
									<input type="radio" id="3" name="select-option-img" value="1" />
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/s1.png" alt="" title="" class="img-responsive">
									<div class="top-right">03</div>
							</label>
			  	  		</div>
					</div>
					<div>
						<div class="list">
            	  			<label class="btn btn-radio btn-block">
								<input type="radio" id="1" name="select-option-img" value="1" />
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/s3.png" alt="" title="" class="img-responsive">
								<div class="top-right">04</div>
							</label>
            	  		</div>
					</div>
					<div>
						<div class="list">
            	  			<label class="btn btn-radio btn-block">
								<input type="radio" id="1" name="select-option-img" value="1" />
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/s3.png" alt="" title="" class="img-responsive">
								<div class="top-right">05</div>
							</label>
            	  		</div>
								  </div>
								  <div>
							      <div class="list">
            	  			<label class="btn btn-radio btn-block">
												<input type="radio" id="1" name="select-option-img" value="1" />
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/s3.png" alt="" title="" class="img-responsive">
												<div class="top-right">06</div>
											</label>
            	  		</div>
							    </div>
							    <div>
							      <div class="list">
            	  			<label class="btn btn-radio btn-block">
												<input type="radio" id="1" name="select-option-img" value="1" />
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/s3.png" alt="" title="" class="img-responsive">
												<div class="top-right">07</div>
											</label>
            	  		</div>
							    </div>
							    <div>
							      <div class="list">
            	  			<label class="btn btn-radio btn-block">
												<input type="radio" id="1" name="select-option-img" value="1" />
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/s3.png" alt="" title="" class="img-responsive">
												<div class="top-right">08</div>
											</label>
            	  		</div>
							    </div>
							    <div>
							      <div class="list">
            	  			<label class="btn btn-radio btn-block">
												<input type="radio" id="1" name="select-option-img" value="1" />
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/s3.png" alt="" title="" class="img-responsive">
												<div class="top-right">09</div>
											</label>
            	  		</div>
							    </div>
							    <div>
							      <div class="list">
            	  			<label class="btn btn-radio btn-block">
												<input type="radio" id="1" name="select-option-img" value="1" />
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/s3.png" alt="" title="" class="img-responsive">
												<div class="top-right">10</div>
											</label>
            	  		</div>
							    </div>
								</section>
            	</div>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
            	<div class="row card-wrap">
					 		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
					      <div class="card-stamp">
					      	<div class="image-box">
					      		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/buy1.png" class="img-responsive">
					      	</div>
					      	<div class="rating-box m-0">
					      		<p class="m-0">
					      			<i class="fa fa-star" aria-hidden="true"></i>
					      			<i class="fa fa-star" aria-hidden="true"></i>
					      			<i class="fa fa-star" aria-hidden="true"></i>
					      			<i class="fa fa-star" aria-hidden="true"></i>
					      			<i class="fa fa-star-o" aria-hidden="true"></i>
					      		</p>
					      	</div>
					      	<div class="detail-box text-center">
					      		<p class="price">$33.99</p>
					      		<p class="info">Coat of Arms T-Shirt</p>
					      		<button class="btn primary-btn">Buy Now</button>
					      	</div>
					      </div>
					    </div>

					    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
					      <div class="card-stamp">
					      	<div class="image-box">
					      		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/buy2.png" class="img-responsive clothing-img">
					      	</div>
					      	<div class="rating-box m-0">
					      		<p class="m-0">
					      			<i class="fa fa-star" aria-hidden="true"></i>
					      			<i class="fa fa-star" aria-hidden="true"></i>
					      			<i class="fa fa-star" aria-hidden="true"></i>
					      			<i class="fa fa-star" aria-hidden="true"></i>
					      			<i class="fa fa-star-o" aria-hidden="true"></i>
					      		</p>
					      	</div>
					      	<div class="detail-box text-center">
					      		<p class="price">$24.99</p>
					      		<p class="info">Coat of Arms Mug</p>
					      		<button class="btn primary-btn">Buy Now</button>
					      	</div>
					      </div>
					    </div>

	            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
					      <div class="card-stamp">
					      	<div class="image-box">
					      		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/buy3.png" class="img-responsive clothing-img">
					      	</div>
					      	<div class="rating-box m-0">
					      		<p class="m-0">
					      			<i class="fa fa-star" aria-hidden="true"></i>
					      			<i class="fa fa-star" aria-hidden="true"></i>
					      			<i class="fa fa-star" aria-hidden="true"></i>
					      			<i class="fa fa-star" aria-hidden="true"></i>
					      			<i class="fa fa-star-o" aria-hidden="true"></i>
					      		</p>
					      	</div>
					      	<div class="detail-box text-center">
					      		<p class="price">$12.99</p>
					      		<p class="info">Coat of Arms Cap</p>
					      		<button class="btn primary-btn">Buy Now</button>
					      	</div>
					      </div>
					    </div>
					    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
					      <div class="card-stamp">
					      	<div class="image-box">
					      		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/buy1.png" class="img-responsive">
					      	</div>
					      	<div class="rating-box m-0">
					      		<p class="m-0">
					      			<i class="fa fa-star" aria-hidden="true"></i>
					      			<i class="fa fa-star" aria-hidden="true"></i>
					      			<i class="fa fa-star" aria-hidden="true"></i>
					      			<i class="fa fa-star" aria-hidden="true"></i>
					      			<i class="fa fa-star-o" aria-hidden="true"></i>
					      		</p>
					      	</div>
					      	<div class="detail-box text-center">
					      		<p class="price">$22.99</p>
					      		<p class="info">Coat of Arms T-Shirt</p>
					      		<button class="btn primary-btn">Buy Now</button>
					      	</div>
					      </div>
					    </div>

					    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
					      <div class="card-stamp">
					      	<div class="image-box">
					      		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/buy2.png" class="img-responsive clothing-img">
					      	</div>
					      	<div class="rating-box m-0">
					      		<p class="m-0">
					      			<i class="fa fa-star" aria-hidden="true"></i>
					      			<i class="fa fa-star" aria-hidden="true"></i>
					      			<i class="fa fa-star" aria-hidden="true"></i>
					      			<i class="fa fa-star" aria-hidden="true"></i>
					      			<i class="fa fa-star-o" aria-hidden="true"></i>
					      		</p>
					      	</div>
					      	<div class="detail-box text-center">
					      		<p class="price">$24.99</p>
					      		<p class="info">Coat of Arms Mug</p>
					      		<button class="btn primary-btn">Buy Now</button>
					      	</div>
					      </div>
					    </div>

	            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
					      <div class="card-stamp">
					      	<div class="image-box">
					      		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/buy3.png" class="img-responsive clothing-img">
					      	</div>
					      	<div class="rating-box m-0">
					      		<p class="m-0">
					      			<i class="fa fa-star" aria-hidden="true"></i>
					      			<i class="fa fa-star" aria-hidden="true"></i>
					      			<i class="fa fa-star" aria-hidden="true"></i>
					      			<i class="fa fa-star" aria-hidden="true"></i>
					      			<i class="fa fa-star-o" aria-hidden="true"></i>
					      		</p>
					      	</div>
					      	<div class="detail-box text-center">
					      		<p class="price">$42.99</p>
					      		<p class="info">Coat of Arms Cap</p>
					      		<button class="btn primary-btn">Buy Now</button>
					      	</div>
					      </div>
					    </div>
					    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
					      <div class="card-stamp">
					      	<div class="image-box">
					      		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/buy1.png" class="img-responsive">
					      	</div>
					      	<div class="rating-box m-0">
					      		<p class="m-0">
					      			<i class="fa fa-star" aria-hidden="true"></i>
					      			<i class="fa fa-star" aria-hidden="true"></i>
					      			<i class="fa fa-star" aria-hidden="true"></i>
					      			<i class="fa fa-star" aria-hidden="true"></i>
					      			<i class="fa fa-star-o" aria-hidden="true"></i>
					      		</p>
					      	</div>
					      	<div class="detail-box text-center">
					      		<p class="price">$54.99</p>
					      		<p class="info">Coat of Arms T-Shirt</p>
					      		<button class="btn primary-btn">Buy Now</button>
					      	</div>
					      </div>
					    </div>
					    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
					      <div class="card-stamp">
					      	<div class="image-box">
					      		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/buy2.png" class="img-responsive clothing-img">
					      	</div>
					      	<div class="rating-box m-0">
					      		<p class="m-0">
					      			<i class="fa fa-star" aria-hidden="true"></i>
					      			<i class="fa fa-star" aria-hidden="true"></i>
					      			<i class="fa fa-star" aria-hidden="true"></i>
					      			<i class="fa fa-star" aria-hidden="true"></i>
					      			<i class="fa fa-star-o" aria-hidden="true"></i>
					      		</p>
					      	</div>
					      	<div class="detail-box text-center">
					      		<p class="price">$33.99</p>
					      		<p class="info">Coat of Arms Mug</p>
					      		<button class="btn primary-btn">Buy Now</button>
					      	</div>
					      </div>
					    </div>

	            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
					      <div class="card-stamp">
					      	<div class="image-box">
					      		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/buy3.png" class="img-responsive clothing-img">
					      	</div>
					      	<div class="rating-box m-0">
					      		<p class="m-0">
					      			<i class="fa fa-star" aria-hidden="true"></i>
					      			<i class="fa fa-star" aria-hidden="true"></i>
					      			<i class="fa fa-star" aria-hidden="true"></i>
					      			<i class="fa fa-star" aria-hidden="true"></i>
					      			<i class="fa fa-star-o" aria-hidden="true"></i>
					      		</p>
					      	</div>
					      	<div class="detail-box text-center">
					      		<p class="price">$23.99</p>
					      		<p class="info">Coat of Arms Cap</p>
					      		<button class="btn primary-btn">Buy Now</button>
					      	</div>
					      </div>
					    </div>
              </div>
              <div class="row">
						  	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						  		<div class="pagination-main text-center clearfix">
								<ul class="pagination">
								   <li><a href ="#" class="color">Prev</a></li>
								   <li class="active"><a href="#">1</a></li>
								   <li><a href="#">2</a></li>
								   <li><a href="#">3</a></li>
								   <li><a href="#" class="color">Next</a></li>
								</ul>
							</div>
						  	</div>
						  </div>
					  </div>
				   
				    

				  </div>
				  
				</div>
			</section>

<?php get_footer(); ?>