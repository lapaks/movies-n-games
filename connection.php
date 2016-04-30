<?php
$username = "pattake_pattake";
$password = "jhg(*&LKHJG#2";
$hostname = "localhost"; 

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password) 
  or die("Unable to connect to MySQL");
echo "Connected to MySQL<br>";
?>

