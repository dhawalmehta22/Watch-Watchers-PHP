<?php
	$cate=$_POST['ct'];
	mysql_connect("localhost","root","");
	mysql_select_db("cd_watch");
	$sql="INSERT INTO `category` (`category`)values('$cate')";
	$rs=mysql_query($sql);
	
	if($rs)
		echo "insert";
	else
		echo "not inserted";
?>