<?php  

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}

if(isset($_POST['save']))  
{  
$host="freedb.tech";//host name  
$username="freedbtech_catfish"; //database username  
$word="catfish61";//database word  
$db_name="freedbtech_catfish";//database name  
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
    color: white;
    padding: 20px;
  }
  .list input{
  padding: 5px;
  margin-left: 35px;
}
h3{
  color: White;
}
.navbar {
    overflow: hidden;
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
    background-color: rgb(38, 90, 231);
    color: black;
  }
  .navbar a.active{
    background-color: rgb(38, 90, 231);
  }
  .footer-dis{
    text-align: center;
    box-sizing: border-box;
    padding: 55px 50px;
    width: 100%;
    color: White;
    background-color: rgb(0, 57, 214);
    
  }
  </style>
</head>
<body>
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
          <a target="_blank" href="https://keyassets-p2.timeincuk.net/wp/prod/wp-content/uploads/sites/53/2010/05/Slimming-Worlds-burger-and-chips.jpg">
            <img src="https://keyassets-p2.timeincuk.net/wp/prod/wp-content/uploads/sites/53/2010/05/Slimming-Worlds-burger-and-chips.jpg" alt="burger" width="600" height="300">
          </a>
          <div class="desc">
            
            <input type="checkbox" id="burger" name="lunch[]" value="Chips Burger">
            <label for="burger"> Burger And Chips</label>
           
          </div>
          </div>
      </div>
      
      
      <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="https://www.nairaland.com/attachments/4044545_16316480grilledroastedhalfchickenwithchipsandketchupgermanfastfoodstockphoto_jpeg980ed654e8faa1819690865612c5bf99">
            <img src="https://www.nairaland.com/attachments/4044545_16316480grilledroastedhalfchickenwithchipsandketchupgermanfastfoodstockphoto_jpeg980ed654e8faa1819690865612c5bf99" alt="chicken" width="600" height="300">
          </a>
          <div class="desc">
            
            <input type="checkbox" id="chicken" name="lunch[]" value="Chips Chicken">
            <label for="chicken"> Chips and Chicken</label>
          
          </div>
          </div>
      </div>
      
      <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="https://twistedgrill.mzizzi.com/wp-content/uploads/2018/07/chapati-beans.jpg">
            <img src="https://twistedgrill.mzizzi.com/wp-content/uploads/2018/07/chapati-beans.jpg" alt="Chapati" width="600" height="300">
          </a>
          <div class="desc">
            
            <input type="checkbox" id="chapati" name="lunch[]" value="Chapati Beans">
            <label for="chapati"> Chapati Beans</label>
           
          </div>
          </div>
      </div>
      
      <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="https://yummy.co.ke/wp-content/uploads/2014/02/Sossi-Pilau.jpg">
            <img src="https://yummy.co.ke/wp-content/uploads/2014/02/Sossi-Pilau.jpg" alt="pilau" width="600" height="300">
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
      <div class="clearfix">
       <center><button type="submit" name= "save">PLACE ORDER</button></center>
      </div>
      
    </form>
     <div class= "footer-dis">
      <p>Made by Kimae Ngowa</p>
      <p>Copyright © 2021 CatFishTech</p>
    </div>
    </body> 
    </html>