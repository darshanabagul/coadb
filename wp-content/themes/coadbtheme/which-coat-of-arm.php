 <?php
	/*Template Name: which-coat-of-arm*/
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
							<h1>Did my ancestors have a <span>coat of arms?</span> </h1>
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
	<section class="space same-box-wrap sparta-sec information-section">
		<div class="container">
			<div class="row">
	        <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
	          <h3>Discover Your Coat of Arms Today!</h3>
	          <p>We will help you find out which coat of arms is yours.</p>
	        </div>
	        <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
	          <button class="btn secondary-btn">Get Started Today</button>
	        </div>
	      	</div>
	    </div>
	</section>
	<!-- service section Starts Here --> 
	<section class="space bg-white service-section">
		<div class="container">
			<div class="row">
		        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		        	<h2>Why are there multiple coats of arms for the same surname?</h2>
		        </div>
		    </div>
	      	<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	            <div class="box">
	          	<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
	          		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/image_bunch.png" alt="service" class="img-responsive">
	          	</div>
	          		<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
				    	<h3>Common Misconceptions</h3>
		 			 		<p>Let me clear up a common misconception: For the most part, a coat of arms actually belonged to an individual person, and did not belong to the family or surname. Unfortunately, many heraldry websites out there on the internet do not make this point well-known, intentionally or not.</p>
		 			 		<h3>To help explain the concept clearly, let us pose a hypothetical example as follows:</h3>
		 			 		<p>John Allen lived in Suffolk, England and was granted a coat of arms by the King in 1450 AD. It was yellow with a black lion. However, much further north, in Cumbria, England, thirty-five years later, Peter Allen was granted a coat of arms by the King in 1485. It was blue with a white eagle. Since both men owned coats of arms, they were called <a href=""> “armigers”</a> .</p>
		 			 		<p>Next, let’s assume both John and Peter married and had children, and the right to bear the arms was inherited by each man’s eldest son. This pattern than repeats through the generations. Hence, each of these coats of arms became associated with different branches of the family. These branches may not be immediately related, although they may share a common ancestor from a distant time.</p>
				    </div>
					</div>	
			 	</div>
			</div>
	    </div>
	  </section>
	  <!-- service section Starts Here --> 
	  <!-- video section Starts Here --> 
	  <section class="space bg-sky">
		<div class="container">
			<div class="row video-wrap">
		        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
		        	<div class="popup-video">
					    <div class="embed-responsive embed-responsive-16by9">
						  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zXuMp_35u4I" allowfullscreen></iframe>
						</div>
		        	</div>
		        </div>
		        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
		        	<div class="embed-responsive embed-responsive-16by9">
					  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zXuMp_35u4I" allowfullscreen></iframe>
					</div>
		        </div>
	      	</div>
	    	</div>
	  </section>
	  <!-- video section End Here --> 
	  <!-- service section Starts Here --> 
	  <section class="space bg-white service-section">
		<div class="container">
		 	<div class="row">
	            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	            	<h2>OK, I understand why there are multiple coats of arms for the same surname, but how do I know which one is “mine”?</h2>
	            </div>
	      	</div>
			<div class="row">
			 	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	      			<div class="box">
				      	<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				      		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/service.png" alt="service" class="img-responsive">
				      	</div>
					    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
					    	<h3>Tracing Lineage</h3>
			 			 		<p>You would have to trace your lineage/ancestry back into history to see which, if any, coat of arms may have belonged to armigerous (coat of arms owning) members of your family tree. This requires good research skills, time, and access to libraries of information, all of which we possess in full, allowing us perform this unique, tailored service for you.</p>
			 			 		<h3>We provide a risk-free service:</h3>
			 			 		<p>if we can establish that you are related to an armigerous ancestor, we will inform you in a written document with relevant information, whereupon you will be invoiced according to the below (above?) pricing structure. <a href="">If we failed to establish a connection to an armigerous ancestor, you will not be billed!</a></p>
			 			 		<h3>Technicalities</h3>
			 			 		<p>To be clear, technically speaking, in the niche world of heraldry, the fact that your ancestor owned a coat of arms, does not necessarily mean you have the legal right to bear the arms: the rules are much more complicated for how that works. That is why we chose to put the word “mine” in quotation marks.</p>
					    </div>
					</div>
	 	    	</div>
			</div>
		</div>
	  </section>
    <!-- service section Starts Here --> 
    <!-- form section Starts Here --> 
	<section class="space bg-sky">
		<div class="container">
			<div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            	<div class="comment-wrap">
            		<div class="row">
            			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<h2>To get started, all you need to do is populate the below fields and hit the submit button :</h2>
			            </div>
			            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		            		<form>
		            			<div class="row">
									<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
										<div class="check-option option-active">
											<label class="custom-radio-container">I have my family tree done already</p>
										    	<input type="radio" checked="checked" name="select-option-radio">
										    	<span class="checkmark"></span>
										  	</label>
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
										<div class="check-option">
											<label class="custom-radio-container">I do not have my family tree done already</p>
										    <input type="radio" name="select-option-radio">
										    <span class="checkmark"></span>
										  </label>
										</div>
									</div>
								</div>
					    		<div class="row">
									<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
										<div class="custom-input">
											<div class="group">      
											  <input type="text" id="Name" name="Name" required>
											  <label>Name</label>
											  <!-- <p class="error">Full Name is required</p> -->
											</div>
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
										<div class="custom-input">
											<div class="group">      
											  <input id="custom-check" type="text" required>
											  <label>Email Address</label>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
										<div class="custom-input">
											<div class="group">      
											  <input type="text" required>
											  <label>Website</label>
											</div>
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
										<div class="custom-input">
											<div class="group">      
											  <input type="text" required>
											  <label>What surname are you interested in tracing the coat of arms for</label>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
										<div class="custom-input">
											<div class="group">      
											  <textarea required></textarea>
											  <label>Please provide information about your family.</label>
											</div>
											<p class="hint">(ex. full names, birth years, birth locations, death years etc. of parent & grandparent) as well as any stories you have heard about your family’s history, or other information that would be useful to our research. If you are missing pieces of info, just send us what you have.</p>
										</div>
									</div>
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 btn-box text-center">
										<button class="btn secondary-btn">Send</button>
									</div>
								</div>
							</form>
            	    	</div>
            		</div>		
            	</div>
            </div>
			</div>
		</div>
	</section>
    <!-- form section End Here -->
</div>

 <?php get_footer();?>