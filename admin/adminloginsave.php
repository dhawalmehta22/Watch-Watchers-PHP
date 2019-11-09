<?php
		$username=$_POST['username'];
		$password=$_POST['pw'];
		mysql_connect("localhost","root","");
		mysql_select_db("cd_watch");
		$sql="SELECT * FROM `admin` WHERE username='$username'and password='$password'";
		$rs=mysql_query($sql);
		
		if($row=mysql_fetch_array($rs))
		{
			header("location:adminhome.php");
		}
		else
		{
			 echo "<script>alert('invalid password');</script>";
    redirect('/admin/adminlogin.php');
		}
?>