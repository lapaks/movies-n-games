<?php

$con=mysqli_connect("localhost","lapaks","pattake","lapaks");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$id = addslashes($_REQUEST['id']);

$image = mysql_query("select * from image where id=$id");
$image = mysql_fetch_assoc($image);
$image = $image['image'];

header("content-type: image/jpeg");
echo $image;

?>