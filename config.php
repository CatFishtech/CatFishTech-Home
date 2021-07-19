<?php 
$con=mysqli_init(); mysqli_ssl_set($con, NULL, NULL, {ca-cert filename}, NULL, NULL); mysqli_real_connect($con, "catfishtech.mysql.database.azure.com", "catfish@catfishtech", {your_password}, {your_database}, 3306);


?>