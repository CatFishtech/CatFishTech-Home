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
  background-color: blue;
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
        <a class="active" href="cashier-orders.php">Orders</a>
        <a href="breakfast.php">Client Page</a>
        <a href="logout.php">Logout</a>
      </div>
  
  <div class="content">
    <div class="header">
    <?php echo "<h1>" . $_SESSION['username'] . "</h1>"; ?>
    <h2>ORDERS</h2>
    </div>
    <br>
    <p><i>Reports will be archived after one week!!</i></p>

    <center><div class="row">
  <div class="column">
    <table>
      <h4>Breakfast</h4>
 
      <tr>
        <th>Name</th>
         <th>Entry Time</th>
      </tr>
      <?php
$conn = mysqli_connect("localhost", "root", "", "catfish");


// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT name, entrytime FROM break";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["name"]. "</td><td>" . $row["entrytime"] . "</td><td>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
    </table>
  </div>
  <div class="column">
    <table>
      <h4>Beverage</h4>
      <tr>
        <th>Name</th>
         <th>Entry Time</th>
      </tr>
      <?php
$conn = mysqli_connect("localhost", "root", "", "catfish");


// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT name, entrytime FROM drinks";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["name"]. "</td><td>" . $row["entrytime"] . "</td><td>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
    </table>
  </div>
  <div class="column">
    <table>
      <h4>Lunch</h4>
      <tr>
        <th>Name</th>
         <th>Entry Time</th>
      </tr>
      <?php
$conn = mysqli_connect("localhost", "root", "", "catfish");


// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT name, entrytime FROM luch";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["name"]. "</td><td>" . $row["entrytime"] . "</td><td>";
}
echo "</table>";
} else { echo "0 results"; }
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