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
<div id="menu" class="wrapper">
<div id="admin_menu" ><a href="#" id="click_add_admin">Add Admin</a></div>
<div id="admin_menu" ><a href="#" id="click_view_admin">View Admin</a></div>
<div id="admin_menu" ><a href="#" id="click_add_movie">Add Movie</a></div>
<div id="admin_menu" ><a href="#" id="click_add_game">Add Games</a></div>
<div id="admin_menu" ><a href="logout_admin.php">Log Out</a></div>
</div>

<div id="content" class="wrapper" style="clear:both">
<div id="add_icon"><img src="images/User-icon.png" width="128" height="151"></br> ADD ADMIN </div>
<div id="add_admin_content" class="wrapper">
<form method="post" action="insert_admin.php" >
<label>First Name :</label><input type="text" name="first_name" id="first_name" style="text-transform:uppercase"><br/>
<label>Last Name :</label><input type="text" name="last_name" id="last_name" style="text-transform:uppercase" ><br/>
<label>Staff ID :</label><input type="text" name="staff_id" id="staff_id" style="text-transform:uppercase" ><br/>
<label>Your Email   :</label><input type="email" name="email1" style="text-transform:uppercase" ><br/>
<label>Re-enter Email   :</label><input type="email" name="email2" ><br/>
<label>Password :</label><input type="password" name="admin_password" id="admin_password" ><br/>
<label>Re-Password :</label><input type="password" name="re_user_password" id="re_user_password" ><br/>
<input type="submit" name="submit" id="submit" value="Add Admin" style="width:90px;" />
</form>
</div>

<div id="add_movie"><img src="images/Movies-icon.png" width="128" height="128"></br> ADD MOVIES  </div>
<div id="add_movie_content" class="wrapper">
<form method="post" action="insert_admin.php" >
<label>First Name :</label><input type="text" name="first_name" id="first_name" style="text-transform:uppercase"><br/>
<label>Last Name :</label><input type="text" name="last_name" id="last_name" style="text-transform:uppercase" ><br/>
<label>Staff ID :</label><input type="text" name="staff_id" id="staff_id" style="text-transform:uppercase" ><br/>
<label>Your Email   :</label><input type="email" name="email1" style="text-transform:uppercase" ><br/>
<label>Re-enter Email   :</label><input type="email" name="email2" ><br/>
<label>Password :</label><input type="password" name="admin_password" id="admin_password" ><br/>
<label>Re-Password :</label><input type="password" name="re_user_password" id="re_user_password" ><br/>
<input type="submit" name="submit" id="submit" value="Add Admin" style="width:90px;" />
</form>
</div>

<div id="add_game"><img src="images/Folder Games.png" width="128" height="128"></br> ADD GAMES  </div>
<div id="add_game_content" class="wrapper">
<form method="post" action="insert_admin.php" >
<label>First Name :</label><input type="text" name="first_name" id="first_name" style="text-transform:uppercase"><br/>
<label>Last Name :</label><input type="text" name="last_name" id="last_name" style="text-transform:uppercase" ><br/>
<label>Staff ID :</label><input type="text" name="staff_id" id="staff_id" style="text-transform:uppercase" ><br/>
<label>Your Email   :</label><input type="email" name="email1" style="text-transform:uppercase" ><br/>
<label>Re-enter Email   :</label><input type="email" name="email2" ><br/>
<label>Password :</label><input type="password" name="admin_password" id="admin_password" ><br/>
<label>Re-Password :</label><input type="password" name="re_user_password" id="re_user_password" ><br/>
<input type="submit" name="submit" id="submit" value="Add Admin" style="width:90px;" />
</form>
</div>


<div id="view_icon"><img src="images/user-info-icon.png" width="128" height="128"></br> VIEW ADMIN </div>
<div id="view_admin_content" class="wrapper">
<table id="admin_header" class="myOtherTable" width="100%" >
      <tr>
        <td width="20%" height="26">Admin ID</td>
        <td width="20%">First Name</td>
        <td width="20%">Last Name</td>
        <td width="15%">Admin Type</td>
        <td width="10%">Staff ID</td>
        <td width="10%">Status</td>
        <td width="5%"></td>
      </tr>
</table>
<?php 
 mysql_connect("localhost", "lapaks", "pattake") or die(mysql_error()); 
 mysql_select_db("lapaks") or die(mysql_error()); 
 $data = mysql_query("SELECT * FROM admin where admin_type != 'SUPER' and admin_status !='INACTIVE'") 
 or die(mysql_error()); 
 echo "<table width=100% class='myOtherTable' ; > "; 
 
 while($info = mysql_fetch_row($data)){
  echo
  ("<tr>
  <td width='20%'>$info[0]</td>
  <td width='20%' style='text-transform:uppercase'>$info[2]</td>
  <td width='20%' style='text-transform:uppercase'>$info[3]</td>
  <td width='15%' style='text-transform:uppercase'>$info[4]</td>
  <td width='10%' style='text-transform:uppercase'>$info[5]</td>
  <td width='10%' style='text-transform:uppercase'>$info[6]</td>
  <td width='5%'><a href = 'edit_admin.php?id=".$info[0]."'>EDIT</a> </td>
  </tr>");
}
?>
</table>

</div>

</div>

</div>
</body>
</html>