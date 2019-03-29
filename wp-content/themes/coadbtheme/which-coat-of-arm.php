<?php session_start();
      //Put session start at the beginning of the file
	/*Template Name: which-coat-of-arm*/
	$name = $_POST['username']; 
	$family = $_GET['surname'];
	$website = $_POST['website'];
	$select_radio_option = $_POST['select-option-radio'];
	$surname_interested = $_POST['surname'];
	$family_info = $_POST['message'];
	$to = $_POST['email'];
	$from = 'monika.bagadkar@codaemonsoftwares.com';
	$subject = $_POST["sub"];
	$_SESSION['post-data'] = $_POST;
	$_SESSION['get-data'] = $_GET['surname'];
	// Additional headers
	$headers = "From: " . strip_tags($_POST['email']) . "\r\n";

	$htmlContent1 = '<html>
	    <body>
	    <div marginwidth="0" marginheight="0">
	    <div style="background-color:#f7f7f7;margin:0;padding:70px 0 70px 0;width:100%">
		    <table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%">
		    	<tbody>
		    		<tr>
              			<td align="center" valign="top">
						<table border="0" cellpadding="0" cellspacing="0" width="600" style="background-color:#ffffff;border-radius:3px!important" >
						  	<tbody> 
						  	<tr>
						      	<td align="center" valign="top">
										<table border="0" cellpadding="0" cellspacing="0" width="600" style="background-color:
										#ddd; border-radius:3px 3px 0 0!important; color:#ffffff; border-bottom:0; font-weight:bold; line-height:100%; vertical-align:middle;">
											<tbody>
												<tr>
								          			<td align="center" style="padding: 10px 0 0;display: block;">
														<img src="./image/logo.png" alt="Coadb" title="Coadb">
													</td>
												</tr>
												<tr>
													<td align="center">
														<h1 style="color: #444;font-size: 14px;">DATABASE & SHOP</h1>
													</td>
												</tr>
											</tbody>
										</table>
			            		</td>
							</tr>
						    <tr>
							    <td align="center" valign="top">
									<span><font color="#888888"></font></span>
									<table border="0" cellpadding="0" cellspacing="0" width="600">
										<tbody>
											<tr>
						            			<td valign="top" style="background-color:#ffffff" bgcolor="dodgerblue" background="./image/home-bg.png">
												<span><font color="#888888"></font></span>
												<table border="0" cellpadding="20" cellspacing="0" width="100%">
													<tbody>
														<tr>
					                    					<td valign="top" style="padding: 20px 20px 40px;">
																<div style="color:#636363; font-size:14px;line-height:150%;text-align:left;line-height: 24px;">
																	<h2>Hello <span style="color: #c49634;"> ' . strip_tags($name) .',</span></h2>
																	<p style="margin:0 0 16px; font-weight: 400;">Thank you for your interest in the coadb.com research service. We would be honored to assist you in finding which, if any, coat of arms was owned by your branch of the <strong style="font-size: 16px; color: #c49634;">' . strip_tags($family) . '</strong> family. </p>
																	<p style="margin:0 0 16px;font-weight: 400;">The cost for identifying a coat of arms in an existing family tree you provide to us is $69 USD. If we are unable to find a coat of arms in your tree, we will fully refund your money within 14 calendar days. No risk for you.</p>	
																</div>
																<span><font color="#888888"></font></span>
															</td>
														</tr>
													</tbody>
												</table>
												<span><font color="#888888"></font></span>
												</td>
											</tr>
										</tbody>
										</table>
									<span><font color="#888888"></font></span>
								</td>
							</tr>
							<tr align="center" valign="top" style="background-color: #d4d4d4;">
								<td align="center" valign="top">
									<table border="0" cellpadding="10" cellspacing="0" width="600">
										<tbody>
											<tr>
									        <td valign="top" style="padding:0">
												<table border="0" cellpadding="10" cellspacing="0" width="100%">
													<tbody>
														<tr align="center">
										                <td width="200">
									                		<a href="" style="text-decoration: none;color: #2f5bad;">Home</a>
														</td>
														<td width="200">
									                		<a href="" style="text-decoration: none;color: #2f5bad;">Purchase Jpg</a>
														</td>
														<td width="200">
									                		<a href="" style="text-decoration: none;color: #2f5bad;">Contact Us</a>
														</td>
														</tr>
								                   </tbody>
												</table>
									        </td>
											</tr>
										</tbody>
									</table>
								</td>
							</tr>
							<tr style="background-color: #2c3848;color: #fff;">
									<td align="center" valign="top">
										<table border="0" cellpadding="10" cellspacing="0" width="600">
											<tbody>
											<tr>
									        <td valign="top" style="padding:0">
												<table border="0" cellpadding="10" cellspacing="0" width="100%">
													<tbody>
														<tr>
										                <td colspan="2" align="center" style="padding: 20px;border:0;font-family:Arial;font-size:14px;line-height:125%;">
										                	<div>
										                		<p style="margin: 0;">
										                			<a href="" title="Like us on Facebook"><img src="./image/facebook1.png" style="width: 6%;"></a>
										                			<a href="" title="Follow us on Twitter"><img src="./image/twitter1.png" style="width: 6%;"></a>
										                			<a href="" title="Follow us on Instagram"><img src="./image/insta1.png" style="width: 6%;"></a>
										                		</p>
										                	</div>
														</td>
														</tr>
								                  </tbody>
												</table>
									        </td>
											</tr>
											<tr>
									        <td valign="top" style="padding:0">
												<table border="0" cellpadding="10" cellspacing="0" width="100%">
													<tbody>
								                    <tr>
														<td colspan="2" align="center" style="border:0;font-family:Arial;font-size:14px;line-height:125%; padding: 0 0 20px 0;">
														<p style="margin: 0;">© 2019 Copyright Joy Empire Inc. | All Rights Reserved</p>
														</td>
													</tr>
													</tbody>
												</table>
									        </td>
											</tr>
											</tbody>
										</table>
									</td>
					      	</tr>
						    </tbody>
					    	</table>
						</td>
					  </tr>
				  </tbody>
			  </table>
		  </div>
	  	</div>
	    </body>
	    </html>';
	$htmlContent2 = "<html>
							<body>
								<h1>Subject: " . $select_radio_option . "</h1>
								<h3>Username: " . strip_tags($name) . "</h3>
								<h3>Surname: " . $family . "</h3>
								<h3>Email Address: " . strip_tags($_POST['email']) . "</h3>
								<h3>Surname Interested In: " . $surname_interested . "</h3>
							</body>
					</html>";
	$message1 = $htmlContent1;
	$message2 = $htmlContent2;
	// Set content-type header for sending HTML email
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	if (isset($_POST['submit'])) {

				if (mail($to, $subject, $message1, $headers) && mail($from, $subject, $message2, $headers)) {
					$url = 'get_home_url()/family_tree';
					//redirect_to( $url );
					wp_safe_redirect( $url );
				}
				else 
				{
					$url = 'get_home_url()/which-coat-of-mine';
					//redirect_to( $url );
					wp_safe_redirect( $url );
				}
			}

	get_header('sub');
?>

<!--Page Main content Start Here -->
<div class="page-wrap which_one_is_mine_page">
	<?php get_header('search');?>
	<!-- tab Starts Here -->
	<section class="tab-section hidden-xs">
	  <div class="container">
	    <div class="row">
	    	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	    		<ul class="tab-wrap">
	    			<?php $page = find_coat_of_arms();?>
                    <li><a href="<?php echo get_home_url();?>/index.php/surnames/<?php echo $page['page_slug']?>">Gallery & Info</a></li>
                    <li><a href="<?php echo esc_url( add_query_arg( 'surname', $page['page_slug'] , site_url( '/index.php/purchase-jpg/' ) ) )?>">Purchase jpg</a></li>
                     <li ><a href="<?php echo esc_url( add_query_arg( 'surname', $page['page_slug'] , site_url( '/index.php/buy-clothing-merch/' ) ) )?>">buy clothing & merch</a></li>
                    <li class="active"><a href="">Which one is mine?</a></li>
                </ul>
	    	</div>
	    </div>
	  </div>
	</section>
	<!-- tab end Here -->
	<section class="space same-box-wrap sparta-sec information-section">
		<div class="container">
			<div class="row">
	        <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
	          <h3>Discover Your Coat of Arms Today!</h3>
	          <p>We will help you find out which coat of arms is yours.</p>
	        </div>
	        <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
	          <button class="btn secondary-btn">Get Started Today</button>
	        </div>
	      	</div>
	    </div>
	</section>
	<!-- service section Starts Here --> 
      <section class="space bg-white service-section">
		<div class="container">
		 	<div class="row">
			    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			    	<h2>Why are there multiple coats of arms for the same surname?</h2>
			    </div>
  			</div>
  			<div class="row">
			 	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			     	<div class="box">							   
				    <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
				    	<h3>Common Misconceptions</h3>
		 			 		<p>Let me clear up a common misconception: For the most part, a coat of arms actually belonged to an individual person, and did not belong to the family or surname. Unfortunately, many heraldry websites out there on the internet do not make this point well-known, intentionally or not.</p>
		 			 		<h3>To help explain the concept clearly, let us pose a hypothetical example as follows:</h3>
		 			 		<p>John Allen lived in Suffolk, England and was granted a coat of arms by the King in 1450 AD. It was yellow with a black lion. However, much further north, in Cumbria, England, thirty-five years later, Peter Allen was granted a coat of arms by the King in 1485. It was blue with a white eagle. Since both men owned coats of arms, they were called <a href=""> “armigers”</a> .</p>
		 			 		<p>Next, let’s assume both John and Peter married and had children, and the right to bear the arms was inherited by each man’s eldest son. This pattern than repeats through the generations. Hence, each of these coats of arms became associated with different branches of the family. These branches may not be immediately related, although they may share a common ancestor from a distant time.</p>
				    </div>
					<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
			      		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/flanders.png" alt="service" class="img-responsive">
			      	</div>
					</div>
	 	    	</div>
	    	</div>
		</div>
      </section>
	  <!-- service section Starts Here --> 
	  <!-- video section Starts Here --> 
	  <section class="space bg-sky">
		<div class="container">
		 	<div class="row video-wrap">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="popup-video">
				    <div class="embed-responsive embed-responsive-16by9">
					  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zXuMp_35u4I" allowfullscreen></iframe>
					</div>
				</div>
			</div>
          	</div>
        </div>
      </section>
      <!-- video section End Here --> 
	  <!-- service section Starts Here --> 
      <section class="space bg-white service-section">
			<div class="container">
			<div class="row">
	            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	            	<h2>OK, I understand why there are multiple coats of arms for the same surname, but how do I know which one is “mine”?</h2>
	            </div>
          	</div>
          	<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              		<div class="box">
				    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				    	<h3>Tracing Lineage</h3>
		 			 		<p>You would have to trace your lineage/ancestry back into history to see which, if any, coat of arms may have belonged to armigerous (coat of arms owning) members of your family tree. This requires good research skills, time, and access to libraries of information, all of which we possess in full, allowing us perform this unique, tailored service for you.</p>
		 			 		<h3>We provide a risk-free service:</h3>
		 			 		<p>if we can establish that you are related to an armigerous ancestor, we will inform you in a written document with relevant information, whereupon you will be invoiced according to the below (above?) pricing structure. <a href="">If we failed to establish a connection to an armigerous ancestor, you will not be billed!</a></p>
		 			 		<h3>Technicalities</h3>
		 			 		<p>To be clear, technically speaking, in the niche world of heraldry, the fact that your ancestor owned a coat of arms, does not necessarily mean you have the legal right to bear the arms: the rules are much more complicated for how that works. That is why we chose to put the word “mine” in quotation marks.</p>
				    </div>
					</div>	
			 	</div>
			</div>
        	</div>
      </section>
      	<!-- service section Starts Here --> 
		<!-- form section Starts Here --> 
			<section class="space bg-sky">
				<div class="container">
				 	<div class="row">
			        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			        	<div class="comment-wrap">
			        		<div class="row">
			        			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<h2>To get started, all you need to do is populate the below fields and hit the submit button :</h2>
					            </div>
					            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-offset-3 col-lg-6">
				            		<form method="post">
						    			<div class="row">
											<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
												<div class="custom-input">
													<div class="group">      
													  <input type="text" id="Name" name="username" required="">
													  <label>Your First Name And Last Name</label>
													  <!-- <p class="error">Full Name is required</p> -->
													</div>
												</div>
											</div>
											<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
												<div class="custom-input">
													<div class="group">      
													  <input id="custom-check" type="text" name="email" required>
													  <label>Your Email Address</label>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
												<div class="custom-input">
													<div class="group">      
													  <input type="text" name="surname" required>
													  <label>What surname are you interested in tracing the coat of arms for?</label>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
												<div class="check-option option-active">
													<label class="custom-radio-container">I do not have my family tree done already
												    <input type="radio" checked="checked" name="select-option-radio" value="I do not have my family tree done already">
												    <span class="checkmark"></span>
												  </label>
												</div>
											</div>
											<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
												<div class="check-option">
													<label class="custom-radio-container">I have my family tree done already
												    <input type="radio" name="select-option-radio" value="I have my family tree done">
												    <span class="checkmark"></span>
												  </label>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 btn-box text-center">
												<button class="btn btn-lg primary-btn" name="submit" type="submit">Proceed</button>
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
      	<!-- form section End Here -->
</div>

 <script type="text/javascript">
	function tempOn(radio){
    if(radio.checked)
        {
            var radioValue = $("input[name='select-option-radio']:checked").val();
            if (radioValue == "I have my family tree done already") 
            {
            	$("#surname").hide();
            }
            else
            {
            	$("#surname").show();
            }
            //$("#transferInput").val(radioValue);
        }
}
</script>
 <?php get_footer();?>
