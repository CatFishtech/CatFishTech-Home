<?php
// Initialize the session
session_start();
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
  header("location: welcome.php");
  exit;
}
 ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<title>CatFish Tech| Login Page</title>
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
		<a class="active" href="login.php">Login</a>
    <a href="register.php">Signup</a>
	  </div>
      <div class="signup-form">
    <form action="loginprocess.php" method="post" enctype="multipart/form-data">
		<h2 class="hint-text" align="center">Enter Login Details</h2>
        
        <div class="form-group">
        	<input type="email" class="form-control" name="email" placeholder="Email" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" required="required">
        </div>
		<div class="form-group">
            <button type="submit" name="save" class="btn btn-success btn-lg btn-block">Login</button>
        </div>
        <div class="text-center">Don't have an account? <a href="register.php">Register Here</a></div>
    </form>
</div>
</body>
</html>
