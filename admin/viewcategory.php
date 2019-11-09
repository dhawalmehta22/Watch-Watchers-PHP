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
			<marquee><h1>welcome to admin panel</h1></marquee></font>
		</td>
	</tr>
	<tr width=100% height=100%>
		<td ><br><br>
			<?php
				include("adminleft.php");
			?>	<br>
	<table align=center border=3 width=50% height=70%>
	<tr align=center bgcolor="black"> <font color="white" size="6" face="Colonna MT">
		<td><font color="white" size="6" face="Colonna MT">ID</td>
		<td><font color="white" size="6" face="Colonna MT">CATEGORY</td>
		<td><font color="white" size="6" face="Colonna MT">CLICK TO</td></font>
	</tr>
		<?php 	
		mysql_connect("localhost","root","");
		mysql_select_db("cd_watch");
		
		$sql="select * from category";
		$rs=mysql_query($sql);
		$count=0;
					
		while($row=mysql_fetch_array($rs))
		{						
			$id=$row[0];
			$cate=$row[1];
			$count++;
	
			echo"<tr align=center>";
			echo"<td>$count</td>";
			echo"<td>$cate</td>";
			echo"<td><a href='deletecategory.php?id=$id'>Delete</a></td>";
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