<?php
/*Template Name: Contact Us*/
get_header('sub');
?>
<div class="page-wrap">
	<?php get_header('search');?>
	<section class="space leave-a-comment-section">
		<div class="container">
		 	<div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="comment-wrap">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <h3>How can we help?</h3>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <?php echo do_shortcode( '[contact-form-7 id="22" title="Contact Us"]' ); ?>
                            </div>
                        </div>		
                    </div>
                </div>
			</div>
		</div>
	</section>
</div>

<?php get_footer();?>
