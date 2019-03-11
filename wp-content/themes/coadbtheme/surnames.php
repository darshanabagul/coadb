<?php
/*Template Name: Surnames*/
get_header();
?>
<div class="content">
	<?
	query_posts(array(
	   'post_type' => 'surnames'
	)); ?>
	<?php
	while (have_posts()) : the_post(); ?>
	<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
	<?php endwhile;?>
</div>
<?php get_footer();?>