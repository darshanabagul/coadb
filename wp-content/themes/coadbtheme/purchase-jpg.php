<?php
/*Template Name: Purchase-jpg*/
 get_header('sub');
?>
<!--Page Main content Start Here -->
<div class="page-wrap which_one_is_mine_page">
	<?php get_header('search');?>
	<!-- tab Starts Here -->
	<section class="tab-section hidden-xs">
	  <div class="container">
	    <div class="row">
	    	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	    		<ul class="tab-wrap">
	    			<?php $page = find_coat_of_arms();?>
                    <li><a href="<?php echo get_home_url();?>/index.php/surnames/<?php echo $page['page_slug']?>">Gallery & Info</a></li>
                    <li class="active"><a href="">Purchase jpg</a></li>
                    <li ><a href="<?php echo esc_url( add_query_arg( 'surname', $page['page_slug'] , site_url( '/index.php/buy-clothing-merch/' ) ) )?>">buy clothing & merch</a></li>
                    <li ><a href="<?php echo esc_url( add_query_arg( 'surname', $page['page_slug'] , site_url( '/index.php/which-coat-of-mine/' ) ) )?>">Which one is mine?</a></li>
                </ul>
	    	</div>
	    </div>
	  </div>
	</section>
	<!-- tab end Here -->
	<section class="space same-box-wrap bg-white purchase-jpg-section">
	<div class="container">
	 	<div class="row purchase-jpg">
	 		<?php
			if (!empty($coat_of_arms = find_coat_of_arms(8))) {?>
				<?php if(!empty($coat_of_arms['images'])) { ?>
					<?php foreach($coat_of_arms['images'] as $key=>$img) { ?>
						<?php foreach ($img as $k=>$v) { ?>
							<div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
						      	<div class="card-stamp">
							      	<div class="image-box">
							      		<img src="<?php echo get_site_url()?>/wp-content/uploads/processed_images/<?php echo $v ?>" class="img-responsive">
							      	</div>
							      	<div class="rating-box">
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
							      		<p class="info">Not Watermarked</p>
							      		<button class="btn primary-btn">Buy Now</button>
							      	</div>
						      	</div>
					   		</div>
					   	<?php } ?>
				   	<?php } ?>
	   		<?php } } ?>
	  	</div>
	  	<?php if(count($coat_of_arms['images']) > 1) { ?>
		  	<div class="row">
		  		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		  			<div class="pagination-main text-center clearfix">
					<ul class="pagination">
					   <li><a href ="#" class="color">Prev</a></li>
					   <?php for($i=1;$i<=count($coat_of_arms['images']);$i++) {?>						   
						    <li><a data-target="#demo" data-slide-to="<?php echo $i-1?>" class="active"><?php echo $i; ?></a></li>
						<?php } ?>
					   <li><a href="#" class="color">Next</a></li>
					</ul>
					</div>
		  		</div>
		  	</div>
		<?php } ?>
	</div>
</section>

<?php get_footer(); ?>