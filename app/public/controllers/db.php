<?php
    $servername='mysql';
    $username='root';
    $password='1003752098Sql.*';
    $dbname = "UMBE_COMMERCE";
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
      if(!$conn){
          die('Could not Connect MySql Server:'.mysql_error());
        }
?>