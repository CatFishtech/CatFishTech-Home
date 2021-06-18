<?php
    $url='remotemysql.com';
    $username='SrTfMJpCxK';
    $password='taBr4zjoLP';
    $conn=mysqli_connect($url,$username,$password,"fregister");
    if(!$conn){
        die('Could not Connect My Sql:' .mysql_error());
    }
?>