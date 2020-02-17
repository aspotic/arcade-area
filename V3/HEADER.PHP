<html>
<head>

<?php

$username = "switchsk_riley";
$password = "aeiou";
$hostname = "localhost";
$database = "switchsk_arcade";
$dblink = mysql_connect ($hostname, $username, $password);


// Open a theme

$OpenThemeQuery = "SELECT * from schemes  WHERE id = 1 ";
$ThemeResult = mysql_db_query ($database, $OpenThemeQuery, $dblink);
if ($Theme = mysql_fetch_array($ThemeResult)){echo $Theme[title] . "<br><br> \n"; } else
{print ("Error opening theme, please report to $???.  Thank you.");}


mysql_close ($dblink);

?>

<?php echo "
<style>

body {
margin-top:$Theme[topmargin] ;
margin-left: auto ;
margin-right: auto ;
text-align: $Theme[alignbody] ;
background-color: $Theme[background] ;
}


table.dimensions { 
font-family: $Theme[fontface] ;
width: $Theme[tablewidth] ;
border: $Theme[bordersize] $Theme[bordertype] $Theme[bordercolor] ;
} 

table.left { 
font-family: $Theme[fontface] ;
width: $Theme[widthleft] ;
border: $Theme[bordersize] $Theme[bordertype] $Theme[bordercolor] ;
} 

table.right { 
font-family: $Theme[fontface] ;
width: $Theme[widthright] ;
border: $Theme[bordersize] $Theme[bordertype] $Theme[bordercolor] ;
} 

table#whole {
width: $Theme[tablewidth] ;
}


td#toptable { 
background-color: $Theme[toptablecolor] ;
font-family: $Theme[fontface] ;
color: $Theme[colortoptable] ;
text-align: $Theme[txtaligntoptable] ;
} 


td#header { 
background-color: $Theme[headercolor] ;
font-family: $Theme[fontface] ;
color: $Theme[colorheader] ;
text-align: $Theme[txtalignheader] ;
}  

td#center {
width: $Theme[widthcenter] ;
}

td.catagory {
background-color: $catagorybg ;
font-family: $Theme[fontface] ;
color: $Theme[colorcatagory] ;
text-align: $Theme[txtaligncatagory] ;
}


td.alt1 {
background-color: $Theme[alt1] ;
font-family: $Theme[fontface] ;
color: $Theme[coloralt1] ;
text-align: $Theme[txtalign] ;
}


td.alt2 {
background-color: $Theme[alt2] ;
font-family: $Theme[fontface] ;
color: $Theme[coloralt2] ;
text-align: $Theme[txtalign] ;
}


a {
text-decoration:none;
color: $Theme[linkcolor] ;
}


a:hover {
text-decoration:none;
font-weight: bold ;
color: $Theme[linkover] ;
}

</style>
"; ?>


</head>
<body> 

<table class="dimensions">
	   <tr>
	   	   <td id="toptable">
abcdefg
	   	   </td>
	   </tr>
	   <tr>
	   	   <td id="header">
1234567
	   	   </td>
	   </tr>
</table>
