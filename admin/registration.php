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
	<h3 align=center><font size=48px>!!..Register yourself on our website..!!</font></h3>
		<form action="registrationsave.php" method="post">
		<table border=5 height=600 width=600 align=center>
			<tr align=center bgcolor="black">
			<td colspan="2"><font color="white" size="6" face="Colonna MT"><b>REGISTRATION FORM</b></td>
			</tr>
			<tr align=center >
				<td><font size="6" face="Colonna MT">Enter first name</td>
				<td><input type="text" placeholder="first name" name="fn"></td>
			</tr>
			<tr align=center>
				<td><font size="6" face="Colonna MT">Enter last name</td>
				<td><input type="text" placeholder="last name" name="ln"></td>
			</tr>
			<tr>
			<td align=center><font size="6" face="Colonna MT">DOB</td>
			<td align=center>
			<input type="date" name="dob">
			</td>
			</tr>
			<td align=center><font size="6" face="Colonna MT">Gender</td>
			<td align=center>
			<input type="radio"  name="gn" value="Male" >Male
			<input type="radio"  name="gn" value="Female" >Female
			</td>
			<tr align=center>
				<td><font size="6" face="Colonna MT">Enter E-mail id</td>
				<td><input type="mail" placeholder="E-mail" name="em">@ 
				<select>
				<option>gmail.com</option>
				<option>yahoo.com</option>
				<option>hotmail.com</option>
				<option>rediffmail.com</option>
				</select><br><br>
				<b>NOTE :- Select from the list of E-mail's</b>
				</td>
			</tr>
			<tr>
				<td align=center><font size="6" face="Colonna MT">Mobile number</td>
				<td align=center><input type="text" placeholder="Mobile number" name="mob">
				</td>
			</tr>
			<tr align=center>
				<td><font size="6" face="Colonna MT">Enter address</td>
				<td><input type="text" placeholder="Address" name="ad"></td>
			</tr>
			<tr align=center>
				<td><font size="6" face="Colonna MT">Enter city</td>
				<td><input type="text" placeholder="Enter city" name="cy"></td>
			</tr>
			
			<tr align=center >
			<td colspan="2"><input type="submit" name="save">
			</td>
			</tr>
		</table><br>
		<table border=3 align=center width="46%">
		<tr >
			<td >
			<font size="6" face="Colonna MT" color="lightyellow">
			<center><a href="userhome.php">Back to Home</a></center></font>
			</td>
			</tr>
			</table>
		</form>
	</body>
</html>