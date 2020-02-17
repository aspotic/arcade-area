<html>
<head>

<?php

//BODY

$title = "Green Crush";
$background = "#051107";
$bordersize = "1";
$bordertype = "solid";
$bordercolor = "#092519";
$alignbody = "center";
$topmargin = "0";
$linkcolor = "#c6f4d3";
$linkover = "#FFFFFF"; 


// TABLE

$fontface = "Arial";
$tablewidth = "95%";
$txtalign = "left";


// TOP TABLE

$toptablecolor = "#228d07";
$txtaligntoptable = "center";
$colortoptable = "#FFFFFF";


// HEADER

$headercolor = "#29680a";
$txtalignheader = "center";
$colorheader = "#FFFFFF";


// ALT 1

$alt1 = "#097339";
$coloralt1 = "#FFFFFF";


// ALT 2

$alt2 = "#1b5c0a";
$coloralt2 = "#FFFFFF";


// CATAGORY

$colorcatagory = "#FFFFFF";
$catagorybg = "#203a0a";
$txtaligncatagory = "center";


?>

<?php echo "
<style>

body {
margin-top:$topmargin ;
margin-left: auto ;
margin-right: auto ;
text-align: $alignbody ;
background-color: $background ;
}


table.dimensions { 
font-family: $fontface ;
width: $tablewidth ;
border: $bordersize $bordertype $bordercolor ;
} 


td#toptable { 
background-color: $toptablecolor ;
font-family: $fontface ;
color: $colortoptable ;
text-align: $txtaligntoptable ;
} 


td#header { 
background-color: $headercolor ;
font-family: $fontface ;
color: $colorheader ;
text-align: $txtalignheader ;
}  

td.catagory {
background-color: $catagorybg ;
font-family: $fontface ;
color: $colorcatagory ;
text-align: $txtaligncatagory ;
}


td.alt1 {
background-color: $alt1 ;
font-family: $fontface ;
color: $coloralt1 ;
text-align: $txtalign ;
}


td.alt2 {
background-color: $alt2 ;
font-family: $fontface ;
color: $coloralt2 ;
text-align: $txtalign ;
}

a {
text-decoration:none;
color: $linkcolor ;
}

a:hover {
text-decoration:none;
font-weight: bold ;
color: $linkover ;
}

</style>
"; ?>


</head>
<body > 

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

<br>
<br>

<table class="dimensions">
	   <tr>
	   	   <td class="catagory">
abcdefg
	   	   </td>
	   </tr>
	   <tr>
	   	   <td class="alt1">
<a href="">1234567</a>
	   	   </td>
	   </tr>
</table>


<br>
<br>

<table class="dimensions">
	   <tr>
	   	   <td class="catagory">
abcdefg
	   	   </td>
	   </tr>
	   <tr>
	   	   <td class="alt2">
1234567
	   	   </td>
	   </tr>
</table>


</body>
</html>
