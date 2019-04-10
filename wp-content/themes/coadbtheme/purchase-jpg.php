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
	 		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            	<div id="demo" class="carousel slide carousel-fade" data-ride="carousel" data-interval="false">
					<div class="gallery row carousel-inner">
				 		<?php 
			    			$args = array( 'post_type' => 'product', 'posts_per_page' => 30, 'product_cat' => $page['page_slug']);
			    			$loop = new WP_Query( $args );
							if ($loop->have_posts()) : 
								while ( $loop->have_posts() ) : $loop->the_post(); global $product; $key=0;?>
									<div class="item <?php if($key==0) echo 'active' ?>">
										<div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
											<?php/*<?php echo get_permalink( $loop->post->ID ) ?>*/ ?>
									      	<div <?php wc_product_class('card-stamp'); ?>>
									      		<div class="image-box">
									      			<img src="<?php the_post_thumbnail_url('full');?>" class="img-responsive">
											  	</div>
										      	<div class="detail-box text-center">
										      		<p class="price"><?php echo $product->get_price_html(); ?></p>
										      		<p class="info">Not Watermarked</p>
										      		<?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>
										      	</div>
										    </div>
								   		</div>
							   		</div>	
								<?php endwhile; 
							else: ?>
								<p>Sorry, no posts matched your criteria.</p>
						<?php endif; ?>
					</div>
				</div>
			</div>
	  	</div>

	  	<?php if(count($coat_of_arms['images']) > 1) { ?>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			  		<div class="pagination-main text-center clearfix">
						<ul class="pagination">
							<li><a class="color" href="#demo" data-slide="prev">Prev</a></li>
							<?php for($i=1;$i<=count($coat_of_arms['images']);$i++) {?>						   
							    <li><a data-target="#demo" data-slide-to="<?php echo $i-1?>" class="active"><?php echo $i; ?></a></li>
							<?php } ?>
							<li><a class="color" href="#demo" data-slide="next">Next</a>
						</ul>
					</div>
				</div>
			</div>
		<?php } ?>
	</div>
</section>
<?php get_footer(); ?>

<script type="text/javascript">
	var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
    $( document ).on( 'click', '.add_to_cart_div', function(e) {
    	var coat_of_arm_img = $(this).attr('coat_of_arm_img');
    	var product_id = $(this).attr('product_id');
    	$.ajax({
            url: ajaxurl,
            type : 'post',
            data:    {
              action  : 'save_custom_data',
              'coat_of_arm_img':coat_of_arm_img,
              'product_id': product_id
            },
            success: function(result) {
            	//update cart count
				var url = woocommerce_params.wc_ajax_url;
				url = url.replace("%%endpoint%%", "get_refreshed_fragments");
				$.post(url, function(data, status){
					if ( data.fragments )
					{
						$.each(data.fragments, function(key, value){
							$(key).replaceWith(value);
						});
					}
					$('body').trigger( 'wc_fragments_refreshed' );
				});
        	}
        });
	});
</script>