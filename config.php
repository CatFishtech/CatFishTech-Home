
<?php 

$server = "remotemysql";
$user = "SrTfMJpCxK";
$pass = "taBr4zjoLP";
$database = "SrTfMJpCxK";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>