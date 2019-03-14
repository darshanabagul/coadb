 <?php 
 /*Template Name: Glossary*/
get_header('sub');
?>
<div class="page-wrap">
	<?php get_header('search');?>	
	<section class="tab-section">
	  	<div class="container">
	    	<?php 
	    		$args = array(
	    				'theme_location' => 'other',
	    				'container' => 'div', // parent container 
	    				'container_class' => 'row', //parent container ID
				        'depth' => 2,
				        'items_wrap' => '%3$s', // removes ul
				    	//'walker' => new Description_Walker // custom walker to replace li with div
	    		);
		    ?>
		    <?php wp_nav_menu( $args ); ?>
	  	</div>
	</section>
	<?php
		$currentPage = get_query_var('paged'); 
		query_posts(array(
   		'post_type' => 'glossary',
   		'orderby'=> 'title', 
	   	'order' => 'ASC',
	   	'posts_per_page'=> 5,
	   	'paged'=>$currentPage
		)); 
	?>
	<section class="space same-box-wrap glossary-gallery information-section">
		<div class="container">
		 	<div class="row">
    			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    				<div id="ajax">
	    				<?php while (have_posts()) : the_post(); ?>
	        				<div class="information-wrap md-whiteframe-2dp">
	        					<div class="row">
	        						<div class="col-xs-12 col-sm-3 col-md-2 col-lg-1">
	        							<?php the_post_thumbnail('thumbnail', array('class'=>'img-responsive'));?>
								 	</div>
			            			<div class="col-xs-12 col-sm-9 col-md-10 col-lg-11">
			            				<h3 class="m-0"><?php the_title(); ?></h3>
								 		<p><?php the_content();?></p>
								 	</div>
	        					</div>
	        				</div>
	    				<?php endwhile; ?>
	    			</div>
    				<div class="view-more">
	            		<div class="row">
	            			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	                     		<?php load_more_button();?>
	            			</div>
	            		</div>
	            	</div>
    			</div>
			</div>
		</div>
	</section>
	<section class="space references-section references-section-white">
		<div class="container">
		 	<div class="row">
			 	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			 		<h3>References</h3>
			 	</div>
			 	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			 		<ol>
					  <li> 
					  	<a href="">Understanding Signs & Symbols – Heraldry, S. Oliver & G. Croton, Quantum, London, 2013, P53</a>
					  </li>
					  <li> 
					  	<a href="">Understanding Signs & Symbols – Heraldry, S. Oliver & G. Croton, Quantum, London, 2013, P53 Understanding Signs & Symbols – Heraldry, S. Oliver & G. Croton, Quantum, London, 2013, P53</a>
					  </li>
					  <li> 
					  	<a href="">Understanding Signs & Symbols – Heraldry, S. Oliver & G. Croton, Quantum, London, 2013, P53</a>
					  </li>
					  <li> 
					  	<a href="">Understanding Signs & Symbols – Heraldry, S. Oliver & G. Croton, Quantum, London, 2013, P53</a>
					  </li>
					  <li> 
					  	<a href="">Understanding Signs & Symbols – Heraldry, S. Oliver & G. Croton, Quantum, London, 2013, P53</a>
					  </li>
					  <li> 
					  	<a href="">Understanding Signs & Symbols – Heraldry, S. Oliver & G. Croton, Quantum, London, 2013, P53</a>
					  </li>
					  <li> 
					  	<a href="">Understanding Signs & Symbols – Heraldry, S. Oliver & G. Croton, Quantum, London, 2013, P53</a>
					  </li>
					  <li> 
					  	<a href="">Understanding Signs & Symbols – Heraldry, S. Oliver & G. Croton, Quantum, London, 2013, P53</a>
					  </li>
					</ol>
			 	</div>
			</div>
		</div>
	</section>
</div>
<?php get_footer();?>