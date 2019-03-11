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
    						<a href="#default" class="logo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png"></a>
    					  <p class="home-logo-text">database & shop</p>
    					</div>
    				</div>
    				<div class="col-xs-4 col-sm-8 col-md-8 col-lg-10">
    					<div class="hidden-xs  text-right header-call-to-action-btn">
    						<a href="" class="m-lr-15"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/heart.png"></a>
    						<a href="" class="m-lr-15"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/shopping-cart.png"></a>
    						<a href="" class="primary-login-btn">Log In</a>
    					</div>
    					<a href="javascript:void(0);" class="cd-nav-trigger"><span></span></a>
    				</div>
    			</div>
    		</div>
    		<div class="cd-side-nav">
    			<div class="cd-nav-trigger-mob"><a href="javascript:void(0);" class="cd-nav-trigger"><span></span></a></div>
				  <ul class="nav">
				  		<?php 
				    		$args = array(
				    				'theme-location' => 'primary',
				    				'menu_class' => 'nav'
				    		);
				    	?>
				    	<?php wp_nav_menu( $args ); ?>
				    <li><a href="" class="m-lr-15"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/heart.png"></a></li>
	    			<li><a href="" class="m-lr-15"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/shopping-cart.png"></a></li>
	    			<li><a href="" class="primary-login-btn">Log In</a></li>
				  </ul>
				</div>
		</div>
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="item active">
            <img class="hidden-xs" src="<?php echo get_stylesheet_directory_uri(); ?>/images/banner-1.jpg" alt="First slide" style="width: 100%;">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/banner-1-mob.jpg" alt="First slide" class="visible-xs img-responsive" style="width: 100%;">
          </div>
          <div class="item">
            <img class="hidden-xs" src="<?php echo get_stylesheet_directory_uri(); ?>/images/banner-1.jpg" alt="Second slide" style="width: 100%;">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/banner-1-mob.jpg" alt="First slide" class="visible-xs img-responsive" style="width: 100%;">
          </div>
          <div class="item">
            <img class="hidden-xs" src="<?php echo get_stylesheet_directory_uri(); ?>/images/banner-1.jpg" alt="Third slide" style="width: 100%;">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/banner-1-mob.jpg" alt="First slide" class="visible-xs img-responsive" style="width: 100%;">
          </div>
        </div>
        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
          <i class="fa fa-angle-left" aria-hidden="true"></i>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
        	<i class="fa fa-angle-right" aria-hidden="true"></i>
        </a>
        <section class="bannr-overlay">
	        <div class="container">
		      	<div class="row">
		      		<div class="col-xs-12 col-sm-8 col-md-8 col-lg-7">
		      			<div class="banner-main-text">
				          <h1 class="search_for_your_surname">
				            Search for your surname & find </br> your historic <span>Coat of Arms </span> below 
				          </h1>
				          <div class="search-wrap">
				            <form class="example">
										  <input type="text" placeholder="Type your surname here" name="search">
										  <button type="submit"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/magnifier-tool.png"> </button>
										</form>
				          </div>                
				        </div>
		      		</div>
		      	</div>
		      </div>
		    </section>
      </div>   
    </section>
    <!-- banner End Here -->

<!-- nav Starts Here -->
		<nav class="navbar hidden-xs" id="myHeader">
		  <div class="container custom-nav">
		    <div class="collapse navbar-collapse" id="myNavbar">
		    	<?php 
		    		$args = array(
		    				'theme-location' => 'primary',
		    				'menu_class' => 'nav navbar-nav',
		    				'menu_item' => 'mymenu'
		    		);
		    	?>
		    	<?php wp_nav_menu( $args ); ?>
		    </div>
		  </div>
		</nav>
<!-- nav end Here -->


	
