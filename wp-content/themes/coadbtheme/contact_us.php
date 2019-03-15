<?php
/*Template Name: Contact Us*/
get_header('sub');
?>
		 <!--Page Main content Start Here -->
		<div class="page-wrap">
			<?php get_header('search');?>
			<!-- Leave A Comment section Starts Here --> 
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
                                        
                                            <?php echo do_shortcode( '[contact-form-7 id="235" title="Contact Us"]' ); ?>
                                                                                               
                                                
                                </div>
                                </div>		
                            </div>
                        </div>
					</div>
				</div>
			</section>
      <!-- Leave A Comment section End Here -->

<?php get_footer();?>