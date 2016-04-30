<?php
ini_set('error_reporting', 0);
ini_set('display_errors', 0);
?>
<?php session_start();?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
</script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="admin.css" />
<!-- HTML5 shim for IE backwards compatibility -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<body>
<header><img src="images/logo_red.png" width="250" height="40"></header>
<div class="wrapper">
<?php include ('admin_menu.php');?>
<div id="content">
<div id="view_admin"><img src="images/user-info-icon.png" width="128" height="128"></br> VIEW ADMIN </div>
<div id="view_admin_content">
<?php
if (!isset($_SESSION['login_user'])): ?>
<?php header('Location: index.php');?>
<?php endif?>
<?php include ('connect.php'); 
$id=$_GET['id'];
$data = mysql_query("SELECT * FROM admin WHERE admin_id='$id'")
or die(mysql_error()); 
$info = mysql_fetch_array( $data ); 
?>

<form action="update_admin.php" method="post" >
<label>ID :</label><input type="text" name="admin_id" id="admin_id" disabled value= "<?php echo $_GET["id"]; ?>"/><br/>
<label>First Name :</label><input type="text" name="first_name" id="first_name" style="text-transform:uppercase" value= "<?php echo "$info[admin_first_name]";?>"/><br/>
<label>Last Name :</label><input type="text" name="last_name" id="last_name" style="text-transform:uppercase" value= "<?php echo "$info[admin_last_name]";?>"/><br/>
<label>Staff ID :</label><input type="text" name="staff_id" id="staff_id"  style="text-transform:uppercase"value= "<?php echo "$info[admin_staff_id]";?>"/><br/>
<label>Admin Type  :</label>
<select>
<option value = "<?php echo "$info[admin_staff_id]";?>"  style="text-transform:uppercase"><?php echo "$info[admin_type]";?></option>
<option value = "SUPER"  style="text-transform:uppercase">SUPER</option>
</select><br/>
<label>Admin Status   :</label>
  <select>
    <option value = "0"  style="text-transform:uppercase"><?php echo "$info[admin_status]";?></option>
    <option value = "1"  style="text-transform:uppercase">ACTIVE</option>
    <option value = "2"  style="text-transform:uppercase">INACTIVE</option>
  </select><br/>
<label>Password :</label><input type="password" name="admin_password" id="admin_password"   value= ""/><br/>
<label>Re-Password :</label><input type="password" name="re_user_password" id="re_user_password"  value= ""/><br/>
<input type="submit" name="submit" id="submit" value="Save Changes" style="width:100px;" />
</form>
</div>
</div>
</div>
<?php
if (isset($_SESSION['login_user'])): ?>
<?php echo $_SESSION['login_user'];?>
<?php endif?>
</body>
</html>
