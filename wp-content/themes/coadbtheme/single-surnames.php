<?php
get_header('sub');
/* Start the Loop */
?>
<link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" rel="stylesheet" />
<div class="page-wrap">
	<?php get_header('search');?>
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
	<section class="space gallery-info-section">
		<div class="container">
			<?php
			if (!empty($coat_of_arms = find_coat_of_arms())) { ?>
			<div class="row">
            	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            		<div id="demo" class="carousel slide carousel-fade" data-ride="carousel" data-interval="false">
					    <div class="gallery row carousel-inner"> 
					    	<?php foreach($coat_of_arms['images'] as $key=>$img) { ?>
					    		<div class="item <?php if($key==0) echo 'active' ?>">
						    		<?php foreach ($img as $k=>$v) { ?>
								        <div class="col-xs-12  col-sm-4 col-md-3 col-lg-2">
								         	<div class="img-container popup-gallery">
								         		<img src="<?php echo get_site_url()?>/wp-content/uploads/processed_images/<?php echo $v ?>" class="img-responsive image">
								         		<div class="img-controls">
								         			<a href="<?php echo get_site_url()?>/wp-content/uploads/processed_images/<?php echo $v ?>" href="javascript:;" class="img-select">
								              		<i class="fa fa-3x fa-arrows-alt" aria-hidden="true"></i></a>
								         		</div> 
								         	</div>
								        </div>
								    <?php } ?>
								</div>
					        <?php } ?>
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
		<?php } ?>
		</div>
	</section>

	<!-- information section Starts Here --> 
	<?php while (have_posts()) : the_post(); ?>
	<section class="space information-section">
		<div class="container">
			<div class="row">
            	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            		<div class="information-wrap">
            			<div class="row">
            				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<h3 class="bt-b">Blazons & Genealogy Notes</h3>
			            	</div>
			            	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<p><?php the_field('blazons_and_genealogy_notes');?></p>
			            	</div>
            			</div>
            		</div>
            		<div class="information-wrap">
            			<div class="row">
            				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<h3 class="bt-b">Origin, Meaning, Family History and <?php the_field('surname');?> Coat of Arms and Family Crest</h3>
			            	</div>
			            	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<?php the_field('surname_origin_meaning_family_history');?>
			            	</div>
            			</div>
            		</div>
            	</div>
			</div>
		</div>
	</section>
    <!-- information section End Here -->

	<!-- Leave A Comment section Starts Here --> 
	<section class="space leave-a-comment-section">
		<div class="container">
			<div class="row">
            	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            		<div class="comment-wrap">
            			<div class="row">
            				<?php comment_form(); ?>
            			</div>		
            		</div>
            	</div>
			</div>
		</div>
	</section>
    <!-- Leave A Comment section End Here -->

    <!-- Share with section Starts Here -->
	<section class="space share-with-section">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-3 col-md-4 col-lg-offset-3 col-lg-2">
					<h3>Share with:</h3>
            	</div>
            	<div class="col-xs-12 col-sm-8  col-md-8 col-lg-7">
            		<div class="share-btn-wrap">
            			<button class="btn primary-btn"><i class="fa fa-facebook"></i> Facebook</button>
            			<button class="btn primary-btn"><i class="fa fa-twitter"></i> Twitter</button>
            			<button class="btn primary-btn"><i class="fa fa-instagram"></i> Instagram</button>
            		</div>
            	</div>
            </div>
		</div>
	</section>

    <!-- Reffrence section Starts Here -->
    <?php if ($footnotes = call_user_func(array('advanced_footnotes', 'get_refs'))); { ?>
    	<?php if(!empty($footnotes)) { ?>
			<section class="space references-section references-section-sky">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<?php $footnotes = call_user_func_array(array('advanced_footnotes', 'print_refs'), array(false, 'References')); echo $footnotes;?>
						</div>
					</div>
				</div>
			</section>
		<?php } ?>
	<?php } ?>
<?php endwhile; ?>
</div>
<?php get_footer();?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('.popup-gallery').magnificPopup({
			delegate: 'a',
		  	type: 'image',
		  	gallery:{
		    enabled:true
		  }
		});
	});
</script>
