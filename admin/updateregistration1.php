<?php
	$id=$_POST['id'];
	$firstname=$_POST['fn'];
	$lastname=$_POST['ln'];
	$gender=$_POST['gn'];
	$Dob=$_POST['dob'];
	$email=$_POST['em'];
	$mobileno=$_POST['mob'];
	$address=$_POST['ad'];
	$city=$_POST['cy'];
	
	
	mysql_connect("localhost","root","");
	mysql_select_db("cd_watch");
	
	$sql="UPDATE `registration` SET `firstname`='$firstname',`lastname`='$lastname',`gender`='$gender',`Dob`='$Dob',`email`='$email',`mobileno`='$mobileno',`address`='$address',`city`='$city' WHERE id='$id'";
	
	$rs=mysql_query($sql);
	
	if($rs)
		echo"record updated";
	else
		echo"record not updated";
?>