<html>
	<head>
		<title>
			type
		</title>
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
		<form action="typesave.php" method="post">
		<table border="2" align="center" width=50% height=400px>
			<tr  align="center" bgcolor="black">
				<td colspan="2">
					<font color="white" size="6" face="Colonna MT">TYPE
				</td>
			</tr>		
			<tr align="center">
				<td>
					<font size="6" face="Colonna MT"><b>Select brand:
				</td>
				<td>
					<?php
						mysqli_connect("localhost","","");
						mysql_select_db("da_canteen");
						
						$sql="select * from brand";
						$rs=mysql_query($sql);
						echo"<select name='bd'>";
						
						while($row=mysql_fetch_array($rs))
						{
							echo"<option>$row[1]</option>";
						}
						echo"</select>";
					?>
				</td>
			</tr>
			<tr align="center">
				<td>
					<font size="6" face="Colonna MT"><b>Enter type:
				</td>
				<td>
					<input type="text" name="te">
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input type="submit" value="SAVE" >&emsp;&emsp;&emsp;
					<input type="reset" value="CANCEL" >
				</td>
				
			</tr>	
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
	</form>
	</body>
</html>