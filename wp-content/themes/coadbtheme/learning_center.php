 <?php
	/*Template Name: Learning Center*/
	get_header('sub');
?>

 <!--Page Main content Start Here -->
		<div class="page-wrap">
			<!-- Banner Starts Here -->
			<div class="search-dtls-main" id="searchBar">
				<div class="container">
					<div class="row">
						<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12">
							<div class="search-inner">
								<div class="row">
									<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12">
										<form>
											<div class="input-group">
												<input type="text" class="form-control" placeholder="Type your surname here">
												<span class="input-group-btn">
													<a type="button" class="btn btn-default" href="./surname_listing.html"><i class="fa fa-search"></i></a>
												</span>
											</div>
										</form>
									</div>
								</div>
								<h1><span>Heraldy Symbol</span> Meaning Glossary w/ Images</h1>
							</div>
						</div>
					</div>
				</div>
			</div>
<!-- Banner Ends Here -->
<?php //get_header('menu'); ?>
<!-- tab Starts Here -->
			<section class="tab-section">
			  <div class="container">
			    
			    	<?php 
			    		$args = array(
			    				'theme_location' => 'other',
			    				'container' => 'div', // parent container 
			    				'container_class' => 'row', //parent container ID
						        'depth' => 2,
						        'items_wrap' => '%3$s', // removes ul
						    	'walker' => new Learning_Description_Walker // custom walker to replace li with div
			    		);
				    ?>
				    <?php wp_nav_menu( $args ); ?>
			  </div>
			</section>
			<!-- tab end Here -->

			<!-- information section Starts Here --> 
			<section class="space same-box-wrap glossary-gallery information-section">
				<div class="container">
				 	<div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            	<div class="information-wrap md-whiteframe-2dp">
            		<div class="row">
            			<div class="col-xs-12 col-sm-3 col-md-2 col-lg-1">
								 		<img src="https://coadb.com/wp-content/glossary/579.jpg" class="img-responsive">
			            </div>
			            <div class="col-xs-12 col-sm-9 col-md-10 col-lg-11">
			            	<h3 class="m-0">Blazons & Genealogy Notes</h3>
								 		<p>1) or Hardwicke – (Hardwick, co. Derby). Ar. a saltire engr. az. on a chief of the second three cinquefoils (another, roses) of the first. Crest—On a mount vert a stag courant ppr. gorged with a chaplet of roses ar.</p>
								 	
			            </div>
            		</div>
            	</div>
            	<div class="information-wrap md-whiteframe-2dp">
            		<div class="row">
            			<div class="col-xs-12 col-sm-3 col-md-2 col-lg-1">
								 		<img src="https://coadb.com/wp-content/glossary/579.jpg" class="img-responsive">
			            </div>
			            <div class="col-xs-12 col-sm-9 col-md-10 col-lg-11">
			            	<h3 class="m-0">Blazons & Genealogy Notes</h3>
								 		<p>1) or Hardwicke – <a href="">(Hardwick, co. Derby)</a>. Ar. a saltire engr. az. on a chief of the second three cinquefoils (another, roses) of the first. Crest—On a mount vert a stag courant ppr. gorged with a chaplet of roses ar.</p>
								 	
			            </div>
            		</div>
            	</div>
            	<div class="information-wrap md-whiteframe-2dp">
            		<div class="row">
            			<div class="col-xs-12 col-sm-3 col-md-2 col-lg-1">
								 		<img src="https://coadb.com/wp-content/glossary/579.jpg" class="img-responsive">
			            </div>
			            <div class="col-xs-12 col-sm-9 col-md-10 col-lg-11">
			            	<h3 class="m-0">Blazons & Genealogy Notes</h3>
								 		<p>1) or Hardwicke – <a href="">(Hardwick, co. Derby)</a>. Ar. a saltire engr. az. on a chief of the second three cinquefoils (another, roses) of the first. Crest—On a mount vert a stag courant ppr. gorged with a chaplet of roses ar.</p>
								 	
			            </div>
            		</div>
            	</div>
            	<div class="information-wrap md-whiteframe-2dp">
            		<div class="row">
            			<div class="col-xs-12 col-sm-3 col-md-2 col-lg-1">
								 		<img src="https://coadb.com/wp-content/glossary/579.jpg" class="img-responsive">
			            </div>
			            <div class="col-xs-12 col-sm-9 col-md-10 col-lg-11">
			            	<h3 class="m-0">Blazons & Genealogy Notes</h3>
								 		<p>1) or Hardwicke – <a href="">(Hardwick, co. Derby)</a>. Ar. a saltire engr. az. on a chief of the second three cinquefoils (another, roses) of the first. Crest—On a mount vert a stag courant ppr. gorged with a chaplet of roses ar.</p>
								 	
			            </div>
            		</div>
            	</div>
            	<div class="information-wrap md-whiteframe-2dp">
            		<div class="row">
            			<div class="col-xs-12 col-sm-3 col-md-2 col-lg-1">
								 		<img src="https://coadb.com/wp-content/glossary/579.jpg" class="img-responsive">
			            </div>
			            <div class="col-xs-12 col-sm-9 col-md-10 col-lg-11">
			            	<h3 class="m-0">Blazons & Genealogy Notes</h3>
								 		<p>1) or Hardwicke – <a href="">(Hardwick, co. Derby)</a>. Ar. a saltire engr. az. on a chief of the second three cinquefoils (another, roses) of the first. Crest—On a mount vert a stag courant ppr. gorged with a chaplet of roses ar.</p>
								 	
			            </div>
            		</div>
            	</div>
            	<div class="information-wrap md-whiteframe-2dp">
            		<div class="row">
            			<div class="col-xs-12 col-sm-3 col-md-2 col-lg-1">
								 		<img src="https://coadb.com/wp-content/glossary/579.jpg" class="img-responsive">
			            </div>
			            <div class="col-xs-12 col-sm-9 col-md-10 col-lg-11">
			            	<h3 class="m-0">Blazons & Genealogy Notes</h3>
								 		<p>1) or Hardwicke – <a href="">(Hardwick, co. Derby)</a>. Ar. a saltire engr. az. on a chief of the second three cinquefoils (another, roses) of the first. Crest—On a mount vert a stag courant ppr. gorged with a chaplet of roses ar.</p>
			            </div>
            		</div>
            	</div>
            	<div class="view-more ">
            		<div class="row">
            			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                     <button class="btn btn-block">View More <i class="fa fa-chevron-down" aria-hidden="true"></i></button>
            			</div>
            		</div>
            	</div>
            </div>
					</div>
				</div>
			</section>
      <!-- information section End Here -->

      <!-- Reffrence section Starts Here -->
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
			<!-- Reffrence section End Here -->
		</div>
    <!--Page Main content End Here -->
    <?php get_footer();?>