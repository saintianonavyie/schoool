<!DOCTYPE html>
<html lang="en">
  <head>
    <title>EDU-TECH University : The Success To Achieve</title>
    <meta charset="utf-8">
		
	<!-- FAVICONS ICON ============================================= -->
	<link rel="icon" href="../error-404.php" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="../images/favicon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1,>
    
    <link rel="stylesheet" href="../css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="../css/animate.css">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/ionicons.min.css">
    <link rel="stylesheet" href="../css/flaticon.css">
    <link rel="stylesheet" href="../css/icomoon.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="js/all.js"></script>
  </head>
  <body>
	  <div class="bg-top navbar-light">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-center align-items-stretch">
    			<div class="col-md-4 d-flex align-items-center py-4">
    				<a class="navbar-brand" href="index.php">EDU-TECH <span>Institution</span></a>
    			</div>
	    		<div class="col-lg-8 d-block">
		    		<div class="row d-flex">
					    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
					    	<div class="icon d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
					    	<div class="text">
					    		<span>Email</span>
								<span>
									<a target="_blank" class="dn_btn" href="mailto:ferdinandchidubem3@gmail.com">ferdinandchidubem3@gmail.com</a></span>
							
						    </div>
					    </div>
					    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
					    	<div class="icon d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <div class="text">
						    	<span>Call</span>
						    	<span>Call Us:	
									<a target="_blank" class="dn_btn" href="tel:+2347015516875">+2347015516875</a></span>
						    </div>
					    </div>
					    <div class="col-md topper d-flex align-items-center justify-content-end">
					    	<p class="mb-0">
							<span>Website</span> <br>
	            				<span><a target="_blank" class="dn_btn" href="https://Edu-techInstitution.com">Edu-techInstitution.com</a></span>
					    	</p>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
	  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container d-flex align-items-center px-4">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <form action="#" class="searchform order-lg-last">
          <div class="form-group d-flex">
            <input type="text" class="form-control pl-3" placeholder="Search">
            <button type="submit" placeholder="" class="form-control search"><span class="ion-ios-search"></span></button>
          </div>
        </form>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav mr-auto">
	        	<li class="nav-item active"><a href="index.php" class="nav-link pl-0">Home</a></li>
	        	<li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
	        	<li class="nav-item"><a href="courses.php" class="nav-link">Courses</a></li>
	        	<li class="nav-item"><a href="courses.php" class="nav-link">Learn</a></li>
	        	<li class="nav-item"><a href="teacher.php" class="nav-link">Staff</a></li>
	        	<li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
				<li class="nav-item"><a href="admin/contact.php" class="nav-link">Contact</a></li>
				<li class="nav-item"><a href="admin/index.php" class="nav-link" target="_blank">Dashboard</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('../images/bg_1.jpg'); color: #fff">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Contact Us</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i class="ion-ios-arrow-forward"></i></span></p>
          	<div class="align-self-stretch box text-center text-white">
          		<h3 class="mb-3">Address</h3>
	            <p>Awak, Anambra State, Nigeria</p>
	        </div>
        </div>
          </div>
      </div>
    </section>

    
	
	<?php 

		$msg = '';
		$msgClass = '';
		//check for submit
		if(filter_has_var(INPUT_POST, 'submit')){
			// Get form Data
			$name = htmlspecialchars($_POST['name']);
			$email = htmlspecialchars($_POST['email']);
			$subject = htmlspecialchars($_POST['subject']);
			$message = htmlspecialchars($_POST['message']);

			// check Required field

			if(!empty($name) && !empty($email) && !empty($subject) && !empty($message)){
				// passed
				// check Email
				if(filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
					// failed
				$msg = 'Please Use Valid Email';
				$msgClass = 'alert-danger';
				} else {
					// passed
					// recipiet Email
					$toEmail = 'ferdinandchidubem3@gmail.com';
					$subjects = 'Contact Reguest From '.$name;
					$body = '<h2> Contact Request</h2>
							<h4> Name</h4><p>'.$name.'</p>
							<h4> Name</h4><p>'.$name.'</p>
							<h4> Message</h4><p>'.$message.'</p>
					';

					// Email Headers
					$headers = "MIME-Version: 1.0" ."\r\n";
					$headers .="Content-Type:text/html;charset=UTF-8" . "\r\n";

					// Additional headers
					$headers .= "From: " .$name. "<".$email.">". "\r\n";

					if(mail($toEmail, $subject, $body, $headers)) {
						// Email Sent
						$msg = 'Your Email Has Been Sent';
						$msgClass = 'alert-success';
					}else {
				// failed
				$msg = 'Your Email Was Not Sent';
				$msgClass = 'alert-danger';
			}
				}
			} else {
				// failed
				$msg = 'Please fill in All Fields';
				$msgClass = 'alert-danger';
			}
		};
	
	?>
		
<section class="ftco-section ftco-no-pt ftco-no-pb contact-section">

<?php if($msg != ''): ?><div class="alert text-center <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
<?php endif; ?>

	<div class="container">
		<div class="row d-flex align-items-stretch justify-content-center no-gutters">
			<div class="col-md-6 p-4 p-md-5 order-md-last bg-light">
				 
				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
					<div class="form-group">
						<input type="text" name="name" class="form-control" value="<?php echo isset($_POST['name']) ? $name : ''; ?>" placeholder="Your Name">
					</div>
					<div class="form-group">
						<input type="text" name="email" class="form-control" value="<?php echo isset($_POST['email']) ? $email : ''; ?>" placeholder="Your Email">
					</div>
					<div class="form-group">
						<input type="text" name="subject" class="form-control" value="<?php echo isset($_POST['subject']) ? $subject : ''; ?>" placeholder="Subject">
					</div>
					<div class="form-group">
						<textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="Message"><?php echo isset($_POST['message']) ? $message : ''; ?></textarea>
					</div>
					<div class="form-group"> 
						<button type="submit" name="submit" class="btn btn-primary py-3 px-5">Send Message</button>
					</div>
				</form>
			</div>
			<div class="col-md-6 d-flex align-items-stretch align-items-center" style="background-image: url(assets/images/background/bg2.jpg); background-position: center; background-size: 90%; background-repeat: no-repeat; flex-direction: column; margin-top: 5%">
				<h5 class="text-center">MAP TRACK</h5>
				<div id="map" ></div>
			</div>
		</div>
	</div>
</section>
		
		  <!--================ start footer Area  =================-->	
	<footer class="footer-area p_120 p-10">
		<div class="container">
			<div class="row pt-20">
				<div class="col-lg-2  col-md-6 col-sm-6">
					<div class="single-footer-widget tp_widgets">
					   <h6 class="footer_title">Top Products</h6>
						<ul class="list">
							<li><a target="_blank" href="#">Managed Website</a></li>
							<li><a target="_blank" href="#">Manage Reputation</a></li>
							<li><a target="_blank" href="#">Power Tools</a></li>
							<li><a target="_blank" href="#">Marketing Service</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2  col-md-6 col-sm-6">
					<div class="single-footer-widget tp_widgets">
					   <h6 class="footer_title">Quick Links</h6>
						<ul class="list">
				<li><a href="#"><span class="ion-ios-arrow-round-forward"></span> Home</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward"></span> About</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward"></span> Services</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward"></span> Deparments</a></li>
				<li><a href="#"><span class="ion-ios-arrow-round-forward"></span> Contact</a></li>
				
						</ul>
					</div>
				</div>
				<div class="col-lg-2  col-md-6 col-sm-6">
					<div class="single-footer-widget tp_widgets">
					   <h6 class="footer_title">Features</h6>
						<ul class="list">
							<li><a target="_blank" href="#">Jobs</a></li>
							<li><a target="_blank" href="#">Brand Assets</a></li>
							<li><a target="_blank" href="#">Investor Relations</a></li>
							<li><a target="_blank" href="#">Terms of Service</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2  col-md-6 col-sm-6">
					<div class="single-footer-widget tp_widgets">
					   <h6 class="footer_title">Resources</h6>
						<ul class="list">
							<li><a target="_blank" href="#">Guides</a></li>
							<li><a target="_blank" href="#">Research</a></li>
							<li><a target="_blank" href="#">Experts</a></li>
							<li><a target="_blank" href="#">Agencies</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-6">
					<a target="_blank"side class="f_widget news_widget">
						<div class="f_title">
							<h3 class="footer_title">Newsletter</h3>
						</div>
						<p>Stay updated with our latest trends</p>
						<div id="mc_embed_signup">
							<form target="_blank" action="" method="get" class="subscribe_form relative">
								<div class="input-group d-flex flex-row">
									<input name="EMAIL" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
									<button class="btn sub-btn"><span class="fa fa-arrow-right"></span></button>		
								</div>				
							</form>
						</div>
					</aside>
				</div>

				<ul>
				<li><span class="icon icon-map-marker"></span><span class="text">Awka, Awka North, Anambra State, Nigeria</span></li>
				<li><a href="#"><span class="icon icon-phone"></span><span class="text"> +234 701 551 6875</span></a></li>
				<li><a href="#"><span class="icon icon-envelope"></span><span class="text"> ferdinandchidubem3@gmail.com</span></a></li>
				</ul>
			</div>
			<div class="row footer-bottom d-flex justify-content-between align-items-center">
				<p class="col-lg-8 col-md-8 footer-text m-0">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved, <i class="fa fa-heart" aria-hidden="true"></i> by <a target="_blank" href="https://twitter.com/saintianonavyie" target="_blank">@saintianonavyie</a>
</p>
				<div class="col-lg-4 col-md-4 footer-social">
					<a target="_blank" href="#"><i class="fab fa-facebook"></i></a>
					<a target="_blank" href="#"><i class="fab fa-twitter"></i></a>
					<a target="_blank" href="#"><i class="fab fa-dribbble"></i></a>
					<a target="_blank" href="#"><i class="fab fa-behance"></i></a>
				</div>
			</div>
		</div>
	</footer>
	<!--================ End footer Area  =================-->
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="../js/jquery.min.js"></script>
  <script src="../js/jquery-migrate-3.0.1.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/jquery.easing.1.3.js"></script>
  <script src="../js/jquery.waypoints.min.js"></script>
  <script src="../js/jquery.stellar.min.js"></script>
  <script src="../js/owl.carousel.min.js"></script>
  <script src="../js/jquery.magnific-popup.min.js"></script>
  <script src="../js/aos.js"></script>
  <script src="../js/jquery.animateNumber.min.js"></script>
  <script src="../js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="../js/google-map.js"></script>
  <script src="../js/main.js"></script>
    
  </body>
</html>