<?php
get_header();
/* Start the Loop */
?>
<div class="wrap">
  	<div class="img-list">
		<?php
		if (!empty($coat_of_arms = find_coat_of_arms())) { ?>
			<div id="demo" class="carousel" data-ride="carousel" data-interval="false">
				<div class="carousel-inner">
					<?php foreach($coat_of_arms['images'] as $key=>$img) { ?>
						<div class="carousel-item <?php if($key==0) echo 'active' ?>">
							<?php foreach ($img as $k=>$v) { ?>
								<img src='<?php echo get_site_url()?>/wp-content/uploads/processed_images/<?php echo $v ?>' title='<?php echo $v ?>' alt="not found"/>
							<?php } ?>
						</div>
					<?php
					}
					?>
				</div>
				<?php if(count($coat_of_arms['images']) > 1) { ?>
					<div class="carousel-indicators">
					  	<a class="" href="#demo" data-slide="prev">
					    	PREV
					  	</a>
					  	<?php
						for($i=1;$i<=count($coat_of_arms['images']);$i++) {?>						   
						    <a data-target="#demo" data-slide-to="<?php echo $i-1?>" class="active"> <?php echo $i; ?> </a>
						<?php } ?>
					    <a class="" href="#demo" data-slide="next">
					    	NEXT
					  	</a>
					</div>
				<?php } ?>
			</div>
		<?php
			}	
			else {
				echo 'comming soon';
			}
		?>
	</div>

		<?php
		while (have_posts()) : the_post(); ?>
		   <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
		   <h2>Blazons and genealogy notes</h2>
		   <p><?php the_field('blazons_and_genealogy_notes');?></p>
		   <h2>Origin, Meaning and Family Crest</h2>
		   <p><?php the_field('surname_origin_meaning_family_history');?> </p>
		   <p><?php the_content(); ?></p>
		<?php endwhile; // End of the loop.
		comment_form(); ?>
</div>
<?php get_footer();?>
