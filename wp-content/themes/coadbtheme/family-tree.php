 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
 <?php session_start();

 	$name = $_SESSION['post-data']['username'];
	$family = $_SESSION['get-data'];
	$website = $_SESSION['post-data']['website'];
	$surname_interested = $_SESSION['post-data']['surname'];
	$family_info = $_SESSION['post-data']['message'];
	$email = $_SESSION['post-data']['email'];
	$subject = $_SESSION['post-data']['sub'];
	$subject = 'I have my family tree PDF Download';


	/*Template Name: family_tree*/
	get_header('sub');

	if(isset($_POST['submit']))
	{	
		if ( ! function_exists( 'wp_handle_upload' ) ) 
			{
			    require_once( ABSPATH . 'wp-admin/includes/file.php' );
			}
		$uploadedfile = $_FILES['uploadfile'];
		$upload_overrides = array( 'test_form' => false );
		add_filter('upload_dir', 'my_upload_dir');
		$movefile = wp_handle_upload( $uploadedfile, $upload_overrides );
		remove_filter('upload_dir', 'my_upload_dir');

		if ( $movefile ) {
			$to = 'monika.bagadkar@codaemonsoftwares.com';
			$htmlContent = "<html>
							<body>
								<h1>Title: " . $subject . "</h1>
								<h3>Username: " . strip_tags($name) . "</h3>
								<h3>Surname: " . $family . "</h3>
								<h3>Email Address: " . strip_tags($email) . "</h3>
								<h3>Surname Interested In: " . $surname_interested . "</h3>
							</body>
					</html>";

			$message = $htmlContent;
			$message .= "<br>";
			$message .= "File To Download:-"; 
			$message .= "<br>";
			$message .=  strip_tags($movefile['url']);
			
			// Set content-type header for sending HTML email
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			$header .= "Content-Disposition: attachment"; 

		    if (mail($to, $subject, $message, $headers)) {
		    	//session_destroy();
		    	echo "<script type='text/javascript'>
			                swal('Thankyou for you interest, we will get back to you soon');
			                window.location = 'get_home_url()/family_tree/which-coat-of-mine/?surname=".$family."';
			            </script>";
		    }
		    else {
		    	echo "<script type='text/javascript'>
			                swal('Problem in sending mail');
			            </script>";
		    }
		} 
		else {
		    echo "Possible file upload attack!\n";
		}
   }
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
                  <li ><a href="./surname_detail_gallery_info.html">Gallery & Info</a></li>
                  <li ><a href="./surname_detail_purchase-jpg.html">Purchase jpg</a></li>
                  <li ><a href="./surname_detail_buy_clothing_merch.html">buy clothing & merch</a></li>
                  <li class="active"><a href="./surname_detail_which_one_is_mine.html">Which one is mine?</a></li>
		        </ul>
	    	</div>
	    </div>
	  </div>
	</section>
	<!-- tab end Here -->
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
				            		<form enctype="multipart/form-data" method="POST">
						    			<div class="row">
											<div class="col-xs-12 col-sm-12 col-md-6 col-lg-12">
												<div class="col-xs-6 col-sm-6 col-md-12 col-lg-6">
													<div class="custom-input custom-display">
														<label>Your First Name And Last Name :</label>
													</div>
												</div>
												<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
													<div class="custom-input custom-display">
														<div class="group">     
														 <input type="text" id="Name" name="username" value="<?php echo $name; ?>" readonly="">
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-xs-12 col-sm-12 col-md-6 col-lg-12">
												<div class="col-xs-6 col-sm-6 col-md-12 col-lg-6">
													<div class="custom-input custom-display">
														<label>Your Email Address :</label>
													</div>
												</div>
												<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
													<div class="custom-input custom-display">
														<div class="group">     
														 <input type="text" id="Name" name="username" value="<?php echo $email;?>" readonly="">
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-xs-12 col-sm-12 col-md-6 col-lg-12">
												<div class="col-xs-6 col-sm-6 col-md-12 col-lg-6">
													<div class="custom-input custom-display">
														<label>What surname are you interested in tracing the coat of arms for? :</label>
													</div>
												</div>
												<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
													<div class="custom-input custom-display">
														<div class="group">     
														 <input type="text" name="surname" value="<?php echo $surname_interested;?>" readonly="">
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
												<div class="custom-input custom-display">
													<div class="group">      
													 <input type='file' name="uploadfile" value="" class="upload" required="" />
													</div>
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
 	function readURL(input) {
        if (input.files && input.files[0]) {
        	var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result)
                    .width(150)
                    .height(200);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
 </script>
 <?php get_footer();?>
