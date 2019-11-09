<?php
	mysql_connect("localhost","root","");
	mysql_select_db("cd_watch");
	$id=$_GET['id'];
	$sql="select * from category where id='$id'";
	$rs=mysql_query($sql);
	
	if ($row=mysql_fetch_array($rs))
	{
		$id=$row[0];
		$cate=$row[1];
	}
?>
<form action="updatecat1.php" method="post">
	<table border=1 align=center height=200 width=500>
	<tr>
		<td>category</td>
		<td><input type="text" value="<?php echo $id; ?>"></td>
	</tr>
	<tr>
		<td>category</td>
		<td><input type="text" value="<?php echo $cate; ?>"></td>
	</tr>
	<tr>
		<td colspan=2>
		<input type="submit" value="update">
		</td>
	</tr>
	</table>
</form>