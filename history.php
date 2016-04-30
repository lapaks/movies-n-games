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

<div id="head_books""> <a href="#"><img src="images/history.png" alt="My Books" name="click_books" width="50" height="50" id="click_books"></a><br>
</div>

<div id="head_books"  style="opacity:0.2"><img src="images/return-xxl.png" width="50" height="50"><br>
</div>
</div>
<section><h1>Transaction History</h1>
<table width="97%" border="0" cellspacing="2" cellpadding="2">
  <tr>
    <td width="55"><strong>Txn ID</strong></td>
    <td width="126"><strong>Product</strong></td>
    <td width="66"><strong>Amount</strong></td>
    <td width="35"><strong>Qty</strong></td>
    <td width="85"><strong>Txn Date</strong></td>
    <td width="110"><strong>Rent End Date</strong></td>
    <td width="108"><strong>Returned Date</strong></td>
    <td width="104"><strong>Delivery Type</strong></td>
    <td width="110"><strong>Delivery Status</strong></td>
    <td width="156"><strong>Tracking No</strong></td>
    </tr>
  <tr>
    <td>TX001</td>
    <td>The Hunger Games</td>
    <td>$ 79.98</td>
    <td>2</td>
    <td>11-Apr-2014</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>Ship</td>
    <td>In Transit</td>
    <td><a href="#" style="text-decoration:underline">9400109699938311733744</a></td>
    </tr>
  <tr>
    <td>TX001</td>
    <td>Assassins Creed IV</td>
    <td>$ 39.98</td>
    <td>1</td>
    <td>11-Apr-2014</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>Ship</td>
    <td>In Transit</td>
    <td><a href="#" style="text-decoration:underline">9400109699938311733744</a></td>
    </tr>
</table>
</section>

</div>
</div>
</div>
<?php include ('user_info_bar.php');?>
<footer><?php include ('footer.php');?></footer>
</body>
</html>
