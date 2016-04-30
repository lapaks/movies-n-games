<?php
ini_set('error_reporting', 0);
ini_set('display_errors', 0);
?>
<?php session_start();?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script language="javascript" type="text/javascript" src="jquery.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>Archive</title>
<link rel="stylesheet" type="text/css" href="style_pattake.css" />
<link rel="icon" type="image/png" href="/images/favicon.ico" />
<!-- HTML5 shim for IE backwards compatibility -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<body>

<header><?php include ("header.php");?></header>
<div id="wrapper">
<div id="container" class="wrapper clearfix">
<?php include ("search.php");?>
<div id="banner_archive" class="clearfix">
<?php
if (!isset($_SESSION['login_user'])): ?>
<?php header('Location: index.php');?>
<?php endif?>
<!---library header ends--->
<div id="library_header" class="clearfix">

<div id="head_profile" style="opacity:0.2"> <a href="#"><img src="images/profile.png" alt="Profile" name="click_profile" width="54" height="50" id="click_profile"></a><br>
</div>

<div id="head_books" style="opacity:0.2"> <a href="#"><img src="images/history.png" alt="My Books" name="click_books" width="50" height="50" id="click_books"></a><br>
</div>

<div id="head_books"><img src="images/return-xxl.png" width="50" height="50"><br>
</div>
</div>
<section><p></p></section>
<section>
<div id= "cart_head"><h1>Summary</h1>
<div id="cart_h" style="width:220px;"><h1>Products</h1></div>
<div id="cart_h"><h1>Qty</h1></div>
<div id="cart_h"><h1>Amount</h1></div>
<div id="cart_h"><h1>Total</h1></div>
<div id="cart_h" style="text-align:left;"><h1>Sub Total</h1></div>

</div>
<div id="cart_content">

<div id="cart" style="width:220px; text-align:left;">The Hunger Games - Catching Fire</div>
<div id="cart"><input name="" type="text" value="2"  disabled style="width:20px; text-align:center"></div>
<div id="cart"><input name="" type="text" disabled value="$ 39.99" style="width:80px; text-align:right"></div>
<div id="cart"><input name="" type="text" disabled value="$ 79.98" style="width:80px; text-align:right"></div>

</div>
</section>

<section>
<div id="cart_content">
<div id="cart" style="width:220px; text-align:left;">Assassins Creed IV - Black Flag</div>
<div id="cart"><input name="" type="text" value="1" disabled style="width:20px; text-align:center"></div>
<div id="cart"><input name="" type="text" disabled value="$ 39.99" style="width:80px; text-align:right"></div>
<div id="cart"><input name="" type="text" disabled value="$ 39.98" style="width:80px; text-align:right"></div>
</div>
<h1>$ 119.96</h1>




</section>
<div class="line"></div>

<div id="box" style="float:left;">
<div style="float:left; padding-top:10px; padding-right:40px;">
<section><h1>Shipping Address</h1></section>
<form name="form2" method="post" action="">
  <p>
    <label style="width:130px;">
      <input type="radio" name="RadioGroup1" value="radio" id="RadioGroup1_0">
      Use this address</label>
    <label style="width:150px;">
      <input type="radio" name="RadioGroup1" value="radio" id="RadioGroup1_1">
      Use account address</label>
          <label style="width:120px;">
      <input type="radio" name="RadioGroup1" value="radio" id="RadioGroup1_1">
      Store Pickup</label>

    <br>
  </p>
</form>
<form action="update_profile.php" method="post">
<label>Address 1</label><input style="width:200px;" type="text" name="dob" value="9006 Town and Country Blvd"> <br />
<label>Address 2</label><input style="width:200px;" type="text" name="dob" value="Apt. D"> <br />
<label>City</label><input type="text" name="dob" value="Ellicott City"> <br />
<label>State</label><select>
    <option value = "MD">MD</option>
</select> <br />
<label>ZIP</label><input type="text" name="dob" value="21043"> <br />
<label>Country</label><select style="width:120px;">
    <option value = "USA">United States</option>
</select> <br />

</form>
</div>
<div style="float:left; padding-top:10px;">
<section>
  <h1>Payment Information</h1></section>

<form action="update_profile.php" method="post">
<label>Card Type</label><select>
    <option value = "USA">VISA</option>
</select> <br />
<label>Card Number</label><input style="width:140px;" type="text" name="dob" value="****-****-****-0367"> <br />
<label>Expiry Date</label><input style="width:50px;" type="text" name="dob" value="11-16"> <br />
<label>Security Code</label><input style="width:50px;" type="text" name="dob" value=""> <br />
</form>
<a href="history.php"><img src="images/confirm.png" width="100" height="36"></a><img src="images/cancel.png" width="100" height="39"></div>


</div>
</div>
</div>
</div>
<?php include ('user_info_bar.php');?>
<footer><?php include ('footer.php');?></footer>
</body>
</html>
