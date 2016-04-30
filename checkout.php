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
<div id= "cart_head">
<div id="cart_h"><h1>Product</h1></div>
<div id="cart_h"><h1>Ship</h1></div>
<div id="cart_h"><h1>Qty</h1></div>
<div id="cart_h"><h1>Amount</h1></div>
<div id="cart_h"><h1>Total</h1></div>
<div id="cart_h"><h1>Change Qty.</h1></div>
<div id="cart_h" style="width:200px;"><h1>Continue Shopping</h1></div>

</div>
<div id="cart_content">
<div id="cart"><img src="images/cart_tb.jpg" width="50" height="71"></div>
<div id="cart">The Hunger Games - Catching Fire</div>
<div id="cart"><input name="" type="text" value="2" style="width:20px; text-align:center"></div>
<div id="cart"><input name="" type="text" disabled value="$ 39.99" style="width:80px; text-align:right"></div>
<div id="cart"><input name="" type="text" disabled value="$ 79.98" style="width:80px; text-align:right"></div>
<div id="cart"><button>Update</button></div>
<div id="cart" style="width:200px;"><a href="finalcheckout.php"><img src="images/checkout.png" width="125" height="30"></a><br/>

</div>

</div>
</section>

<section>
<div id="cart_content">
<div id="cart"><img src="images/cart_tb1.jpg" width="50" height="71"></div>
<div id="cart">Assassins Creed IV - Black Flag</div>
<div id="cart"><input name="" type="text" value="1" style="width:20px; text-align:center"></div>
<div id="cart"><input name="" type="text" disabled value="$ 39.99" style="width:80px; text-align:right"></div>
<div id="cart"><input name="" type="text" disabled value="$ 39.98" style="width:80px; text-align:right"></div>
<div id="cart"><button>Update</button></div>
<div id="cart" style="width:200px;"><h1>Total : $ 119.96</h1></div>
</div>
</section>
<div style="clear:both; padding-top:10px;"><h1>You may as well like these</h1></div>
<div style="clear:both; margin-top:10px;">
<div id="movies" >
<div id="main_column1"><img src="images/movies copy.png" width="30" height="122" /><br />
</div>
<div id="main_column2"><img src="images/movie1.jpg" width="85" height="120" /></div>
<div id="main_column5"><img src="images/movie5.jpg" width="85" height="120" /><br />
</div>
<div id="main_column7">
  <img src="images/movie3.jpg" width="85" height="120" /><br />
</div>
<div id="main_column8"><img src="images/movie6.jpg" width="85" height="120" /><br />
</div>
<div id="main_column8"><img src="images/movie8.jpg" width="85" height="120" /><br />
</div>
<div id="main_column1"><img src="images/movie2.jpg" width="85" height="120" /><br />
</div>
<div id="main_column1"><img src="images/games copy.png" alt="" width="30" height="122" /><br />
</div>
<div id="main_column5"><br />
</div>
<div id="main_column7">
  <img src="images/games1.jpg" width="85" height="122" /><br />
</div>
<div id="main_column8"><img src="images/games2.jpg" width="85" height="120" /><br />
</div>
<div id="main_column8"><img src="images/games3.jpg" width="85" height="120" /><br />
</div>
<div id="main_column8"><img src="images/games4.jpg" width="85" height="120" /><br />
</div>

</div>
<div id="games" style="float:right">
</div>

</div>
</div>
</div>
</div>
<?php include ('user_info_bar.php');?>
<footer><?php include ('footer.php');?></footer>
</body>
</html>
