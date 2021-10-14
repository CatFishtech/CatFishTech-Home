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
$tbl_name="break"; //table name  
$con=mysqli_connect("$host", "$username", "$word","$db_name")or die("cannot connect");//connection string  
$checkbox1=$_POST['breakfast'];  
$chk="";  
foreach($checkbox1 as $chk1)  
   {  
      $chk .= $chk1.",";  
   }  
$in_ch=mysqli_query($con,"insert into break(name) values ('$chk')");  
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
<title>CatFish Tech| Breakfast</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="style1.css" rel='stylesheet' type='text/css' />
<style>
  body {
    background-image: url('images/home.jpg');
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    height: 100vh;
    
  }
  .list{
    color: grey;
    padding: 20px;
    background: inherit;
  }
  .list input{
  padding: 5px;
  margin-left: 35px;
}
h3{
  color: grey;
}
.navbar {
    overflow: hidden;
    border: 1px white solid;
    
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
    color: rgb(0, 68, 253);
  }
  .navbar a.active{
    color:rgb(0, 68, 253);
  }
  
  .image{
    background-repeat: no-repeat;
    background-attachment: local;  
    background-size: cover;
  }
  section {
    padding: 6px;
    text-align: center;
    color: white;
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
    border-radius: 10px;
  }
  .button:hover {
    opacity: 1;
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
    background-color: inherit;
    color: white;
  }
  
  * {
    box-sizing: border-box;
  }
  .responsive {
    padding: 0 6px;
    float: left;
    width: 24.99999%;
    background-color: inherit;
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
  @media only screen and (max-width: 400px) {
    .navbar a {
      width: 100%;
    }
  }
  @media only screen and (max-width: 500px) {
    .list {
      width: 100%;
    }
  }
  
  </style>
</head>
<body>

<div class="content">

    <section>
      <?php echo "<h1>" . $_SESSION['username'] . "</h1>"; ?>
        <h2>BREAKFAST MENU</h2>
    </section>
      <div class="navbar">
        <a class="active" href="breakfast.php">Breakfast</a>
        <a href="beverage.php">Beverage</a>
        <a href="lunch.php">Lunch</a>
       
              
       
      </div>
      <br>
      <form action="" method="post">
      <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="images/breakfast/milk.jpg">
            <img src="images/breakfast/milk.jpg" alt="tea" width="600" height="300">
          </a>
          <div class="desc">
            
            <input type="checkbox" id="milk" name="breakfast[]" value="Milk Tea">
            <label for="tea"> Milk Tea</label>
         
          </div>
          </div>
      </div>
      
      
      <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="images/breakfast/tea.jpg">
            <img src="images/breakfast/tea.jpg" alt="tea" width="600" height="300">
          </a>
          <div class="desc">
            
            <input type="checkbox" id="tea-bread" name="breakfast[]" value="Tea and Bread">
            <label for="tea"> Tea and Bread</label>
            
          </div>
          </div>
      </div>
      
      <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="images/breakfast/full.jpg">
            <img src="images/breakfast/full.jpg" alt="breakfast" width="600" height="300">
          </a>
          <div class="desc">
            
            <input type="checkbox" id="full-breakfast" name="breakfast[]" value="Full Breakfast">
            <label for="full"> Full Breakfast</label>
           
          </div>
          </div>
      </div>
      
      <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="images/breakfast/Sausage.jpg">
            <img src="images/breakfast/Sausage.jpg" alt="sausage"width="600" height="300">
          </a>
          <div class="desc">
            
            <input type="checkbox"name="breakfast[]" value="Sausage and Eggtoast">
            <label for="sausage"> Sausage and Eggtoast</label>
           
          </div>
          </div>
      </div>
      <br>
      <div class="list">
      <p> 
        <h3>Kindly select Table No:</h3>
        
     <input type="checkbox" id="tea" name="breakfast[]" value="Table 1">
     <label for="tea"> Table 1</label>
     <input type="checkbox" id="tea" name="breakfast[]" value="Table 2">
     <label for="tea"> Table 2</label>
     <input type="checkbox" id="tea" name="breakfast[]" value="Table 3">
     <label for="tea"> Table 3</label>
     <input type="checkbox" id="tea" name="breakfast[]" value="Table 4">
     <label for="tea"> Table 4</label>
     <input type="checkbox" id="tea" name="breakfast[]" value="Table 5">
     <label for="tea"> Table 5</label>
     <input type="checkbox" id="tea" name="breakfast[]" value="Table 6">
     <label for="tea"> Table 6</label>
     <input type="checkbox" id="tea" name="breakfast[]" value="Table 7">
     <label for="tea"> Table 7</label>
     <input type="checkbox" id="tea" name="breakfast[]" value="Table 8">
     <label for="tea"> Table 8</label>
     <input type="checkbox" id="tea" name="breakfast[]" value="Table 9">
     <label for="tea"> Table 9</label>
     </p>
     </div>
     
       <center><button class="button" type="submit" name= "save">PLACE ORDER</button></center>
</form>
    </div>
    </body>
    </html>