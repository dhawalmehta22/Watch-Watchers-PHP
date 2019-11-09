<table border=1 width=80% align=center>
	<tr>
		<td>Id</td>
		<td>Brand</td>
		<td>Category</td>
		<td>Click to</td>
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
			$typ=$row[2];
			
			echo"<tr>";
				echo"<td>$id</td>";
				echo"<td>$brnd</td>";
				echo"<td>$typ</td>";
				echo"<td><a href='updatetype.php?id=$id'>Update</a></td>";
			echo"</tr>";
		}
	?>
</table>