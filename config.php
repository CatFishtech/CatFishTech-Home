<?php
    $url='remotemysql.com';
    $username='SrTfMJpCxK';
    $password='taBr4zjoLP';
    $dbname='SrTfMJpCxK'
    $conn=mysqli_connect($url,$username,$password,$dbname);
    if(!$conn){
        die('Could not Connect My Sql:' .mysql_error());
    }
?>