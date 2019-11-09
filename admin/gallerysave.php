<?php
	mysql_connect("localhost","root","");
	mysql_select_db("cd_watch");
	
	$desp=$_POST['dn'];
	
	if(move_uploaded_file($_FILES['f']['tmp_name'],$_FILES['f']['name']))
		$photo=$_FILES['f']['name'];
	
	$sql="INSERT INTO `gallery`(`description`, `photo`) VALUES ('$desp','$photo')";
	$rs=mysql_query($sql);
	
	if($rs)
		echo"Inserted";
	else
		echo"Not inserted";
	
?>