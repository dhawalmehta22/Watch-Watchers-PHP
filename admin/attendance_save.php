<?php
		$attendance=$_POST['dn'];
		mysql_connect("localhost","root","");
		mysql_select_db("college");
		$sql="INSERT INTO `attendance`(`name`, `rollno`, `attendance`) VALUES ('$name','$rollno','$attendance')";
		$rs=mysql_query($sql);
		
		if($rs)
			echo"insert";
		else
			echo"not insert";
?>