<?php
		$brnd=$_POST['bd'];
		mysql_connect("localhost","root","");
		mysql_select_db("cd_watch");
		$sql="INSERT INTO `brand` (`brand`)values('$brnd')";
		$rs=mysql_query($sql);
		
		if($rs)
			//echo"insert";
		echo "<script type='text/javascript'>alert('success');</script>";

		else
			//echo"not insert";
		echo "<script type='text/javascript'>alert('not successful');</script>";

		//$message = "wrong answer";
//echo "<script type='text/javascript'>alert('$message');</script>";
?>