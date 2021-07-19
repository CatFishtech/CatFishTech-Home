<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: cashier-login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>CatFish Tech| Orders</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="style2.css" rel='stylesheet' type='text/css' />
  <link href="style3.css" rel='stylesheet' type='text/css' />
  <style>
  * {
  box-sizing: border-box;
}

.row {
  margin-left:-5px;
  margin-right:-5px;
  
}
  
.column {
  float: left;
  width: 30%;
  padding: 5px;
  border: 2px solid;
  border-radius: 8px;
  background-color:blue;
  color:white;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}

table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 16px;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other on screens that are smaller than 600 px */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
  }
}
</style>
</head>

<body>
 
<div class="sidebar">
        <a class="active" href="reports.php">Reports</a>
        <a href="orders.php">Orders</a>
        <a href="breakfast.php">Client Page</a>
        <a href="logout.php">Logout</a>
      </div>
  
  <div class="content">
    <div class="header">
    <?php echo "<h1>" . $_SESSION['username'] . "</h1>"; ?>
    <h2>REPORTS</h2>
    </div>
    <br>
    <p><i>Reports will be archived after one week!!</i></p>
    <center><p><i>Weekly report!!</i></p></center>



<center>
    <div class="row">
  <div class="column">
    <table>
      <h4>Total Ordered Breakfast</h4>
      
      <?php
$conn = mysqli_connect("localhost", "root", "", "catfish");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$query1=mysqli_query($conn,"select * from break");
$totalorder=mysqli_num_rows($query1);
{
echo "$totalorder";
}
$conn->close();
?>
    </table>
  </div>
  
  <div class="column">
    <table>
      <h4>Total Ordered Beverage</h4>
      
      <?php
$conn = mysqli_connect("localhost", "root", "", "catfish");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$query1=mysqli_query($conn,"select * from drinks");
$totalorder=mysqli_num_rows($query1);
{
echo "$totalorder";
}
$conn->close();
?>
    </table>
  </div>

  <div class="column">
    <table>
      <h4>Total Ordered Lunch</h4>
      
      <?php
$conn = mysqli_connect("localhost", "root", "", "catfish");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$query1=mysqli_query($conn,"select * from luch");
$totalorder=mysqli_num_rows($query1);
{
echo "$totalorder";
}
$conn->close();
?>
    </table>
  </div>
</div>
</center>



    <div class= "footer">
      <p>Made by Kimae Ngowa</p>
      <p>Copyright © 2021 CatFishTech</p>
    </div>
    </div>
 
  

</body>


</html>