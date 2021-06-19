
<?php 

$server = "freedb.tech";
$user = "freedbtech_catfish";
$pass = "catfish61";
$database = "freedbtech_catfish";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>