<?php
	$id=$_POST['id'];
	$brand=$_POST['bd'];
	$category=$_POST['ct'];
	$type=$_POST['te'];
	$dialcolour=$_POST['dc'];
	$bandcolour=$_POST['bc'];
	$bandmaterial=$_POST['bm'];
	$caseshape=$_POST['cs'];
	$displaytype=$_POST['dt'];
	$modelnumber=$_POST['mn'];
	$waterresistant=$_POST['wr'];
	$warranty=$_POST['wy'];
	$warrantytype=$_POST['wyt'];
	
	mysql_connect("localhost","root","");
	mysql_select_db("cd_watch");
	
	
	$sql="UPDATE `specification` SET `brand`='$brand',`category`='$category',`type`='$type',`dial colour`='$dialcolour',`band colour`='$bandcolour',`band material`='$bandmaterial',`case shape`='$caseshape',`display type`='$displaytype',`model number`='$modelnumber',`water resistant`='$waterresistant',`warranty`='$warranty',`warranty type`='$warrantytype' WHERE id='$id'";
	$rs=mysql_query($sql);
	
	if($rs)
		echo"record updated";
	else
		echo"record not updated";
?>