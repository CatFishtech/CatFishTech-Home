<?php 

$server = "local";
$user = "root";
$pass = "";
$database = "catfish";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>