<?php
ini_set('error_reporting', 0);
ini_set('display_errors', 0);
?>
<?php session_start();?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="icon" type="image/png" href="/images/favicon.ico" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script language="javascript" type="text/javascript" src="jquery.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>My Account</title>
<link rel="stylesheet" type="text/css" href="style_pattake.css" />
<!-- HTML5 shim for IE backwards compatibility -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<body>

<header><?php include ("header.php");?></header>
<div id="wrapper">
<div id="container_my_account" class="wrapper clearfix">
<?php include ("search.php");?>
<div id="banner" class="clearfix">
<?php
if (!isset($_SESSION['login_user'])): ?>
<?php header('Location: index.php');?>
<?php endif?>

<div id="library_header" class="clearfix">

<div id="head_profile"> <a href="#"><img src="images/profile.png" alt="Profile" name="click_profile" width="54" height="50" id="click_profile"></a><br> 
Profile
</div>

<div id="head_books"> <a href="#"><img src="images/history.png" alt="My Books" name="click_books" width="50" height="50" id="click_books"></a><br>
History
</div>
</div><!---library header ends--->

<div id="my_account_content">
<div id="profile2" > 
<h1>Personal Information</h1>
<form action="update_profile.php" method="post">
<label>Title</label>
<select style="width:182px;">
    <option value = "MR">MR</option>
    <option value = "MS">MS</option>
    <option value = "MRS">MRS</option>
</select>
<br /> 
<label>First Name</label><input type="text" name="first_name" value="DEEPAK" id="name"> <br />
<label>Middle Name</label><input type="text" name="last_name" value=""><br />
<label>Last Name</label><input type="text" name="last_name" value="MAHARJAN"><br />
<label>Email ID</label><input id="input_email" type="text" name="email" value="lapaks@hotmail.com"><br />
<label>Alternate Email</label><input type="text" name="dob" value=""> <br />
<label>Date of Birth</label><input type="date" name="dob" value=""> <br />
</form></div>
<div id="profile2" style="margin-left:8px;" > 
<h1>Address</h1>
<form action="update_profile.php" method="post">
<label>Street</label><input type="text" name="dob" value="<?php echo "$info[dob]";?>"> <br />
<label>Address 1</label><input type="text" name="dob" value="<?php echo "$info[dob]";?>"> <br />
<label>Address 2</label><input type="text" name="dob" value="<?php echo "$info[dob]";?>"> <br />
<label>City</label><input type="text" name="dob" value="<?php echo "$info[dob]";?>"> <br />
<label>State</label><select>
    <option value = "MD">MD</option>
</select> <br />
<label>ZIP</label><input type="text" name="dob" value="<?php echo "$info[dob]";?>"> <br />
<label>Country</label><select>
    <option value = "USA">USA</option>
</select> <br />

</form><div>
</div>

</div>

<div id="profile2"  style="margin-left:8px;" > 
<h1>Preferences</h1>
<form action="update_profile.php" method="post">
<label>Movie Preference 1</label><select >
    <option value = "USA">ACTION</option>
</select> <br />
<label>Movie Preference 2</label><select>
    <option value = "USA">COMEDY</option>
</select> <br />
<label>Movie Preference 3</label><select >
    <option value = "USA">DRAMA</option>
</select> <br />
<label>Game Preference 1</label><select>
    <option value = "USA">WARFARE</option>
</select> <br />
<label>Game Preference 2</label><select>
    <option value = "USA">SPORT</option>
</select> <br />
<label>Game Preference 3</label><select>
    <option value = "USA">RACING</option>
</select> <br />
<label>Card Type</label><input type="text" name="dob" value="<?php echo "$info[dob]";?>"> <br />
<label>Card Number</label><input type="text" name="dob" value="<?php echo "$info[dob]";?>"> <br />
<label>Expiry Date</label><input type="text" name="dob" value="<?php echo "$info[dob]";?>"> <br />

</form><div>
</div>

</div>

<div id="profile2" > 
<h1>Card Information</h1>
<form action="update_profile.php" method="post">
<label>Card Type</label><input type="text" name="dob" value="<?php echo "$info[dob]";?>"> <br />
<label>Card Number</label><input type="text" name="dob" value="<?php echo "$info[dob]";?>"> <br />
<label>Expiry Date</label><input type="text" name="dob" value="<?php echo "$info[dob]";?>"> <br />
<input type="submit" name="submit" id="save_profile" value="Edit" style="width:70px; ">
<input type="submit" name="submit" id="save_profile" value="Save" style="width:70px; ">

</form><div>
</div>

</div>
</div>
</div>
</div>
</div>
<?php include ('user_info_bar.php');?>
<footer><?php include ('footer.php');?></footer>
</body>
</html>
