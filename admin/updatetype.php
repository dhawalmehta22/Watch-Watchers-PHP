<?php
	mysql_connect("localhost","root","");
	mysql_select_db("cd_watch");
	
	$id=$_GET['id'];
	
	$sql="select * from type where id='$id'";
	
	$rs=mysql_query($sql);
	
	if($row=mysql_fetch_array($rs))
	{
		$id=$row[0];
		$brnd=$row[1];
		$typ=$row[2];
	}
?>

<form action="updatetypesave.php" method="post">
	<table width=70% border=1 align=center>
		<tr>
			<td align=center>Id</td>
			<td align=center>
				<input type="text" value="<?php echo $id;?>" name='id'>
			</td>
		</tr>
		
		<tr>
			<td align=center>Brand</td>
			<td align=center>
				<input type="text" value="<?php echo $brnd;?>" name='bd'>
			</td>
		</tr>
		
		<tr>
			<td align=center>Type</td>
			<td align=center>
				<input type="text" value="<?php echo $typ;?>" name='te'>
			</td>
		</tr>
		
		<tr>
			<td align=center colspan=2>
				<input type="submit" value="update">
			</td>
		</tr>
	</table>
</form>