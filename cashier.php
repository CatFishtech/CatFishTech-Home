<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: cashier-login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>CatFishTech| Cashier Panel</title>
  <link href="style2.css" rel='stylesheet' type='text/css' />
  <link href="style3.css" rel='stylesheet' type='text/css' />
    
</head>

<body>
 
  <div class="sidebar">
    <a class="active" href="orders.php">Orders</a>
    <a href="breakfast.php">Client Page</a>
    <a href="logout.php">Logout</a>
  </div>
  
  <div class="content">
    <div class="header">
    <?php echo "<h1>" . $_SESSION['username'] . "</h1>"; ?>
    <h2>CASHIER</h2>
    </div><br>

    <br>
    <div class= "footer">
      <p>Made by Kimae Ngowa</p>
      <p>Copyright © 2021 CatFishTech</p>
    </div>
    </div>
 
  

</body>


</html>