<?php
session_start();
?>
<?php
$host="localhost"; // Host name 
$username="lapaks"; // Mysql username 
$password="pattake"; // Mysql password 
$db_name="lapaks"; // Database name 
$tbl_name="admin"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");


$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$staff_id = $_POST['staff_id'];
$admin_type = $_POST['admin_type'];
$admin_status = $_POST['admin_status'];
$admin_password = $_POST['admin_password'];

// update data in mysql database 
$sql="UPDATE $tbl_name SET 
admin_first_name='$first_name',
admin_last_name='$last_name',
admin_staff_id='$staff_id',
admin_type='$admin_type',
admin_status='$admin_status',
admin_password='$admin_password'
where admin_id= '".$_SESSION['login_user']."'";
$result=mysql_query($sql);

// if successfully updated. 
if($result){
$_SESSION['update_profile']=1;
header('Location: admin_home.php');

}

else {
echo "ERROR";
}?>



