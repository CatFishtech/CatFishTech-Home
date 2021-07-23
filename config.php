
<?php 

$server = "catfishtech.database.windows.net";
$user = "catfish";
$pass = "Christine61";
$database = "catfish";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>