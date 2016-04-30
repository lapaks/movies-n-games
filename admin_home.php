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

<!--menu -->
<?php include ('admin_menu.php');?>

<!--main content-->
<main>
<section class="section">
<?php include ("view_admin.php");?>
</section>
<section class="section">
<?php include ("view_movies.php");?>
</section>
<section class="section">
<?php include ("view_games.php");?>
</section>

</main>

</div><!--wrapper-->
</body>
</html>