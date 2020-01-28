
<?php 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: admin/index.html");
    exit;
}
// Initialize the session
session_start();

 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$idn = $pass = "";
$idn_err = $pass_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["card_number"]))){
        $idn_err = "Please enter Card Number.";
    } else{
        $idn = trim($_POST["card_number"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["card_pin"]))){
        $pass_err = "Please enter your Card Pin.";
    } else{
        $pass = trim($_POST["card_pin"]);
    }
    
    // Validate credentials
    if(empty($idn_err) && empty($pass_err)){
        // Prepare a select statement
        $sql = "SELECT id, idn, pass FROM tblusers WHERE idn = :idn";
        
        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":idn", $param_idn, PDO::PARAM_STR);
            
            // Set paramete;;rs
            $param_idn = trim($_POST["card_number"]);
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Check if card Number exists, if yes then verify password
                if($stmt->rowCount() == 1){
                    if($row = $stmt->fetch()){
                        $idn = isset($row["idn"]);
                        $pass = isset($row["pass"]);
                        $hashed_password = $row["pass"];
                        if(password_verify($pass,$hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables03331 	asdf123
                            $_SESSION["loggedin"] = true;
                            $_SESSION["idn"] = $idn;
                            $_SESSION["pass"] = $pass;                            
                            
                            // Redirect user to welcome page
							header("location: admin/index.html");
							exit;
                        } else{
                            // Display an error message if password is not valid
							$pass_err = "The Card Pin you entered was not valid.";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $idn_err = "No account found with that Card Number.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        unset($stmt);
    }
    
    // Close connection
    unset($pdo);
}
?>

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
	<meta name="description" content="AbSCOTT : Teachers Training Center" />
	
	<!-- OG -->
	<meta property="og:title" content="AbSCOTT : Teachers Training Center" />
	<meta property="og:description" content="AbSCOTT : Teachers Training Center" />
	<meta property="og:image" content="" />
	<meta name="format-detection" content="telephone=no">
	
	<!-- FAVICONS ICON ============================================= -->
	<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="assets/images/fff.png" />
	
	<!-- PAGE TITLE HERE ============================================= -->
	<title>AbSCOTT : Teachers Training Center </title>
	
	
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
	
	<!-- STYLESHEETS ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link class="skin" rel="stylesheet" type="text/css" href="assets/css/color/color-1.css">
	
</head>
<body id="bg">
<div class="page-wraper">
	<div id="loading-icon-bx"></div>
	<div class="account-form">
		<div class="account-head" style="background-image:url(assets/images/i4.jpeg); background-repeat: no-repeat; background-size: cover;">
			<a href="index.html"><img src="assets/images/fff.png" alt="" width="250px"></a>
		</div>
		<div class="account-form-inner">
			<div class="account-container">
				<div class="heading-bx left">
					<h2 class="title-head">Login to your <span>Account</span></h2>
					<!--<p>Don't have an account? <a href="register.php">Create one here</a></p>-->
				</div>	
				<form class="contact-bx" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
					<div class="row placeani">
						<div class="col-lg-12">
							<div class="form-group <?php echo (!empty($idn_err)) ? 'has-error' : ''; ?>">
									<label>Your Card Number</label>
									<input name="card_number" type="text"  class="form-control">
									<span><?php echo $idn_err; ?></span>
									<div class="input-group">
							</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group <?php echo (!empty($pass_err)) ? 'has-error' : ''; ?>">
								<div class="input-group"> 
									<label>Your Pin</label>
									<input name="card_pin" type="password" class="form-control" >
									<span><?php echo $pass_err; ?></span>
								</div>
							</div>
						</div>
					<!--<div class="col-lg-12">
							<div class="form-group form-forget">
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="customControlAutosizing">
									<label class="custom-control-label" for="customControlAutosizing">Remember me</label>
								</div>
								<a href="forget-password.html" class="ml-auto">Forgot Password?</a>
							</div>
						</div>-->
						<div class="col-lg-12 m-b30">
							<button name="submit" type="submit" value="Submit" class="btn button-md">Login</button>
						</div>
					<!--<div class="col-lg-12">
							<h6>Login with Social media</h6>
							<div class="d-flex">
								<a class="btn flex-fill m-r5 facebook" href="#"><i class="fa fa-facebook"></i>Facebook</a>
								<a class="btn flex-fill m-l5 google-plus" href="#"><i class="fa fa-google-plus"></i>Google Plus</a>
							</div>
						</div>-->
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
</body>

</html>
