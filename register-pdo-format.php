<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$idn = $pass = $confirm_pass = "";
$idn_err = $pass_err = $confirm_pass_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate idn
    if(empty(trim($_POST["card_number"]))){
        $idn_err = "Please enter a Card Number.";
    } else{
        // Prepare a select statement
$sql = "SELECT id, username, password FROM users WHERE username = :username";
        //$sql = "SELECT id FROM tblusers WHERE idn = :idn";
        
        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":idn", $param_idn, PDO::PARAM_STR);
            
            // Set parameters
            $param_idn = trim($_POST["card_number"]);
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                if($stmt->rowCount() == 1){
                    $idn_err = "This card_number is already taken.";
                } else{
                    $idn = trim($_POST["card_number"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        unset($stmt);
    }
    
    // Validate password
    if(empty(trim($_POST["card_pin"]))){
        $password_err = "Please enter a Card Pin.";     
    } elseif(strlen(trim($_POST["card_pin"])) < 6){
        $password_err = "Card Pin must have atleast 6 characters.";
    } else{
        $password = trim($_POST["card_pin"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_pass_err = "Please confirm card Pin.";     
    } else{
        $confirm_pass = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_pass)){
            $confirm_pass_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($idn_err) && empty($pass_err) && empty($confirm_pass_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (username, password) VALUES (:idn, :pass)";
         
        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":idn", $param_idn, PDO::PARAM_STR);
            $stmt->bindParam(":pass", $param_password, PDO::PARAM_STR);
            
            // Set parameters
            $param_idn = $idn;
            $param_password = password_hash($pass, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Something went wrong. Please try again later.";
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
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Sign Up</h2>
        <p>Please fill this form to create an account.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($idn_err)) ? 'has-error' : ''; ?>">
                <label>idn</label>
                <input type="text" name="card_number" class="form-control" value="<?php echo $idn; ?>">
                <span class="help-block"><?php echo $idn_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($pass_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="card_pin" class="form-control" value="<?php echo $pass; ?>">
                <span class="help-block"><?php echo $pass_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($confirm_pass_err)) ? 'has-error' : ''; ?>">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_pass; ?>">
                <span class="help-block"><?php echo $confirm_pass_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
            <p>Already have an account? <a href="login.php">Login here</a>.</p>
        </form>
    </div>    
</body>
</html>
