<table border=1 width=100% align=center height=50%>
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
			</tr>
<?php
				mysql_connect("localhost","root","");
				mysql_select_db("cd_watch");
				
				$sql="SELECT `id`, `brand`, `category`, `type`, `dial colour`, `band colour`, `band material`, `case shape`, `display type`, `model number`, `water resistant`, `warranty`, `warranty type`, `image`, `price` FROM `specification` WHERE `category`='Unisex'";
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
						echo"<td align=center>$image</td>";
						echo"<td align=center>$price</td>";
					echo"</tr>";
				}
			?>
		</table>