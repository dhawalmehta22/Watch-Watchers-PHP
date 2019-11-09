<?php
	mysql_connect("localhost","root","");
	mysql_select_db("cd_watch");
	
	$id=$_GET['id'];
	
	$sql="DELETE FROM `registration` WHERE `registration`.`id` ='$id'";
	
	$rs=mysql_query($sql);
	
	if($rs)
		echo "Record Deleted";
	else
		echo "Record not Deleted";
?>
	