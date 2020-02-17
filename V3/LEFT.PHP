<?php

$username = "switchsk_riley";
$password = "aeiou";
$hostname = "localhost";
$database = "switchsk_arcade";
$dblink = mysql_connect ($hostname, $username, $password);



?>

<table class="left">
	   <tr>
	   	   <td class="catagory">
Navigation
	   	   </td>
	   </tr>
	   <tr>
	   	   <td class="alt1">
<?php

$PrintNavQuery = "SELECT * from navigation";
$NavResult = mysql_db_query ($database, $PrintNavQuery, $dblink);
while ($Nav = mysql_fetch_array($NavResult)){
print ("<a href='$Nav[url]'> $Nav[title] </a> <br> \n"); 
}
 
?>
	   	   </td>
	   </tr>
</table>

<!--

<br>
<br>

<table class="left">
	   <tr>
	   	   <td class="catagory">
Theme Chooser
	   	   </td>
	   </tr>
	   <tr>
	   	   <td class="alt2">
<form>
<select name="">
    <option>1 - Green Crush
    <option>2 - Reborn
</select>
<br>
<input type="submit" value="Change"></form>
	   	   </td>
	   </tr>
</table>

<br>
<br>

<table class="left">
	   <tr>
	   	   <td class="catagory">
Statistics
	   	   </td>
	   </tr>
	   <tr>
	   	   <td class="alt2">
# Games <br>
# Themes <br>
# Members <br>
# Staff <br>
	   	   </td>
	   </tr>
</table>

-->

<?php mysql_close ($dblink); ?>