<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: admin.php");
    exit;
}
 
// Include config file
require_once "includes/config.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = $login_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            // Redirect user to welcome page
                            header("location: admin.php");
                        } else{
                            // Password is not valid, display a generic error message
                            $login_err = "Invalid username or password.";
                        }
                    }
                } else{
                    // Username doesn't exist, display a generic error message
                    $login_err = "Invalid username or password.";
                }
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
<html>
<head>
  <title>CatFish Tech| Login Page</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="style2.css" rel='stylesheet' type='text/css' />
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
		<a class="active" href="login.php">Login</a>
    <a href="register.php">Signup</a>
	  </div>
    

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" style="border:1px solid #ccc">
    <div class="imgcontainer">
      <img src="https://www.w3schools.com/howto/img_avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <p style="font-size:16px; color:red" align="center"> </p>
      <label for="username"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" class="form-control" required>

      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" class="form-control" required>
        
            <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>
    <p>Don't have an account? <a href="register.html">Sign up now</a>.</p>
    <div class="clearfix">
    <button type="submit">Login</button>
         <button type="button" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="forgot-password.html">password?</a></span>
      </div>
  </form>
</div>
</body>
</html>
