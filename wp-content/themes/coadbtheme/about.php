<?php
/*Template Name: About*/
get_header('two');
?>
	<div class="page-wrap">
			<!-- Banner Starts Here -->
			<div class="about-search-main" id="searchBar">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-12">
							<form>
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Type your surname here">
									<span class="input-group-btn">
										<button type="button" class="btn btn-default"><i class="fa fa-search"></i></button>
									</span>
								</div>
							</form>
							<h1>About Us</h1>
						</div>
					</div>
				</div>
			</div>
			<!-- Banner Ends Here -->

			<!-- About section Starts Here --> 
			<div class="about-sect">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
							<div class="img-sect">
								<img src="images/John-Lehman.jpg" alt="" title="" class="img-responsive" />
							</div>
						</div>
						<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
							<div class="about-cont">
								<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
									the_content();
									endwhile; else: ?>
									<p>Sorry, no posts matched your criteria.</p>
									<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- About section End Here -->
		</div>
		<!--Page Main content End Here -->
<?php get_footer();?>