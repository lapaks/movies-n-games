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


<section>
<h1><span>Xbox360</span></h1>
<div id ="holder">
<div id="photo"><a href="" ><img src="images/x1.jpg" width="106" height="150" /></a></div>
<div id="buy_now" >Buy | Rent</div>
</div>
<div id ="holder" >
<div id="photo"><img src="images/x2.jpg" width="106" height="150" />
</div>
<div id="buy_now" >Buy | Rent</div>
</div>
<div id ="holder">
<div id="photo"><img src="images/x3.jpg" width="106" height="150" /></div>
<div id="buy_now" >Buy | Rent</div>
</div>
<div id ="holder">
<div id="photo"><a href="#" class="popper" data-popbox="pop1"><img src="images/x4.jpg" width="106" height="150" /></a></div>
<div id="buy_now" >Buy | Rent</div>
</div>
<div id ="holder" >
<div id="photo"><img src="images/x5.jpg" width="106" height="150" /></div>
<div id="buy_now" >Buy | Rent</div>
</div>
<div id ="holder">
<div id="photo"><img src="images/x6.jpg" width="106" height="150" /></div>
<div id="buy_now" >Buy | Rent</div>
</div>
<div id ="holder" >
<div id="photo"><img src="images/x7.jpg" width="106" height="150" /></div>
<div id="buy_now" >Buy | Rent</div>
</div>
<div id ="holder" >
<div id="photo"><img src="images/x8.jpg" width="106" height="150" /></div>
<div id="buy_now" >Buy | Rent</div>
</div>
</section>
<div class="line"></div>
<section>
<h1><span>PS3</span></h1>
<div id ="holder">
<div id="photo"><a href="" ><img src="images/ps1.jpg" width="106" height="150" /></a></div>
<div id="buy_now" >Buy | Rent</div>
</div>
<div id ="holder" >
<div id="photo"><img src="images/ps2.jpg" width="106" height="150" />
</div>
<div id="buy_now" >Buy | Rent</div>
</div>
<div id ="holder">
<div id="photo"><img src="images/ps3.jpg" width="106" height="150" /></div>
<div id="buy_now" >Buy | Rent</div>
</div>
<div id ="holder">
<div id="photo"><a href="#" class="popper" data-popbox="pop1"><img src="images/ps4.jpg" width="106" height="150" /></a></div>
<div id="buy_now" >Buy | Rent</div>
</div>
<div id ="holder" >
<div id="photo"><img src="images/ps5.jpg" width="106" height="150" /></div>
<div id="buy_now" >Buy | Rent</div>
</div>
<div id ="holder">
<div id="photo"><img src="images/ps6.jpg" width="106" height="150" /></div>
<div id="buy_now" >Buy | Rent</div>
</div>
<div id ="holder" >
<div id="photo"><img src="images/ps7.jpg" width="106" height="150" /></div>
<div id="buy_now" >Buy | Rent</div>
</div>
<div id ="holder" >
<div id="photo"><img src="images/ps8.jpg" width="106" height="150" /></div>
<div id="buy_now" >Buy | Rent</div>
</div>
</section>
<div class="line"></div>
<section>
<h1><span>WII</span></h1>
<div id ="holder">
<div id="photo"><a href="" ><img src="images/w1.jpg" width="106" height="150" /></a></div>
<div id="buy_now" >Buy | Rent</div>
</div>
<div id ="holder" >
<div id="photo"><img src="images/w2.jpg" width="106" height="150" />
</div>
<div id="buy_now" >Buy | Rent</div>
</div>
<div id ="holder">
<div id="photo"><img src="images/w3.jpg" width="106" height="150" /></div>
<div id="buy_now" >Buy | Rent</div>
</div>
<div id ="holder">
<div id="photo"><a href="#" class="popper" data-popbox="pop1"><img src="images/w4.jpg" width="106" height="150" /></a></div>
<div id="buy_now" >Buy | Rent</div>
</div>
<div id ="holder" >
<div id="photo"><img src="images/w5.jpg" width="106" height="150" /></div>
<div id="buy_now" >Buy | Rent</div>
</div>
<div id ="holder">
<div id="photo"><img src="images/w6.jpg" width="106" height="150" /></div>
<div id="buy_now" >Buy | Rent</div>
</div>
<div id ="holder" >
<div id="photo"><img src="images/w7.jpg" width="106" height="150" /></div>
<div id="buy_now" >Buy | Rent</div>
</div>
<div id ="holder" >
<div id="photo"><img src="images/w8.jpg" width="106" height="150" /></div>
<div id="buy_now" >Buy | Rent</div>
</div>
</section>


</div>
</div>
</div>
<?php include ('user_info_bar.php');?>
<footer><?php include ('footer.php');?></footer>
</body>
</html>
