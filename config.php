
<?php 

$server = "db4free.net";
$user = "catfish";
$pass = "cUAKF2J''jGvSjC";
$database = "catfish";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>