<html>
	<head>
		<title>
			GIVE SPECIFICATION FOR THE WATCHES
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
		<form action="specificationsave.php" method="post" enctype="multipart/form-data">
		<table border=1 height=1000 align=center width=50% cellspacing=5 cellpadding=3>
			<tr bgcolor="black">
				<td align=center colspan=2>
					<font color="white" size="6" face="Colonna MT">SPECIFICATION
				</td>
			</tr>
			<tr>
				<td align=center>
					<font size="6" face="Colonna MT">Brand:
				</td>
				<td align=center>
					<?php
						mysql_connect("localhost","root","");
						mysql_select_db("cd_watch");
						
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
			<tr>
				<td align=center>
					<font size="6" face="Colonna MT">Category:
				</td>
				<td align=center>
					<?php
						mysql_connect("localhost","root","");
						mysql_select_db("cd_watch");
						
						$sql="select * from category";
						$rs=mysql_query($sql);
						echo"<select name='ct'>";
						
						while($row=mysql_fetch_array($rs))
						{
							echo"<option>$row[1]</option>";
						}
						echo"</select>";
					?>
				</td>
			</tr>
			<tr>
				<td align=center>
					<font size="6" face="Colonna MT">Type:
				</td>
				<td align=center>
					<?php
						mysql_connect("localhost","root","");
						mysql_select_db("cd_watch");
						
						$sql="select * from type";
						$rs=mysql_query($sql);
						echo"<select name='te'>";
						
						while($row=mysql_fetch_array($rs))
						{
							echo"<option>$row[2]</option>";
						}
						echo"</select>";
					?>
				</td>
			</tr>
			<tr>
				<td align=center>
					<font size="6" face="Colonna MT">Dial Colour:
				</td>
				<td align=center>
					<input type="text" placeholder="Dial Colour" name="dc">
				</td>
			</tr>
			<tr>
				<td align=center>
					<font size="6" face="Colonna MT">Band Colour:
				</td>
				<td align=center>
					<input type="text" placeholder="Band Colour" name="bc">
				</td>
			</tr>
			<tr>
				<td align=center>
					<font size="6" face="Colonna MT">Band Material:
				</td>
				<td align=center>
					<input type="text" placeholder="Band Material" name="bm">
				</td>
			</tr>
			<tr>
				<td align=center>
					<font size="6" face="Colonna MT">Case Shape:
				</td>
				<td align=center>
					<input type="text" placeholder="Case Shape" name="cs">
				</td>
			</tr>
			<tr>
				<td align=center>
					<font size="6" face="Colonna MT">Display Type:
				</td>
				<td align=center>
					<input type="text" placeholder="Display Type" name="dt">
				</td>
			</tr>
			<tr>
				<td align=center>
					<font size="6" face="Colonna MT">Model Number:
				</td>
				<td align=center>
					<input type="text" placeholder="Model Number" name="mn">
				</td>
			</tr>
			<tr>
				<td align=center>
					<font size="6" face="Colonna MT">Water Resistant:
				</td>
				<td align=center>
					<input type="text" placeholder="Water Resistant" name="wr">
				</td>
			</tr>
			<tr>
				<td align=center>
					<font size="6" face="Colonna MT">Warranty:
				</td>
				<td align=center>
					<input type="text" placeholder="Warranty" name="wy">
				</td>
			</tr>
			<tr>
				<td align=center>
					<font size="6" face="Colonna MT">Warranty Type:
				</td>
				<td align=center>
					<input type="text" placeholder="Warranty Type" name="wyt">
				</td>
			</tr>
			<tr>
				<td align=center>
					<font size="6" face="Colonna MT">Image:
				</td>
				<td align=center>
					<input type="file" placeholder="choose image" name="f">
				</td>
			</tr>
			<tr>
				<td align=center>
					<font size="6" face="Colonna MT">Price:
				</td>
				<td align=center>
					<input type="text" placeholder="Price" name="price">
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input type="submit" value="SUBMIT" >
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