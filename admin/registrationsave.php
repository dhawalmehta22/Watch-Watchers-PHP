<?php
	$firstname=$_POST['fn'];
	$lastname=$_POST['ln'];
	$Dob=$_POST['dob'];
	$gender=$_POST['gn'];
	$email=$_POST['em'];
	$address=$_POST['ad'];
	$city=$_POST['cy'];
	$mobileno=$_POST['mob'];
	
		
		mysql_connect('localhost','root','');
		mysql_select_db('cd_watch');
		
		$sql="INSERT INTO `registration` (`firstname`, `lastname`, `gender`, `Dob`, `email`, `mobileno`, `address`, `city`)
		values ('$firstname','$lastname','$gender','$Dob','$email','$mobileno','$address','$city')";
		$rs=mysql_query($sql);
	
		if($rs)
			echo"insert";
		else
			echo"not insert";
		
?>