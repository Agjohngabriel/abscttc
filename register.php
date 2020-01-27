<!DOCTYPE html>
<html lang="en">

<head>

	<!-- META ============================================= -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	
	<!-- DESCRIPTION -->
	<meta name="description" content="ASCTTC : Teachers Training Center" />
	
	<!-- OG -->
	<meta property="og:title" content="ASCTTC : Teachers Training Center" />
	<meta property="og:description" content="ASCTTC : Teachers Training Center" />
	<meta property="og:image" content="" />
	<meta name="format-detection" content="telephone=no">
	
	<!-- FAVICONS ICON ============================================= -->
	<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="assets/images/fff.png" />
	
	<!-- PAGE TITLE HERE ============================================= -->
	<title>ASCTTC : Teachers Training Center </title>
	
	
	<!-- MOBILE SPECIFIC ============================================= -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.min.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
	
	<!-- All PLUGINS CSS ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/assets.css">
	
	<!-- TYPOGRAPHY ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/typography.css">
	
	<!-- SHORTCODES ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/shortcodes/shortcodes.css">
	<link rel="stylesheet" type="text/css" href="assets/css/font-awesome-animation.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
	
	<!-- STYLESHEETS ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link class="skin" rel="stylesheet" type="text/css" href="assets/css/color/color-1.css">
	
</head>
<body id="bg" onLoad="document.registration.userid.focus();">
<div class="page-wraper">
	<div id="loading-icon-bx"></div>
	<div class="account-form">
		<div class="account-head" style="background-image:url(assets/images/i4.jpeg); background-repeat: no-repeat; background-size: cover;">
			<a href="index.html"><img src="assets/images/fff.png" alt=""></a>
		</div>
		<div class="account-form-inner">
			<div class="account-container">
				<div class="heading-bx left">
					<h2 class="title-head">Sign Up <span>Now</span></h2>
					<p>Login Your Account <a href="login.php">Click here</a></p>
				</div>	
				<form class="contact-bx" name='registration' onSubmit="return formValidation();">
					<div class="row placeani">
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group">
									<label>Full Name</label>
									<input name="dzName" type="text" required="" class="form-control">
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group">
									<label>Phone No.</label>
									<input name="dzNumber" type="text" required="" class="form-control">
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group"> 
									<label>Full Name Of School</label>
									<input name="dzName" type="text" class="form-control" required="">
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group"> 
									<label>School Address</label>
									<input name="dzName" type="text" class="form-control" required="">
								</div>
							</div>
						</div>
						<div class="col-lg-12">
								<label for="country">local government</label>
								<div class="d-flex form-group">
										<div class="flex-fill m-r5 col-lg-6 "><select class="input-group" name="country">
												<option selected="" value="Default">Select L.G.A.</option>
												<option value="AF">Aba North</option>
												<option value="AL">Aba south</option>
												<option value="DZ">Arochukwuu</option>
												<option value="AS">Bende</option>
												<option value="AD">USA</option>
												<option value="AS">Ghana</option>
												<option value="AD">USA</option>
												<option value="AS">Russia</option>
												<option value="AD">USA</option>
												<option value="AS">Russia</option>
												<option value="AD">USA</option>
												<option value="AS">Russia</option>
												<option value="AD">USA</option>
												<option value="AS">Russia</option>
												<option value="AD">USA</option>
												<option value="AS">Russia</option>
												<option value="AD">USA</option>
												</select></div>

												<div class="flex-fill m-r5">
													<label id="gender">Sex:</label>
													
													<input class="flex-fill m-l5 " type="radio" name="sex" value="Male" /><span></span>Male</span>
													<input class="flex-fill m-l5 " type="radio" name="sex" value="Female" /><span>Female</span>
												</div>
	
								</div>
							</div>
						
						<div class="col-lg-12 m-b30">
							<button name="submit" type="submit" value="Submit" class="btn button-md">Sign Up</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- External JavaScripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/vendors/bootstrap/js/popper.min.js"></script>
<script src="assets/vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
<script src="assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
<script src="assets/vendors/magnific-popup/magnific-popup.js"></script>
<script src="assets/vendors/counter/waypoints-min.js"></script>
<script src="assets/vendors/counter/counterup.min.js"></script>
<script src="assets/vendors/imagesloaded/imagesloaded.js"></script>
<script src="assets/vendors/masonry/masonry.js"></script>
<script src="assets/vendors/masonry/filter.js"></script>
<script src="assets/vendors/owl-carousel/owl.carousel.js"></script>
<script src="assets/js/functions.js"></script>
<script src="assets/js/contact.js"></script>
<script src='assets/vendors/switcher/switcher.js'></script>
<script src='assets/js/formvalidation.js'></script>

</body>

</html>
