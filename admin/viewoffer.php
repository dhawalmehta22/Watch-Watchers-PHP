<html>
	<head>
	</head>
	
	<body>
		<table border=1 width=30% align=center>
			<tr>
				<td align=center>ID</td>
				<td align=center>Description</td>
				<td align=center>Click to</td>
			</tr>
			
			<?php
				mysql_connect("localhost","root","");
				mysql_select_db("cd_watch");
				
				$sql="select * from offer";
				$rs=mysql_query($sql);
				
				while($row=mysql_fetch_array($rs))
				{
					$id=$row[0];
					$offer=$row[1];
					echo"<tr>";
						echo"<td align=center>$id</td>";
						echo"<td align=center>$offer</td>";
						echo"<td align=center><a href='deleteoffer.php?id=$id'>Delete</a></td>";
					echo"</tr>";
				}
			?>
		</table>
	</body>
</html>	