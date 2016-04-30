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

<select><?php print($options); ?></select>