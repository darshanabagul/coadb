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
                                        <form>
                                                    <div class="row">
                                                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                                                <div class="custom-input">
                                                                    <div class="group">      
                                                                      <input type="text" id="Name" name="Name" required>
                                                                      <label>Full Name</label>
                                                                      <!-- <p class="error">Full Name is required</p> -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                                                <div class="custom-input">
                                                                    <div class="group">      
                                                                      <input id="custom-check" type="text" required>
                                                                      <label>Email Address</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                                                <div class="custom-input">
                                                                    <div class="group">      
                                                                      <input type="text" required>
                                                                      <label>Subject</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                <div class="custom-input">
                                                                    <div class="group">      
                                                                      <textarea required></textarea>
                                                                      <label>Comment</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 btn-box text-center">
                                                                <button class="btn secondary-btn">SEND</button>
                                                            </div>
                                            </div>
                                                </form>
                                </div>
                                </div>		
                            </div>
                        </div>
					</div>
				</div>
			</section>
      <!-- Leave A Comment section End Here -->

<?php get_footer();?>