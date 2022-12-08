<?php
 error_reporting($level=NULL);
$servername ="localhost";
   $username ="root";
   $password="";
   $db= 'abhi';

   $conn=mysqli_connect($servername,$username,$password,$db);
    mysqli_select_db($conn, $db) or die ("connot to database"); 
   
   ?>

