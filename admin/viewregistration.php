<html>
	<head>
	</head>
	<body>
	<table border=1 align=center width=100% height=70%>
	<tr>
		<td colspan=2>
			<?php
				include("adminhead.php");
			?>
		</td>
	</tr>	
		<td height=10% width=60%><font face="Algerian" color="black">
			<marquee><h1>!!..welcome to admin panel..!!</h1></marquee></font>
		</td>
	</tr>
	<tr width=100% height=100%>
		<td >
			<?php
				include("adminleft.php");
			?>	<br>
		<table border=1 width=55% align=center>
			<tr bgcolor="black" align=center>
				<td align=center><font color="white" size="5" face="Colonna MT">ID</td>
				<td align=center><font color="white" size="5" face="Colonna MT">First Name</td>
				<td align=center><font color="white" size="5" face="Colonna MT">Last Name</td>
				<td align=center><font color="white" size="5" face="Colonna MT">Date of Birth</td>
				<td align=center><font color="white" size="5" face="Colonna MT">gender</td>
				<td align=center><font color="white" size="5" face="Colonna MT">Email</td>
				<td align=center><font color="white" size="5" face="Colonna MT">Address</td>
				<td align=center><font color="white" size="5" face="Colonna MT">City</td>
				<td align=center><font color="white" size="5" face="Colonna MT">Mobile Number</td>
				<td align=center><font color="white" size="5" face="Colonna MT">Click To</td>
				<td align=center><font color="white" size="5" face="Colonna MT">Click To</td>
			</tr></font>
			<?php
				mysql_connect ("localhost","root","");
				mysql_select_db ("cd_watch");
				
				$sql="select * from registration";
				$rs= mysql_query($sql);
				
				while($row=mysql_fetch_array($rs))
				{
					$id=$row[0];
					$firstname=$row[1];
					$lastname=$row[2];
					$dob=$row[4];
					$gender=$row[3];
					$email=$row[5];
					$address=$row[7];
					$city=$row[8];
					$mobileno=$row[6];
					echo"<tr>";
						echo"<td align=center>$id</td>";
						echo"<td align=center>$firstname</td>";
						echo"<td align=center>$lastname</td>";
						echo"<td align=center>$dob</td>";
						echo"<td align=center>$gender</td>";
						echo"<td align=center>$email</td>";
						echo"<td align=center>$address</td>";
						echo"<td align=center>$city</td>";
						echo"<td align=center>$mobileno</td>";
						echo"<td align=center><a href='deleteregistration.php?id=$id'>Delete</a></td>";
						echo"<td align=center><a href='updateregistration.php?id=$id'>update</a></td>";
					echo"</tr>";
				}
			?>
		</table>
		<table width=100%>
				<tr>
		<td align=center colspan=2>
			<?php
				include("adminfoot.php");
			?>
		</td>
	</tr>
			</table>
	</body>
</html>	
</html>	