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

<div id="head_borrowed"> <a href="#"><img src="images/settings.png" alt="" name="clickborrowed" width="50" height="50" id="click_borrowed"></a><br>
Settings
</div>

</div><!---library header ends--->

<div id="my_account_content">
<form action="update_profile.php" method="post">
<label>Title</label>
<select style="width:80px;">
    <option value =""> <?php echo "$info[title]";?></option>
    <option value="">--Select--</option>
    <option value = "MR">MR</option>
    <option value = "MS">MS</option>
    <option value = "MRS">MRS</option>
</select>
<br /> 
<label>First Name</label><input type="text" name="first_name" value="<?php echo "$info[first_name]";?>" id="name"> <br />
<label>Last Name</label><input type="text" name="last_name" value="<?php echo "$info[last_name]";?>"><br />
<label>Email ID</label><input id="input_email" type="text" name="email" value="<?php echo "$info[email]";?>"><br />
<label>Date of Birth</label><input type="text" name="dob" value="<?php echo "$info[dob]";?>"> <br />
<label>Street</label><input type="text" name="dob" value="<?php echo "$info[dob]";?>"> <br />
<label>Address 1</label><input type="text" name="dob" value="<?php echo "$info[dob]";?>"> <br />
<label>Address 2</label><input type="text" name="dob" value="<?php echo "$info[dob]";?>"> <br />
<label>City</label><input type="text" name="dob" value="<?php echo "$info[dob]";?>"> <br />
<label>State</label><input type="text" name="dob" value="<?php echo "$info[dob]";?>"> <br />
<label>ZIP</label><input type="text" name="dob" value="<?php echo "$info[dob]";?>"> <br />
<label>Country</label><input type="text" name="dob" value="<?php echo "$info[dob]";?>"> <br />
<label>Alternate Email</label><input type="text" name="dob" value="<?php echo "$info[dob]";?>"> <br />
<label>Movie Preference 1</label><input type="text" name="dob" value="<?php echo "$info[dob]";?>"> <br />
<label>Movie Preference 2</label><input type="text" name="dob" value="<?php echo "$info[dob]";?>"> <br />
<label>Movie Preference 3</label><input type="text" name="dob" value="<?php echo "$info[dob]";?>"> <br />
<label>Game Preference 3</label><input type="text" name="dob" value="<?php echo "$info[dob]";?>"> <br />
<label>Game Preference 3</label><input type="text" name="dob" value="<?php echo "$info[dob]";?>"> <br />
<label>Game Preference 3</label><input type="text" name="dob" value="<?php echo "$info[dob]";?>"> <br />
<label>Card Type</label><input type="text" name="dob" value="<?php echo "$info[dob]";?>"> <br />
<label>Card Number</label><input type="text" name="dob" value="<?php echo "$info[dob]";?>"> <br />
<label>Expiry Date</label><input type="text" name="dob" value="<?php echo "$info[dob]";?>"> <br />

<input type="submit" name="submit" id="save_profile" value="Save" style="width:70px; display:none ">
</form></div>


</div>

</div>
</div>
</div>
<?php include ('user_info_bar.php');?>
<footer><?php include ('footer.php');?></footer>
</body>
</html>
