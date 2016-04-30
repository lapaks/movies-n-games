<?php session_start();?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Pattake.com - Your Online Move & Game Store</title>
<link rel="stylesheet" type="text/css" href="admin.css" />
<link rel="icon" type="image/png" href="/images/favicon.ico" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script language="javascript" type="text/javascript" src="jquery.js"></script>
</head>
<body>
<header><img src="images/logo_red.png" width="250" height="40" ></header>
<div class="wrapper">
<?php include ('admin_menu.php');?>
<div id="content">
<div id="view_admin"><img src="images/User-icon.png" width="128" height="151"></br> ADD ADMIN </div>
<div id="add_admin_content" class="wrapper">
<form method="post" action="insert_admin.php" >
<label>First Name</label><input type="text" name="first_name" id="first_name" style="text-transform:uppercase"><br/>
<label>Last Name</label><input type="text" name="last_name" id="last_name" style="text-transform:uppercase" ><br/>
<label>Staff ID</label><input type="text" name="staff_id" id="staff_id" style="text-transform:uppercase" ><br/>
<label>Your Email</label><input type="email" name="email1" style="text-transform:uppercase" ><br/>
<label>Re-enter Email</label><input type="email" name="email2" ><br/>
<label>Password</label><input type="password" name="admin_password" id="admin_password" ><br/>
<label>Re-Password</label><input type="password" name="re_user_password" id="re_user_password" ><br/>
<input type="submit" name="submit" id="submit" value="Add Admin" style="width:90px;" />
</form>
</div>
</div>
</div>
</body>
</html>