<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<form action="test2.php" method="post"
enctype="multipart/form-data">
<label for="file">Filename:</label>
<input type="file" name="image" ><br>
<input type="submit" name="submit" value="Submit">
</form>
<?php

if (isset ($_POST['submit']))
{
$con=mysqli_connect("localhost","lapaks","pattake","lapaks");

	 $imageName = mysql_real_escape_string($_FILES['image']['name']);
	 $imageData = mysql_real_escape_string(file_get_contents($_FILES['image']['tmp_name']));
	 $imageType = mysql_real_escape_string($_FILES['image']['type']);

if (substr($imageType, 0,5))
{

mysql_query("INSERT INTO image where values ('1','$imageName','$imageData') ");
echo "image uploaded";
}
}

?>	


</body>
</html>