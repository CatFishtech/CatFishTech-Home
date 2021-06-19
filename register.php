<?php
// Initialize the session
session_start();
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
    <form action="register_a.php" method="post" enctype="multipart/form-data">
		<h2 class="hint-text" align="center">Create your account</h2>
				<div class="form-group">
        <input type="fullname" class="form-control" name="fullname" placeholder="Full Name" required="required">
        </div>        	
        
        <div class="form-group">
        	<input type="email" class="form-control" name="email" placeholder="Email" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" required="required">
        </div>
                
        <div class="form-group">
			<label class="form-check-label"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> & <a href="#">Privacy Policy</a></label>
		</div>
		<div class="form-group">
            <button type="submit"  class="btn btn-success btn-lg btn-block">Register Now</button>
        </div>
        <div class="text-center">Already have an account? <a href="login.php">Sign in</a></div>
    </form>
	
</div>
</body>
</html>
