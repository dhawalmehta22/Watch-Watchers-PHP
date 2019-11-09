<html>
	<body>
	<table border=1 align=center width="100%">
	<tr>
		<td colspan=2>
			<?php
				include("adminhead.php");
			?>
		</td>
	</table>
	<table border=0 align=right>
	<tr>
	<td>
	<h2 align=right>!!..Feel free to contact us..!!</h2>
	</td>
	<td>
	<h3 align=right><font size=48px>!!..Please enter your query here..!!</font></h3>
		<form action="registrationsave.php" method="post">
		<table border=5 height=600 width=600 align=right>
			<tr align=center bgcolor="black">
			<td colspan="2"><font color="white" size="6" face="Colonna MT"><b>CONTACT US</b></td>
			</tr>
			<tr align=center >
				<td><font size="6" face="Colonna MT">Enter name</td>
				<td><input type="text" placeholder="first name" name="fn"></td>
			</tr>
			<tr align=center>
				<td><font size="6" face="Colonna MT">Enter Email-id</td>
				<td><input type="Email-id" placeholder="mail id" name="ln"></td>
			</tr>
			<tr>
				<td align=center><font size="6" face="Colonna MT">Mobile number</td>
				<td align=center><input type="text" placeholder="Mobile number" name="mob">
				</td>
			</tr>
			<tr align=center>
				<td><font size="6" face="Colonna MT">Query</td>
				<td><textarea rows=10 cols=30></textarea> </td>
			</tr>
			<tr align=center >
			<td colspan="2"><input type="submit" name="save">
			</td>
			</tr>
		</td>
	</table>
	</table>
		<table border=1 align=center width="100%">
	<tr>
		<td colspan=2>
			<?php
				include("adminfoot.php");
			?>
		</td>
	</table>