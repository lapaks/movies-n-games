<link rel="stylesheet" type="text/css" href="admin.css" />
<div id="content" style="position:relative">
<div id="view_admin" ><img src="images/user-info-icon.png" width="128" height="128"></br>
    ADMIN </div>
<div id="view_admin_content" class="wrapper">
<table id="admin_header" class="myOtherTable" width="100%" >
      <tr>
        <td width="20%" height="26">Admin ID</td>
        <td width="20%">First Name</td>
        <td width="20%">Last Name</td>
        <td width="15%">Admin Type</td>
        <td width="10%">Staff ID</td>
        <td width="10%">Status</td>
        <td width="5%"></td>
      </tr>
</table>
<?php 
 mysql_connect("localhost", "lapaks", "pattake") or die(mysql_error()); 
 mysql_select_db("lapaks") or die(mysql_error()); 
 $data = mysql_query("SELECT * FROM admin where admin_type != 'SUPER' and admin_status !='INACTIVE'") 
 or die(mysql_error()); 
 echo "<table width=100% class='myOtherTable' ; > "; 
 
 while($info = mysql_fetch_row($data)){
  echo
  ("<tr>
  <td width='20%'>$info[0]</td>
  <td width='20%' style='text-transform:uppercase'>$info[2]</td>
  <td width='20%' style='text-transform:uppercase'>$info[3]</td>
  <td width='15%' style='text-transform:uppercase'>$info[4]</td>
  <td width='10%' style='text-transform:uppercase'>$info[5]</td>
  <td width='10%' style='text-transform:uppercase'>$info[6]</td>
  <td width='5%'><a href = 'edit_admin.php?id=".$info[0]."'>EDIT</a> </td>
  </tr>");
}
?>
</table>
</div>
</div>