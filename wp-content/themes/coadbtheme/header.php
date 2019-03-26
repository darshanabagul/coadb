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
    						<a href="<?php echo get_home_url();?>" class="logo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" alt="coadb" title="coadb"></a>
    					  <p class="home-logo-text">database & shop</p>
    					</div>
    				</div>
					<div class="col-xs-4 col-sm-8 col-md-8 col-lg-10">
					<div class="hidden-xs  text-right header-call-to-action-btn">
						<a href="" class="m-lr-15"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/shopping-cart.png" alt="shopping cart" title="shopping cart"></a>
						<a href="" class="primary-btn">Log In</a>
					</div>
					<a href="javascript:void(0);" class="cd-nav-trigger backoverlay"><span></span></a>
					<div class="cd-side-nav">
						<a href="javascript:void(0);" class="cd-nav-trigger"><span></span></a>
					  	<div class="cd-side-nav">
							<a href="javascript:void(0);" class="cd-nav-trigger"><span></span></a>
							  <ul class="nav navbar-nav navbar-right">
							  		 <!--<li class="hidden-xs"><a href="./surname_detail_gallery_info.html">Merch</a></li>
						         	<li class="visible-xs dropdown">
							           <a href = "#" class = "dropdown-toggle" data-toggle = "dropdown">
							               Merch
							               <b class = "caret"></b>
							            </a>
							            <ul class = "dropdown-menu">
							              <li><a href="./surname_detail_gallery_info.html">Gallery & Info</a></li>
							              <li><a href="./surname_detail_purchase-jpg.html">Purchase jpg</a></li>
							              <li><a href="./surname_detail_buy_clothing_merch.html">buy clothing & merch</a></li>
							              <li ><a href="./surname_detail_which_one_is_mine.html">Which one is mine?</a></li>
							            </ul>
						            </li>-->
						            <li><a href="<?php echo get_home_url();?>/surname-listing/">Merch</a></li>
									<li><a href="<?php echo get_home_url();?>/about/">About</a></li>
									<li><a href="<?php echo get_home_url();?>/contact_us">Contact Us</a></li>
									<li class="hidden-xs"><a href="<?php echo get_home_url();?>/glossary.php">Learning center</a></li>
									<li class="visible-xs dropdown">
							            <a href = "#" class = "dropdown-toggle" data-toggle = "dropdown">
							               Learning center
							               <b class = "caret"></b>
							            </a>
							            <ul class = "dropdown-menu">
							              <li><a href="<?php echo get_home_url();?>/glossary.php">Glossary</a></li>
							              <li><a href="<?php echo get_home_url();?>/faq.php">Faq</a></li>
							              <li><a href="<?php echo get_home_url();?>/video.php">Videos</a></li>
							              <li ><a href="<?php echo get_home_url();?>/look_a_like.php">Look-a-like</a></li>
							            </ul>
						       		</li>
									<li class="visible-xs"><a href="" class="m-lr-15"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/shopping-cart.png" alt="shopping cart" title="shopping cart"></a></li>
									<li class="visible-xs"><a href="" class="primary-btn">Log In</a></li>
							  </ul>
						</div>
						<?php 
				    		//$args = array(
				    		//	'theme_location' => 'home',
				    		//	'menu_class' => 'nav navbar-nav navbar-right',
				    		//	'menu_item' => 'mymenu',
				    		//	'menu_id' => ''
				    		//);
				    	?>
			    		<?php //wp_nav_menu( $args ); ?>
					</div>
					</div>
			    </div>
    		</div>
		</div>
	    <div class="home-page-banner">
			<div class="container">
				<div class="row">
					<div class="col-lg-7 col-md-7 col-sm-6 col-xs-12">
						<div class="banner-search-inner search-inner">
							<h2>Search for your surname & find your historic <span>Coat of Arms </span> below </h2>
							<div class="">
								<?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
							</div>
						</div>
					</div>
					<div class="col-lg-5 col-md-5 col-sm-6	col-xs-12">
						<div id="carousel" class="banner-carousel-inner carousel slide carousel-fade" data-ride="carousel" data-interval="2500">
				      <div class="carousel-inner">
				        <div class="active item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/b1.png" alt="1 slide" title="1 slide" class="img-responsive"></div>
				        <div class="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/b2.png" alt="2 slide" title="2 slide" class="img-responsive"></div>
				        <div class="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/b3.png" alt="3 slide"  title="3 slide" class="img-responsive"></div>
				        <div class="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/b4.png" alt="4 slide"  title="4 slide" class="img-responsive"></div>
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


	
