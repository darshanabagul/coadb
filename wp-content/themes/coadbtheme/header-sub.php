<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php wp_head(); ?>
</head>
<body>
<nav class="inner-page-nav navbar-default navbar-fixed-top">
	  <div class="container">
	  	<div class="row">
    		<div class="col-xs-8 col-sm-4 col-md-4 col-lg-2">
					<div class="navbar-header">
					    <a href="<?php echo get_home_url();?>" class="logo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png"></a>
		    			<p class="logo-text">database & shop</p></a>
					</div>
			</div>
			<div class="col-xs-4 col-sm-8 col-md-8 col-lg-10">
				<div class="hidden-xs  text-right header-call-to-action-btn">
					<a href="" class="m-lr-15"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/heart.png"></a>
					<a href="" class="m-lr-15"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/shopping-cart.png"></a>
					<a href="" class="primary-btn">Log In</a>
				</div>
				<a href="javascript:void(0);" class="cd-nav-trigger backoverlay"><span></span></a>
				<div class="cd-side-nav">
					<a href="javascript:void(0);" class="cd-nav-trigger"><span></span></a>
					<?php 
			    		$args = array(
			    			'theme_location' => 'home',
			    			'menu_class' => 'nav navbar-nav navbar-right',
			    			'menu_item' => 'mymenu'
			    		);
			    	?>
		    		<?php wp_nav_menu( $args ); ?>
				</div>
			</div>
		</div>
	  </div>
	</nav>