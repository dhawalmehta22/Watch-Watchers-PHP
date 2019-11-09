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
			<td>
		<table border=1 width=50% align=center height=50%>
			<tr bgcolor="black">
				<td align=center><font color="white" size="4" face="Colonna MT">ID</td>
				<td align=center><font color="white" size="4" face="Colonna MT">Brand</td>
				<td align=center><font color="white" size="4" face="Colonna MT">Category</td>
				<td align=center><font color="white" size="4" face="Colonna MT">Type</td>
				<td align=center><font color="white" size="4" face="Colonna MT">Dial Colour</td>
				<td align=center><font color="white" size="4" face="Colonna MT">Band Colour</td>
				<td align=center><font color="white" size="4" face="Colonna MT">Band Material</td>
				<td align=center><font color="white" size="4" face="Colonna MT">Case Shape</td>
				<td align=center><font color="white" size="4" face="Colonna MT">Display Type</td>
				<td align=center><font color="white" size="4" face="Colonna MT">Model Number</td>
				<td align=center><font color="white" size="4" face="Colonna MT">Water Resistant</td>
				<td align=center><font color="white" size="4" face="Colonna MT">Warranty</td>
				<td align=center><font color="white" size="4" face="Colonna MT">Warranty Type</td>
				<td align=center><font color="white" size="4" face="Colonna MT">image</td>
				<td align=center><font color="white" size="4" face="Colonna MT">price</td>
				<td align=center><font color="white" size="4" face="Colonna MT">Click to</td>
				<td align=center><font color="white" size="4" face="Colonna MT">Click to</td>
			</tr>
			
			<?php
				mysql_connect("localhost","root","");
				mysql_select_db("cd_watch");
				
				$sql="select * from specification";
				$rs=mysql_query($sql);
				
				while($row=mysql_fetch_array($rs))
				{
					$id=$row[0];
					$brand=$row[1];
					$category=$row[2];
					$type=$row[3];
					$dialcolour=$row[4];
					$bandcolour=$row[5];
					$bandmaterial=$row[6];
					$caseshape=$row[7];
					$displaytype=$row[8];
					$modelnumber=$row[9];
					$waterresist=$row[10];
					$warranty=$row[11];
					$warrantytype=$row[12];
					$image=$row[13];
					$price=$row[14];
					echo"<tr>";
						echo"<td align=center>$id</td>";
						echo"<td align=center>$brand</td>";
						echo"<td align=center>$category</td>";
						echo"<td align=center>$type</td>";
						echo"<td align=center>$dialcolour</td>";
						echo"<td align=center>$bandcolour</td>";
						echo"<td align=center>$bandmaterial</td>";
						echo"<td align=center>$caseshape</td>";
						echo"<td align=center>$displaytype</td>";
						echo"<td align=center>$modelnumber</td>";
						echo"<td align=center>$waterresist</td>";
						echo"<td align=center>$warranty</td>";
						echo"<td align=center>$warrantytype</td>";
						echo"<td align=center><img src='$image' height=120 width=160></td>";
						echo"<td align=center>$price</td>";
						echo"<td align=center><a href='deletespecification.php?id=$id'>Delete</a></td>";
						echo"<td align=center><a href='updatespecification.php?id=$id'>update</a></td>";
					echo"</tr>";
				}
			?>
		</table>
		</td>
		</tr>
		<table border=0 align=center width="100%">
		<tr >
			<td >
			<font size="6" face="Colonna MT" color="lightyellow">
			<center><a href="adminhome.php">Back to Home</a></center></font>
			</td>
			</tr>
			</table>
		<tr>
		<table width=100%>
				<tr>
		<td align=center colspan=2><br><br>
			<?php
				include("adminfoot.php");
			?>
		</td>
	</tr>
			</table>
			</tr>
			</table>
	</body>
</html>	