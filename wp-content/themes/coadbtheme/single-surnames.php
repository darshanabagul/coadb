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
	    		<?php $page = find_coat_of_arms();?>
	    		<ul class="tab-wrap">
                    <li class="active"><a href="">Gallery & Info</a></li>
                    <li><a href="<?php echo esc_url( add_query_arg( 'surname', $page['page_slug'] , site_url( '/index.php/purchase-jpg/' ) ) )?>">Purchase jpg</a></li>
                    <li ><a href="<?php echo esc_url( add_query_arg( 'surname', $page['page_slug'] , site_url( '/index.php/buy-clothing-merch/' ) ) )?>">buy clothing & merch</a></li>
                    <li ><a href="<?php echo esc_url( add_query_arg( 'surname', $page['page_slug'] , site_url( '/index.php/which-coat-of-mine/' ) ) )?>">Which one is mine?</a></li>
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
					    	<?php if(!empty($coat_of_arms['images'])) { ?>
					    	<?php $i=1;?>
					    	<?php foreach($coat_of_arms['images'] as $key=>$img) { ?>
					    		<div class="item <?php if($key==0) echo 'active' ?>">
						    		<?php foreach ($img as $v) { global $v;?>
								        <div class="col-xs-12  col-sm-4 col-md-3 col-lg-2">
								         	<div class="img-container">
								         		<img src="<?php echo get_the_post_thumbnail_url($v); ?>" class="img-responsive image">
								         		<div class="img-controls">
								         			<i class="fa fa-3x fa-arrows-alt" aria-hidden="true" onclick="openModal();currentSlide(<?php echo $i?>)"></i>
								         		</div> 
								         	</div>
								        </div>
								        <?php $i=$i+1;?>
								    <?php } ?>
								</div>
					        <?php } }?>
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
<div id="myModal" class="my-modal modal">
	<div class="modal-content">
    	<span class="close cursor" onclick="closeModal()" title="Close">&times;</span>
	    	<?php if (!empty($coat_of_arms = find_coat_of_arms(5))) {?>
				<?php if(!empty($coat_of_arms['images'])) { ?>
				 	<?php foreach($coat_of_arms['images'] as $key=>$img) { ?>
						<?php foreach ($img as $k=>$v) { ?>
							<div class="mySlides">
								<img src="<?php echo get_the_post_thumbnail_url($v); ?>" class="img-responsive" alt="" title="">
							</div>
						<?php } ?>
				   	<?php } ?>
	   		<?php } } ?>
	    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
	    <a class="next" onclick="plusSlides(1)">&#10095;</a>
	    <div class="row social-share">
	      	<div class="col-lg-12">
	      		<a href="#" class="fb"> <i class="fa fa-facebook"></i><span>Share on Facebook</span></a>
	      		<a href="#" class="tw"> <i class="fa fa-twitter"></i><span>Tweet this</span></a>
	      		<a href="#" class="pin"> <i class="fa fa-pinterest"></i><span>Save on pinterest</span></a>
	      	</div>
	    </div>
	</div>
</div>
<script>
	function openModal() {
		document.getElementById('myModal').style.display = "block";
	}

	function closeModal() {
		document.getElementById('myModal').style.display = "none";
	}

	var slideIndex = 1;
	showSlides(slideIndex);

	function plusSlides(n) {
		showSlides(slideIndex += n);
	}

	function currentSlide(n) {
		showSlides(slideIndex = n);
	}

	function showSlides(n) {
		  var i;
		  var slides = document.getElementsByClassName("mySlides");
		  if (n > slides.length) {slideIndex = 1}
		  if (n < 1) {slideIndex = slides.length}
		  for (i = 0; i < slides.length; i++) {
		      slides[i].style.display = "none";
		  }
		 
		  slides[slideIndex-1].style.display = "block";
		  
	}
</script>
