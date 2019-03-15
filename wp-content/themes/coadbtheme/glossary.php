 <?php 
 /*Template Name: Glossary*/
get_header('sub');
?>
<div class="page-wrap">
	<?php get_header('search');?>	
	<section class="tab-section hidden-xs">
	  	<div class="container">
	    	<div class="row">
		    	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		    		<ul>
		    			<?php 
			    			$args = array(
			    				'theme_location' => 'other',
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
</div>
<?php get_footer();?>