
<!-- tab Starts Here -->
			<section class="tab-section">
			  <div class="container">
			    <div class="row">
			    	<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 pd-tb-15 tab-wrap">
			    		<?php 
					    		$args = array(
					    				'theme_location' => 'other',
					    				'container' => 'div', // parent container 
					    				'container_class' => 'my-tab', //parent container ID
					    				'menu_class' => '',
								        'depth' => 0,
								        'items_wrap' => '%3$s', // removes ul
								    	'walker' => new Learning_Description_Walker // custom walker to replace li with div
					    		);
				    	?>
				    	<?php wp_nav_menu( $args ); ?>
			    		<div class="my-tab">
			    			<a href="./learnign_center_faq.html">Faq</a>
			    		</div>
			    	</div>
			    	<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 pd-tb-15 tab-wrap">
			    		<div class="my-tab">
			    			<a href="./learnign_center_video.html">Videos</a>
			    		</div>
			    	</div>
			    	<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 pd-tb-15 tab-wrap">
			    		<div class="my-tab">
			    			<a href="./learnign_center_look_a_like.html">Look-a-like</a>
			    		</div>
			    	</div>
			    </div>
			  </div>
			</section>
<!-- tab end Here -->