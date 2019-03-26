<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php wp_head(); ?>
</head>
<body>


	<nav class="inner-page-nav navbar-fixed-top">
	  <div class="container">
	  	<div class="row">
    		<div class="col-xs-8 col-sm-4 col-md-4 col-lg-2">
				<div class="navbar-header">
				  <a class="" href="index.html"><a href="<?php echo get_home_url();?>" class="logo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png"></a>
	    		<p class="logo-text">database & shop</p></a>
				</div>
			</div>
			<div class="col-xs-4 col-sm-8 col-md-8 col-lg-10">
				<div class="hidden-xs  text-right header-call-to-action-btn">
					<a href="" class="m-lr-15"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/shopping-cart.png" alt="shopping cart" title="shopping cart"></a>
					<a href="" class="primary-btn">Log In</a>
				</div>
				<a href="javascript:void(0);" class="cd-nav-trigger backoverlay"><span></span></a>
				<!--<div class="cd-side-nav">
					<a href="javascript:void(0);" class="cd-nav-trigger"><span></span></a>
				  
					<?php 
			    		$args = array(
			    			'theme_location' => 'home',
			    			'menu_class' => 'nav navbar-nav navbar-right',
			    			'menu_item' => 'mymenu',
			    			'menu_id' => ''
			    		);
			    	?>
		    		<?php wp_nav_menu( $args ); ?>
				</div>-->
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
				    		//	'menu_item' => 'mymenu',z
				    		//	'menu_id' => ''
				    		//);
				    	?>
			    		<?php //wp_nav_menu( $args ); ?>
					</div>
				</div>
		</div>
	  </div>
	</nav>