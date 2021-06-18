<?php  
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
  .list{
    color: blue;
    padding: 20px;
  }
  .list input{
  padding: 5px;
  margin-left: 35px;
}
h3{
  color: red;
}
  </style>
</head>
<body>
    <div class="header">
      <div class="logo">
        <a href="index.php"><img src="images/logo2.jpeg" alt="logo" align="left"
            style="width:150px;height:150px;"></a>
      </div>
        <h1>CatFish Tech</h1>
        <h2>BREAKFAST MENU</h2>
      </div>
      <div class="navbar">
        <a class="active" href="breakfast.php">Breakfast</a>
        <a href="beverage.php">Beverage</a>
        <a href="lunch.php">Lunch</a>
        <div class="log">
          <a href="logout.php">Logout</a>
        </div>
              
       
      </div>
      <br>
      <form action="" method="post">
      <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="https://asianinspirations.com.au/wp-content/uploads/2019/01/R00982_Hong_Kong_Milk_Tea-2.jpg">
            <img src="https://asianinspirations.com.au/wp-content/uploads/2019/01/R00982_Hong_Kong_Milk_Tea-2.jpg" alt="tea" width="600" height="300">
          </a>
          <div class="desc">
            
            <input type="checkbox" id="milk" name="breakfast[]" value="Milk Tea">
            <label for="tea"> Milk Tea</label>
         
          </div>
          </div>
      </div>
      
      
      <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="https://thumbs.dreamstime.com/b/cup-tea-toasted-bread-strawberry-jam-shape-heart-plate-wooden-table-tea-toasted-bread-jam-108192059.jpg">
            <img src="https://thumbs.dreamstime.com/b/cup-tea-toasted-bread-strawberry-jam-shape-heart-plate-wooden-table-tea-toasted-bread-jam-108192059.jpg" alt="tea" width="600" height="300">
          </a>
          <div class="desc">
            
            <input type="checkbox" id="tea-bread" name="breakfast[]" value="Tea and Bread">
            <label for="tea"> Tea and Bread</label>
            
          </div>
          </div>
      </div>
      
      <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="https://images.seekbusiness.com.au/client/original/1018/aef517a7-3597-4135-b876-7327e5bf4cfa.jpg">
            <img src="https://images.seekbusiness.com.au/client/original/1018/aef517a7-3597-4135-b876-7327e5bf4cfa.jpg" alt="breakfast" width="600" height="300">
          </a>
          <div class="desc">
            
            <input type="checkbox" id="full-breakfast" name="breakfast[]" value="Full Breakfast">
            <label for="full"> Full Breakfast</label>
           
          </div>
          </div>
      </div>
      
      <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="https://th.bing.com/th/id/R96d0759594f6564a1a889e9a6224241f?rik=7cr5gx4Pa9Ierg&riu=http%3a%2f%2ffarm5.static.flickr.com%2f4644%2f38749642194_1c8abf1382.jpg&ehk=Y2ybpw8z0hdY6P0txUg9U2yF7ztchZ9NKpgZwnh1UrY%3d&risl=&pid=ImgRaw">
            <img src="https://th.bing.com/th/id/R96d0759594f6564a1a889e9a6224241f?rik=7cr5gx4Pa9Ierg&riu=http%3a%2f%2ffarm5.static.flickr.com%2f4644%2f38749642194_1c8abf1382.jpg&ehk=Y2ybpw8z0hdY6P0txUg9U2yF7ztchZ9NKpgZwnh1UrY%3d&risl=&pid=ImgRaw" alt="sausage"width="600" height="300">
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
       <div class="clearfix">
       <button type="submit" name= "save">PLACE ORDER</button>
      </div>
</form>
    <div class= "footer">
      <p>Made by Kimae Ngowa</p>
      <p>Copyright © 2021 CatFishTech</p>
    </div>
    
    </body>
      
      
      
      
      
      </html>