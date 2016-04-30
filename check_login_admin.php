<?php
ob_start();
$host="localhost"; // Host name 
$username="lapaks"; // Mysql username 
$password="pattake"; // Mysql password 
$db_name="lapaks"; // Database name 
$tbl_name="admin"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form 
$myusername=$_POST['admin_id']; 
$mypassword=$_POST['admin_password']; 

// To protect MySQL injection (more detail about MySQL injection)
$sql="SELECT * FROM $tbl_name WHERE admin_id='$myusername' and admin_password='$mypassword'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"

header("location:admin_home.php");
session_start();
$_SESSION['login_user']=$myusername;

}
else {
echo "Wrong Username or Password";
}
?>
