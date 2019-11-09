<!DOCTYPE html>
<html>
<head>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding-right: 20px;
    overflow: hidden;
    background-color: #333;
}
li {
    float: LEFT;
}
li a {
    display: block;
    color: white;
    text-align: center;
    padding:16px 16px;
    text-decoration: none;
}
li a:hover {
    background-color: #111;
}
table {
	border-color: black;	
}
</style>
<table border= align=center width=100% height=70%>
	<tr>
		<td >
			<?php
				include("adminhead.php");
			?>
		</td>
	</tr>
	
	<tr>
		<td height=10% width=100%><font face="Algerian" color="black">
			<marquee behavior=alternate><h1><u>!!..welcome to admin panel..!!</u></h1></marquee></font>
		</td>
	</tr>
	<tr width=100% height=100%>
		<td >
			<?php
				include("adminleft.php");
			?>	
		</td>
	</tr>
	<tr>
		<td align=center>
			<?php
				include("adminfoot.php");
			?>
		</td>
	</tr>
</table>