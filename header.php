<?php 
ob_start(); 
session_start();
?>
<link rel="stylesheet" type="text/css" href="style_pattake.css" />
<div class="wrapper">
<div id="logo"><img src="images/logo_red.png" width="250" height="40" /></div>
<div id="header_menu">
<ul>

<?php
if (!isset($_SESSION['login_user'])): ?>
<li><a <?php if (strpos($_SERVER['PHP_SELF'], 'index.php')) echo 'class="current"';?>href="index.php">Home</a></li>
<?php endif ?>
<?php
if (isset($_SESSION['login_user'])): ?>
<li><a class="current">My Account</a></li>
<li><a <?php if (strpos($_SERVER['PHP_SELF'], 'movies.php')) echo 'class="current"';?>href="movies.php">Movies</a></li>
<?php endif ?>
<li><a <?php if (strpos($_SERVER['PHP_SELF'], 'games.php')) echo 'class="current"';?>href="games.php">Games</a></li>

<li><a <?php if (strpos($_SERVER['PHP_SELF'], 'about_us.php')) echo 'class="current"';?> href="about_us.php">About Us</a></li>
<li><a <?php if (strpos($_SERVER['PHP_SELF'], 'contact.php')) echo 'class="current"';?> href="contact.php">Contact</a></li>
<li><a <?php if (strpos($_SERVER['PHP_SELF'], 'checkout.php')) echo 'class="current"';?> href="checkout.php">My Cart</a></li>
<?php 
if (isset($_SESSION['login_user'])): ?>
<li><a  href="logout.php">Logout</a></li> 
<?php endif ?>
</ul>
</div>
</div>

