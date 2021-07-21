<?php 

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: cashier.php");
}

if (isset($_POST['submit'])) {
	$agent = $_POST['agent'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM user WHERE agent='$agent' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: cashier.php");

	} else {
		echo "<script>alert('Email or Password is Wrong.')</script>";
	}
}
//remember me cookies
if(!empty($_POST["remember"])) {
	setcookie ("agent",$_POST["agent"],time()+ 3600);
	setcookie ("password",$_POST["password"],time()+ 3600);
} else {
	setcookie("agent","");
	setcookie("password","");
}


?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="style.css">


<title>CatFish Tech| Cashier Login</title>
<link href="style1.css" rel='stylesheet' type='text/css' />

</head>
<body style="background-image: url('images/bg 3.jpg');">

      <div class="container">
		<form action="" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
			<div class="input-group">
				<input type="agent" placeholder="Agent Name" name="agent" value="<?php echo $agent; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Login</button>
			</div>
			<p><input type="checkbox" name="remember"> Remember me</p>

		</form>
</div>


</body>
</html>
