<?php
	$id=$_POST['id'];
	$brnd=$_POST['bd'];
	$type=$_POST['te'];
	mysql_connect("localhost","root","");
	mysql_select_db("cd_watch");
	
	$sql="UPDATE `type` SET `brand`='$brnd',type='$type' WHERE id='$id'";
	
	$rs=mysql_query($sql);
	
	if($rs)
		echo"record updated";
	else
		echo"record not updated";
?>