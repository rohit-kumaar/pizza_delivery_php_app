<?php

     error_reporting(0);

     $server   = "localhost";
     $username = "root";
     $password = "";
     $dbName   = "pizza delivery app";

     $connection = mysqli_connect($server, $username, $password, $dbName );
     
     if(!$connection)
     {
          die("Connection Failed" . mysqli_connect_error());
     }
     // echo "Success connecting to the db";


     
?>