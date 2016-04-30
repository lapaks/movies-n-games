<?php
session_start();
?>
<?php
$con=mysqli_connect("localhost","lapaks","pattake","lapaks");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="INSERT INTO admin (admin_id, admin_password,  admin_first_name, admin_last_name, admin_type, admin_staff_id, admin_status)
VALUES
(
'$_POST[email1]',
'$_POST[admin_password]',
'$_POST[first_name]',
'$_POST[last_name]',
'Normal',
'$_POST[staff_id]',
'Active'
)";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }

$_SESSION['views']=1;
header('Location: admin_home.php');


mysqli_close($con);
?>
