<?php
/*Template Name: Buy clothing & merch*/
 get_header('sub');
?>
<!--Page Main content Start Here -->
<div class="page-wrap which_one_is_mine_page">
	<?php get_header('search');?>
	<section class="tab-section hidden-xs">
	  <div class="container">
	    <div class="row">
	    	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <ul class="tab-wrap">
                	<?php $page = find_coat_of_arms();?>
                    <li><a href="<?php echo get_home_url();?>/index.php/surnames/<?php echo $page['page_slug']?>">Gallery & Info</a></li>
                    <li><a href="<?php echo esc_url( add_query_arg( 'surname', $page['page_slug'] , site_url( '/index.php/purchase-jpg/' ) ) )?>">Purchase jpg</a></li>
                    <li class="active"><a href="">buy clothing & merch</a></li>
                    <li ><a href="<?php echo esc_url( add_query_arg( 'surname', $page['page_slug'] , site_url( '/index.php/which-coat-of-mine/' ) ) )?>">Which one is mine?</a></li>
                </ul>
	    	</div>
	    </div>
	  </div>
	</section>
	<!-- Banner Ends Here -->
	<section class="space same-box-wrap clothing-items-section bg-sky">
		<div class="container">
			<div class="row">
	            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
	            	<div class="vertical-filter bg-white">
	            	  <p class="filter-head"> Select Your Coat of Arms </p>
	            	  	<section class="my-vertical-filter slider filter-items">
	            	  		<?php
							if (!empty($coat_of_arms = find_coat_of_arms(5))) {?>
								<?php if(!empty($coat_of_arms['images'])) { ?>
									<?php $i=1;?>
									<?php foreach($coat_of_arms['images'] as $key=>$img) { ?>
										<?php foreach ($img as $k=>$v) { global $v;?>
											<div>
												<div class="list">
						            	  			<label class="btn btn-radio btn-block <?php if($i==1) echo 'active' ?>">
														<input type="radio" id="<?php echo $i;?>" name="select-option-img" value="<?php echo $i;?>" />
														<img src="<?php echo get_the_post_thumbnail_url($v); ?>" alt="" title="" class="img-responsive">
														<div class="top-right"><?php echo $i;?></div>
													</label>
						            	  		</div>
											</div>
											<?php $i=$i+1;?>
										<?php } ?>
				   					<?php } ?>
	   						<?php } } ?>
						</section>
	            	</div>
	            </div>
	            <!-- products -->
	            <div class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
	            	<div class="row card-wrap">
	            		<?php 
	            			$args = array( 'post_type' => 'product', 'posts_per_page' => 20, 'product_cat' => 'Merch');
        					$loop = new WP_Query( $args );
							if (  $loop->have_posts() ) : 
								while ( $loop->have_posts() ) : $loop->the_post(); global $product;?>
								<div class="col-xs-12 col-sm-4 col-md-3 col-lg-4">
									<?php/*<?php echo get_permalink( $loop->post->ID ) ?>*/ ?>
							      	<div <?php wc_product_class('card-stamp'); ?>>
							      		<div class="image-box">
									  		<?php echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog') ?>
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
								      		<p class="price"><?php echo $product->get_price_html(); ?></p>
								      		<p class="info"><?php the_title(); ?></p>
								      		<?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>
								      	</div>
								    </div>
						   		</div>	
							<?php endwhile; 
							else: ?>
								<h3>Sorry, no products available for this family.</h3>
						<?php endif; ?>
	            	</div>
	            	<?php if (  $loop->have_posts() ) : ?>
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
				<?php endif;?>
	            </div>
			</div>
		</div>
	</section>
</div>
<?php get_footer(); ?>
<script type="text/javascript">
    $(document).ready(function(){
	  	// Nav
	  	$(".filter-items").on("change", ".btn-radio", function(e){
    	e.preventDefault();
    	var elems = document.querySelectorAll(".btn-radio");
		  [].forEach.call(elems, function(el) {
		    el.classList.remove("active");
		  });
    	$(this).closest('.btn-radio').toggleClass("active");
    	return false;
    });
	});
</script>
<script type="text/javascript">
    $(document).ready(function(){
        wh = $(window).width();
        if (wh >= 767)
        {
          $(".my-vertical-filter").slick({
					  dots: false,
					  infinite: false,
					  speed: 300,
					  slidesToShow: 5,
					  slidesToScroll: 5,
					  vertical:true,
					  responsive: [
					    {
					      breakpoint: 1024,
					      settings: {
					        slidesToShow: 5,
					        slidesToScroll: 5,
					        infinite: false,
					        dots: false
					      }
					    }
					  ]
				  });
        }
        else
        {
         	$(".my-vertical-filter").slick({
            dots: false,
					  infinite: false,
					  speed: 300,
					  slidesToShow: 2,
					  slidesToScroll: 2,
					  swipe:true,
					  touchMove:true,
					  vertical:false,
					  responsive: [
					    {
					      breakpoint: 600,
					      settings: {
					        slidesToShow: 2,
					        slidesToScroll: 2,
					        infinite: false
					      }
					    },
					    {
					      breakpoint: 480,
					      settings: {
					        slidesToShow: 1,
					        slidesToScroll: 1,
					        infinite: false
					      }
					    }
					  ]
			});
		}
    });			
</script>