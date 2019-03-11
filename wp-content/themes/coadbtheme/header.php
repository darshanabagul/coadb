<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php wp_head(); ?>
</head>
<body>

<!-- banner Starts Here -->
    <section class="main-banner">
    	<div class="header">
    		<div class="container">
    			<div class="row">
    				<div class="col-xs-8 col-sm-4 col-md-4 col-lg-2">
    					<div class="home-logo">
    						<a href="./index.html" class="logo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png"></a>
    					  <p class="home-logo-text">database & shop</p>
    					</div>
    				</div>
    				<div class="col-xs-4 col-sm-8 col-md-8 col-lg-10">
    					<div class="hidden-xs  text-right header-call-to-action-btn">
    						<a href="" class="m-lr-15"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/heart.png"></a>
    						<a href="" class="m-lr-15"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/shopping-cart.png"></a>
    						<a href="" class="primary-btn">Log In</a>
    					</div>
    					<a href="javascript:void(0);" class="cd-nav-trigger backoverlay"><span></span></a>
    				</div>
    			</div>
    		</div>
    		<div class="cd-side-nav">
    			<div class="cd-nav-trigger-mob"><a href="javascript:void(0);" class="cd-nav-trigger"><span></span></a></div>
	    			<?php 
			    		$args = array(
			    				'theme_location' => 'home',
			    				'menu_class' => 'nav',
			    				'menu_item' => 'mymenu'
			    		);
			    	?>
			    	<?php wp_nav_menu( $args ); ?>
				</div>
			</div>
		    <div class="home-page-banner">
				<div class="container">
					<div class="row">
						<div class="col-lg-7  col-md-7  col-sm-6 col-xs-12">
							<div class="banner-search-inner search-inner">
								<h2>Search for your surname & find your historic <span>Coat of Arms </span> below </h2>
								<div class="">
									<form class="">
										<div class="input-group">
											<input type="text" class="form-control" placeholder="Type your surname here">
											<span class="input-group-btn">
												<button type="button" class="btn btn-default"><i class="fa fa-search"></i></button>
											</span>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="col-lg-5  col-md-5  col-sm-6 col-xs-12">
							<div id="carousel" class="banner-carousel-inner carousel slide carousel-fade" data-ride="carousel" data-interval="2500">
						      	<div class="carousel-inner">
						        	<div class="active item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/t-shirt.png" alt="1 slide" class="img-responsive"></div>
						        	<div class="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/t-shirt1.png" alt="2 slide" class="img-responsive"></div>
						        </div>
					    	</div>
						</div>
					</div>
				</div>
			</div>
      </div>   
    </section>
    <!-- banner End Here -->

	<!-- nav Starts Here -->
		<nav class="navbar hidden-xs" id="myHeader">
		  <div class="container custom-nav">
		    <div class="collapse navbar-collapse" id="myNavbar">
		    	<?php 
		    		$args = array(
		    				'theme_location' => 'home',
		    				'menu_class' => 'nav navbar-nav',
		    				'menu_item' => 'mymenu'
		    		);
		    	?>
		    	<?php wp_nav_menu( $args ); ?>
		    </div>
		  </div>
		</nav>
	<!-- nav end Here -->



	
