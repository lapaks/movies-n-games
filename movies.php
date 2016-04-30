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


<section><h1><span>Action</span></h1>
<div id ="holder">
<div id="photo"><a href="" ><img src="images/archive3.jpg" width="106" height="150" /></a></div>
<div id="buy_now" >Buy | Rent</div>
</div>
<div id ="holder" >
<div id="photo"><img src="images/archive11.jpg" width="106" height="150" />
</div>
<div id="buy_now" >Buy | Rent</div>
</div>
<div id ="holder">
<div id="photo"><img src="images/archive12.jpg" width="106" height="150" /></div>
<div id="buy_now" >Buy | Rent</div>
</div>
<div id ="holder">
<div id="photo"><a href="#" class="popper" data-popbox="pop1"><img src="images/archive13.jpg" width="106" height="150" /></a></div>
<div id="buy_now" >Buy | Rent</div>
</div>
<div id ="holder" >
<div id="photo"><img src="images/archive14.jpg" width="106" height="150" /></div>
<div id="buy_now" >Buy | Rent</div>
</div>
<div id ="holder">
<div id="photo"><img src="images/archive15.jpg" width="106" height="150" /></div>
<div id="buy_now" >Buy | Rent</div>
</div>
<div id ="holder" >
<div id="photo"><img src="images/archive19.jpg" width="106" height="150" /></div>
<div id="buy_now" >Buy | Rent</div>
</div>
<div id ="holder" >
<div id="photo"><img src="images/ars.jpg" width="106" height="150" /></div>
<div id="buy_now" >Buy | Rent</div>
</div>
</section>
<div class="line"></div>
<section><h1><span>Comedy</span></h1>
<div id ="holder">
<div id="photo"><a href="" ><img src="images/comedy1.jpg" width="106" height="150" /></a></div>
<div id="buy_now" >Buy | Rent</div>
</div>
<div id ="holder" >
<div id="photo"><img src="images/comedy2.jpg" width="106" height="150" />
</div>
<div id="buy_now" >Buy | Rent</div>
</div>
<div id ="holder">
<div id="photo"><img src="images/comedy3.jpg" width="106" height="150" /></div>
<div id="buy_now" >Buy | Rent</div>
</div>
<div id ="holder">
<div id="photo"><a href="#" class="popper" data-popbox="pop1"><img src="images/comedy4.jpg" width="106" height="150" /></a></div>
<div id="buy_now" >Buy | Rent</div>
</div>
<div id ="holder" >
<div id="photo"><img src="images/comedy5.jpg" width="106" height="150" /></div>
<div id="buy_now" >Buy | Rent</div>
</div>
<div id ="holder">
<div id="photo"><img src="images/comedy6.jpg" width="106" height="150" /></div>
<div id="buy_now" >Buy | Rent</div>
</div>
<div id ="holder" >
<div id="photo"><img src="images/comedy7.jpg" width="106" height="150" /></div>
<div id="buy_now" >Buy | Rent</div>
</div>
<div id ="holder" >
<div id="photo"><img src="images/comedy8.jpg" width="106" height="150" /></div>
<div id="buy_now" >Buy | Rent</div>
</div>
</section>
<div class="line"></div>
<section><h1><span>Drama</span></h1>
<div id ="holder">
<div id="photo"><a href="" ><img src="images/drama1.jpg" width="106" height="150" /></a></div>
<div id="buy_now" >Buy | Rent</div>
</div>
<div id ="holder" >
<div id="photo"><img src="images/drama2.jpg" width="106" height="150" />
</div>
<div id="buy_now" >Buy | Rent</div>
</div>
<div id ="holder">
<div id="photo"><img src="images/drama3.jpg" width="106" height="150" /></div>
<div id="buy_now" >Buy | Rent</div>
</div>
<div id ="holder">
<div id="photo"><a href="#" class="popper" data-popbox="pop1"><img src="images/drama4.jpg" width="106" height="150" /></a></div>
<div id="buy_now" >Buy | Rent</div>
</div>
<div id ="holder" >
<div id="photo"><img src="images/drama5.jpg" width="106" height="150" /></div>
<div id="buy_now" >Buy | Rent</div>
</div>
<div id ="holder">
<div id="photo"><img src="images/drama6.jpg" width="106" height="150" /></div>
<div id="buy_now" >Buy | Rent</div>
</div>
<div id ="holder" >
<div id="photo"><img src="images/drama7.jpg" width="106" height="150" /></div>
<div id="buy_now" >Buy | Rent</div>
</div>
<div id ="holder" >
<div id="photo"><img src="images/drama8.jpg" width="106" height="150" /></div>
<div id="buy_now" >Buy | Rent</div>
</div>
</section>
<div class="line"></div>
<section><h1><span>Horror</span></h1>
<div id ="holder">
<div id="photo"><a href="" ><img src="images/horror1.jpg" width="106" height="150" /></a></div>
<div id="buy_now" >Buy | Rent</div>
</div>
<div id ="holder" >
<div id="photo"><img src="images/horror2.jpg" width="106" height="150" />
</div>
<div id="buy_now" >Buy | Rent</div>
</div>
<div id ="holder">
<div id="photo"><img src="images/horror3.jpg" width="106" height="150" /></div>
<div id="buy_now" >Buy | Rent</div>
</div>
<div id ="holder">
<div id="photo"><a href="#" class="popper" data-popbox="pop1"><img src="images/horror4.jpg" width="106" height="150" /></a></div>
<div id="buy_now" >Buy | Rent</div>
</div>
<div id ="holder" >
<div id="photo"><img src="images/horror5.jpg" width="106" height="150" /></div>
<div id="buy_now" >Buy | Rent</div>
</div>
<div id ="holder">
<div id="photo"><img src="images/horror6.jpg" width="106" height="150" /></div>
<div id="buy_now" >Buy | Rent</div>
</div>
<div id ="holder" >
<div id="photo"><img src="images/horror8.jpg" width="106" height="150" /></div>
<div id="buy_now" >Buy | Rent</div>
</div>
<div id ="holder" >
<div id="photo"><img src="images/horror7.jpg" width="106" height="150" /></div>
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
