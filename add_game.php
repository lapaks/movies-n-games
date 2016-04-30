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
<?php include ('admin_menu.php');?>
<div id="content" >
<div id="view_admin"><img src="images/Folder Games.png" width="128" height="128"></br> ADD GAMES  </div>
<div id="add_game_content" class="wrapper">
<form method="post" action="insert_admin.php" >
<label>Game Name</label><input type="text" name="first_name" id="first_name" style="text-transform:uppercase"><br/>
<label>Genre</label><input type="text" name="last_name" id="last_name" style="text-transform:uppercase" ><br/>
<label>Release Year</label>
<?php
$current_year = date("Y");
$range = range($current_year, ($current_year - 100));
echo '<select name="year" id="contact-year" tabindex="7">';
 
//Now we use a foreach loop and build the option tags
foreach($range as $r)
{
echo '<option value="'.$r.'">'.$r.'</option>';
}
 
//Echo the closing select tag
echo '</select>';
?>
<br/>
<label>Quantity</label><input type="text" name="movie_quantity" style="text-transform:uppercase" ><br/>
<label>Price</label><input type="text" name="movie_price" ><br/>
<label>In Stock</label><input type="text" name="movie_availability"  ><br/>
<label>Synopsys</label><textarea name="movie_synopsys" style="width:300px; height:100px; text-align:left;"  ></textarea><br/>

<input type="submit" name="submit" id="submit" value="Add Movie" style="width:90px;" />
</form>
</div>


</div>

</div>
</body>
</html>