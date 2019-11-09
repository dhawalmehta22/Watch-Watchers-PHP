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
		<table border=1 width=50% height=70% align=center>
			<tr bgcolor="black" align=center>
				<td align=center><font color="white" size="6" face="Colonna MT"><b>ID</td>
				<td align=center><font color="white" size="6" face="Colonna MT"><b>Brand</td>
				<td align=center><font color="white" size="6" face="Colonna MT"><b>Type</td>
				<td align=center><font color="white" size="6" face="Colonna MT"><b>Click to</td>
				<td align=center><font color="white" size="6" face="Colonna MT"><b>Click to</td>
			</tr>
			
			<?php
				mysql_connect("localhost","root","");
				mysql_select_db("cd_watch");
				
				$sql="select * from type";
				$rs=mysql_query($sql);
				
				while($row=mysql_fetch_array($rs))
				{
					$id=$row[0];
					$brnd=$row[1];
					$type=$row[2];
					echo"<tr>";
						echo"<td align=center>$id</td>";
						echo"<td align=center>$brnd</td>";
						echo"<td align=center>$type</td>";
						echo"<td align=center><a href='deletetype.php?id=$id'><u>Delete</a></td>";
						echo"<td align=center><a href='updatetype.php?id=$id'><u>Update</a></td>";
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