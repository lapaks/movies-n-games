<link rel="stylesheet" type="text/css" href="style_pattake.css" />
<div style="width:1050px; margin:0 auto; overflow:visible"> <!--container div-->
<div id="left" class="clearfix" style="width:600px; float:left">
<div id="about_us_little">
<p>Welcome to your online store of Movies &amp; Video games. To get started create an account using your email address. Once you have your account, you can start browsing our collection of Movies &amp; Games.  You can either rent a movie or game of your choice or buy it for good. You can pay by your credit card and we will send your movies or games directly to your home.</p> 
</div>
<div id="featured_books">
<?php include ("main_new.php");?>
</div>
</div>


<div id="right" class="clearfix" style="width:450px; float:right">
<?php
if (isset($_SESSION['login_user'])): ?>
<div id="facebook">
<div class="fb-like" data-href="http://developers.facebook.com/docs/reference/plugins/like" data-send="true" data-width="450" data-show-faces="true"></div>
</div>
<?php endif ?>

<?php
if (!isset($_SESSION['login_user'])): ?>
<div id="login">
  <form name="form_login" method="post" action="check_login.php">
    <label>Email</label>
<input type="email" name="login_email" id="emailid"><br>
<label>Password</label>
<input type="password" name="login_password" id="passwords" ><br>
    Forgot password ?<input type="submit" name="submit" id="submit" value="Login" style="width:70px;" />

  </form>
  </div>
<?php endif ?>

<?php
if (!isset($_SESSION['login_user'])): ?>
 <div id="signup">
  <form name="form_signup" method="post" action="insert_profile.php">
  <label>Title</label>
  <select name="title" id = "title" style="text-align:left;">
    <option value = "MR">MR</option>
    <option value = "MS">MS</option>
    <option value = "MRS">MRS</option>
  </select>
  <br>
  <label>First Name</label>
  <input type="text" name="first_name" id="first_name"><br>
    <label>Last Name</label>
  <input type="text" name="last_name" id="last_name" ><br>
    <label>Your Email</label>
  <input type="email" name="email" ><br>
    <label>Re-enter Email</label>
  <input type="email" name="email" ><br>
    <label>Password</label>
  <input type="password" name="user_password" id="user_password" ><br>
    <label>Re-enter Password</label>
  <input type="password" name="user_password" id="user_password" ><br>
    <label>Date Of Birth</label>
  <input type="date" name="dob" id="dob"><br>
    <input type="submit" name="submit" id="submit" value="Sign Up" style="width:70px;" />
  <?php
			if ( isset ( $_SESSION['views'] ) ) {
			echo "User Created Sucessfully! You may login now";
			session_destroy();}?>
</form>
</div>
<?php endif ?>

</div>

</div>
<!---end of container page-->
