<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>CatFish Tech| Admin</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="style2.css" rel='stylesheet' type='text/css' />
  <link href="style3.css" rel='stylesheet' type='text/css' />
</head>

<body>
 
  <div class="sidebar">
    <a class="active" href="admin.php">Dashboard</a>
    <a href="orders.php">Orders</a>
    <a href="breakfast.php">Client Page</a>
    <a href="logout.php">Logout</a>
  </div>
  
  <div class="content">
    <div class="header">
    <h1>CatFish Tech</h1>
    <h2>ADMIN DASHBOARD</h2>
    </div>
    <br>
    <div class= "footer">
      <p>Made by Kimae Ngowa</p>
      <p>Copyright © 2021 CatFishTech</p>
    </div>
    </div>
 
  

</body>


</html>