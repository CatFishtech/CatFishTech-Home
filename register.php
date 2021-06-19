<?php
// Include config file
require_once "config.php";
 

// Define variables and initialize with empty values
$email = $password = $confirm_password = $fullname= "";
$email_err = $password_err = $confirm_password_err = $fullname_err= "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate email
    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter a email.";
    } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["email"]))){
        $email_err = "Email can only contain letters, numbers, and underscores.";
    } else{
        // Prepare a select statement
        $sql = "SELECT ID FROM register WHERE email = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_email);
            
            // Set parameters
            $param_email = trim($_POST["email"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $email_err = "This email is already taken.";
                } else{
                    $email = trim($_POST["email"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
      // Validate Full Name
      if(empty(trim($_POST["fullname"]))){
        $email_err = "Please enter a fullname.";
    } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["fullname"]))){
        $email_err = "Full Name can only contain letters";
    } else{
        // Prepare a select statement
        $sql = "SELECT ID FROM register WHERE fullname = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_fullname);
            
            // Set parameters
            $param_fullname = trim($_POST["fullname"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $fullname_err = "This Name is already taken.";
                } else{
                    $fullname = trim($_POST["fullname"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($email_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO register (email,fullname, password) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_email, $param_password,$param_fullname);
            
            // Set parameters
            $param_email = $email;
            $param_fullname = $fullname;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<title>Sign Up| CatFish Tech.</title>
<link href="style1.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="assests/css/style.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="header">
      <div class="logo">
        <a href="index.php"><img src="images/logo2.jpeg" alt="logo" align="left"
            style="width:80px;height:80px;"></a>
    </div>
		<h1>CatFish Tech</h1>
		<h2>FOOD ORDERING PLATFORM</h2>
	  </div>
	  <div class="navbar">
		<a href="index.php">Home</a>
		<a href="login.php">Login</a>
    <a class="active" href="register.php">Signup</a>
	  </div>

      <div class="signup-form">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
		<h2 class="hint-text" align="center">Create your account</h2>
				<div class="form-group">
        <input type="fullname" class="form-control" name="fullname" placeholder="Full Name"<?php echo (!empty($fullname_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $fullname; ?>">
                <span class="invalid-feedback"><?php echo $fullname_err; ?></span>
            </div>     
        </div>        	
        
        <div class="form-group">
        	<input type="email" class="form-control" name="email" placeholder="Email"<?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $email; ?>">
                <span class="invalid-feedback"><?php echo $email_err; ?></span>
            </div>     
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div>    
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password"<?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>">
                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
            </div>     
        </div>
                
        <div class="form-group">
			<label class="form-check-label"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> & <a href="#">Privacy Policy</a></label>
		</div>
		<div class="form-group">
            <button type="submit"  class="btn btn-primary" value="submit">Register Now</button>
        </div>
        <div class="text-center">Already have an account? <a href="login.php">Sign in</a></div>
    </form>
	
</div>
</body>
</html>
