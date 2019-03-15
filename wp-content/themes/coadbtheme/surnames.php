<?php
/*Template Name: Surnames*/
get_header('sub');
?>
<div class="page-wrap">
	<?php get_header('search');?>
	<section class="surname-list-wrap">
	    <div class="container">
	        <div class="row">
	            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	                <h2 class="heading">Surname Meaning, Origin, & Family History</h2>
	                <div class="panel-group" id="accordion">
	                    <?php $all_surnames= get_all_surnames() ?>
	                    <?php
	                    	foreach($all_surnames as $sk=>$surnames) { ?>
	                    	<div class="panel panel-default md-whiteframe-2dp">
		                        <div class="panel-heading">
		                            <h4 class="panel-title">
		                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $sk?>"><?php echo $sk;?></a>
		                            </h4>
		                        </div>
		                        <div id="collapse<?php echo $sk?>" class="panel-collapse collapse in">
		                            <div class="panel-body">
		                            	<?php foreach($surnames as $k=>$surname) { ?>
		                                	<a href="<?php echo get_permalink($surname->ID)?>"><?php echo $surname->post_title;?></a>
		                            	<?php } ?>
		                            </div>
		                        </div>
		                    </div>
	                    <?php }?>
	                </div>
	            </div>
	        </div>
	    </div>
	</section>
</div>
<?php get_footer();?>