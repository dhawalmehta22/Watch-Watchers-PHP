<?php
include("fronthead.php");
?>

<style>



table {
    border-collapse: collapse;
   
}


th, td {
    padding: 8px;
    text-align: center;
	
    border-bottom: 1px solid #ddd;
}

tr:hover1 {background-color:#f5f5f5;}


</style>
			<?php
				mysql_connect("localhost","root","");
				mysql_select_db("cd_watch");
				
				$g=$_GET['b'];
				$sql="select * from specification where category='Men' and brand='$g'";
				$rs=mysql_query($sql);
				
				echo"<table border=1 align='center'>";
				
				echo"<tr align=center>";
				 $count=0;
				 
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
					$image="../admin/".$row[13];
					$price=$row[14];
					
					echo"<td>
					
						<img src='$image' height=120 width=160 style='border:2px solid darkgray;border-radius:80%;'>";
						
						echo"<table border=0 width=100%>";
						echo"<tr align=left>
						<td>brand</td>
						<td>$brand</td>
						</tr>
						
						<tr>
						<td>category</td>
						<td>$category</td>
						</tr>
						
						<tr>
						<td>type</td>
						<td>$type</td>
						</tr>
						
						<tr>
						<td>dialcolour</td>
						<td>$dialcolour</td>
						</tr>
						
						<tr>
						<td>bandcolour</td>
						<td>$bandcolour</td>
						</tr>
						
						<tr>
						<td>bandmaterial</td>
						<td>$bandmaterial</td>
						</tr>
						
						<tr>
						<td>caseshape</td>
						<td>$caseshape</td>
						</tr>
						
						<tr>
						<td>displaytype</td>
						<td>$displaytype</td>
						</tr>
						
						<tr>
						<td>modelnumber</td>
						<td>$modelnumber</td>
						</tr>
						
						<tr>
						<td>waterresist</td>
						<td>$waterresist</td>
						</tr>
						
						<tr>
						<td>warranty</td>
						<td>$warranty</td>
						</tr>
						
						<tr>
						<td>warrantytype</td>
						<td>$warrantytype</td>
						</tr>
						
						<tr>
						<td>price</td>
						<td>$price</td>
						</tr>
						
						<tr>
						<td colspan=2><input type='submit' value='Add to Cart'></td>
						</tr>
						
						</table></td>
					";
				$count++;
				if($count%3==0)
					echo"</tr><tr>";
				
				}
			?>
			</table>
			<?php
include("frontfoot.php");
?>
	
		