<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">  
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
      <title>CatFishTech| Admin Panel</title>
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="style2.css" rel='stylesheet' type='text/css' />
  <link href="style3.css" rel='stylesheet' type='text/css' />
    
    <link rel="stylesheet" href="assests/css/style.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
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
    <div class="signup-form">
    <form action="admin.php" method="post" enctype="multipart/form-data">
		<h2>Welcome</h2>
        <br>

            <?php
				session_start();
				include'includes/config.php';
				$ID= $_SESSION["ID"];
				$sql=mysqli_query($conn,"SELECT * FROM register where ID='$ID' ");
				$row  = mysqli_fetch_array($sql);
            ?>
            
        <img src="upload/<?php echo $row['File'] ?>" height="150" width="150" style="border-radius:50%;display:block;margin-left:auto;margin-right:auto;" />
		<p class="hint-text"><br><b>Welcome </b><?php echo $_SESSION["First_Name"] ?> <?php echo $_SESSION["Last_Name"] ?></p>
        <div class="text-center">Want to Leave the Page? <br><a href="logout.php">Logout</a></div>
    </form>
	
</div>
    <br>
    <div class= "footer">
      <p>Made by Kimae Ngowa</p>
      <p>Copyright © 2021 CatFishTech</p>
    </div>
    </div>
 
  

</body>


</html>