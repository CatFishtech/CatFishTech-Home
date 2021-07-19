<?php  

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}

if(isset($_POST['save']))  
{  
  $host="localhost";//host name  
  $username="root"; //database username  
  $word="";//database word  
  $db_name="catfish";//database name 
$tbl_name="luch"; //table name  
$con=mysqli_connect("$host", "$username", "$word","$db_name")or die("cannot connect");//connection string  
$checkbox1=$_POST['lunch'];  
$chk="";  
foreach($checkbox1 as $chk1)  
   {  
      $chk .= $chk1.",";  
   }  
$in_ch=mysqli_query($con,"insert into luch(name) values ('$chk')");  
if($in_ch==1)  
   {  
      echo'<script>alert("Order Sent !!")</script>';  
   }  
else  
   {  
      echo'<script>alert("Order FAILED!!")</script>';  
   }  
}  
?>  


<!DOCTYPE html>
<html lang="en">
<head>
<title>CatFish Tech| Lunch</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="style1.css" rel='stylesheet' type='text/css' />
<style>
  .list{
    color: black;
    padding: 20px;
  }
  .list input{
  padding: 5px;
  margin-left: 35px;
}
h3{
  color: black;
}
.navbar {
    overflow: hidden;
    background-color: rgb(9, 3, 94);
  }
  
  .navbar a {
    float: left;
    color: White;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
  }
  
  .navbar a:hover {
    background-color: rgb(0, 68, 253);
    color: black;
  }
  .navbar a.active{
    background-color: rgb(0, 68, 253);
  }
  .image{
    background-repeat: no-repeat;
  background-attachment: local;  
  background-size: cover;
  }
  .header {
    padding: 6px;
    text-align: center;
    color: white;
    background-image:url("images/mountains.jpg");
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
  }
  .button {
    background-color: blue;
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    font-size: 16px;
    margin: 4px 2px;
    opacity: 0.6;
    transition: 0.3s;
    display: inline-block;
    text-decoration: none;
    cursor: pointer;
  }
  .button:hover {
    opacity: 1;
  }
  .footer-dis{
    text-align: center;
    box-sizing: border-box;
    padding: 55px 50px;
    width: 100%;
    color: black;
    
  }

  div.gallery {
    border: 1px solid #ccc;
  }
  
  div.gallery:hover {
    border: 1px solid #777;
  }
  
  div.gallery img {
    width: 100%;
    height: 400;
  }
  
  div.desc {
    padding: 15px;
    text-align: center;
    background-color:#120ef3;
    color: white;
  }
  
  * {
    box-sizing: border-box;
  }
  .responsive {
    padding: 0 6px;
    float: left;
    width: 24.99999%;
    background-color: rgb(250, 250, 250);
  }
  
  @media only screen and (max-width: 700px) {
    .responsive {
      width: 49.99999%;
      margin: 6px 0;
    }
  }
  
  @media only screen and (max-width: 500px) {
    .responsive {
      width: 100%;
    }
  }
  </style>
</head>
<body style="background-color: white">

    <div class="header">
      <?php echo "<h1>" . $_SESSION['username'] . "</h1>"; ?>
        <h2>LUNCH MENU</h2>
      </div>
      <div class="navbar">
      <a href="breakfast.php">Breakfast</a>
        <a href="beverage.php">Beverage</a>
         <a class ="active" href="lunch.php">Lunch</a>
         
        <div class="log">
          <a href="logout.php">Logout</a>
        </div>
      </div>
      <br>
      <form action="" method="post">
      <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="images/lunch/burger.jpg">
            <img src="images/lunch/burger.jpg" alt="burger" width="600" height="300">
          </a>
          <div class="desc">
            
            <input type="checkbox" id="burger" name="lunch[]" value="Chips Burger">
            <label for="burger"> Burger And Chips</label>
           
          </div>
          </div>
      </div>
      
      
      <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="images/lunch/chips.jpg">
            <img src="images/lunch/chips.jpg" alt="chicken" width="600" height="300">
          </a>
          <div class="desc">
            
            <input type="checkbox" id="chicken" name="lunch[]" value="Chips Chicken">
            <label for="chicken"> Chips and Chicken</label>
          
          </div>
          </div>
      </div>
      
      <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="images/lunch/chapati-beans.jpg">
            <img src="images/lunch/chapati-beans.jpg" alt="Chapati" width="600" height="300">
          </a>
          <div class="desc">
            
            <input type="checkbox" id="chapati" name="lunch[]" value="Chapati Beans">
            <label for="chapati"> Chapati Beans</label>
           
          </div>
          </div>
      </div>
      
      <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="images/lunch/pilau.jpg">
            <img src="images/lunch/pilau.jpg" alt="pilau" width="600" height="300">
          </a>
          <div class="desc">
            <input type="checkbox" id="rice" name="lunch[]" value="pilau">
            <label for="rice"> Pilau</label>
           
          </div>
          </div>
      </div>
      <br>
      <div class="list">
      <p> 
        <h3>Kindly select Table No:</h3>
      <input type="checkbox" id="food" name="lunch[]" value="Table 1">
     <label for="food"> Table 1</label>
     <input type="checkbox" id="food" name="lunch[]" value="Table 2">
     <label for="food"> Table 2</label>
     <input type="checkbox" id="food" name="lunch[]" value="Table 3">
     <label for="food"> Table 3</label>
     <input type="checkbox" id="food" name="lunch[]" value="Table 4">
     <label for="food"> Table 4</label>
     <input type="checkbox" id="food" name="lunch[]" value="Table 5">
     <label for="food"> Table 5</label>
     <input type="checkbox" id="food" name="lunch[]" value="Table 6">
     <label for="food"> Table 6</label>
     <input type="checkbox" id="food" name="lunch[]" value="Table 7">
     <label for="food"> Table 7</label>
     <input type="checkbox" id="food" name="lunch[]" value="Table 8">
     <label for="food"> Table 8</label>
     <input type="checkbox" id="food" name="lunch[]" value="Table 9">
     <label for="food"> Table 9</label>
     </p>
     </div>
     <center><button class="button" type="submit" name= "save">PLACE ORDER</button></center>
     
    </form>
     <div class= "footer-dis">
      <p>Made by Kimae Ngowa</p>
      <p>Copyright © 2021 CatFishTech</p>
    </div>
    </body> 
    </html>