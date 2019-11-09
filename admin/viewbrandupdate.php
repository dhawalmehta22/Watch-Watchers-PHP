<table border=1 align=center width=100% height=70%>
	<tr>
		<td colspan=2>
			<?php
				include("adminhead.php");
			?>
		</td>
	</tr>	
		<td height=10% width=60%><font face="Algerian" color="lightyellow">
			<marquee><h1>welcome to admin panel</h1></marquee></font>
		</td>
	</tr>
	<tr width=100% height=100%>
		<td ><br><br>
			<?php
				include("adminleft.php");
			?>	<br>
<table border=1 width=50% align=center height=70%>
	<tr bgcolor="black" align=center>
		<td><font color="white" size="6" face="Colonna MT">Id</td>
		<td><font color="white" size="6" face="Colonna MT">Brand</td>
		<td><font color="white" size="6" face="Colonna MT">Click to</td>
	</tr>
	
	<?php
		mysql_connect("localhost","root","");
		mysql_select_db("cd_watch");
		
		$sql="select * from brand";
		$rs=mysql_query($sql);
		
		while($row=mysql_fetch_array($rs))
		{
			$id=$row[0];
			$brnd=$row[1];
			
			echo"<tr align=center>";
				echo"<td>$id</td>";
				echo"<td>$brnd</td>";
				echo"<td><a href='updatebrand.php?id=$id'>Update</a></td>";
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