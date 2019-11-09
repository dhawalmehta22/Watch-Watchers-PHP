<?php
	$brand=$_POST['bd'];
	$category=$_POST['ct'];
	$type=$_POST['te'];
	$dialcolour=$_POST['dc'];
	$bandcolour=$_POST['bc'];
	$bandmaterial=$_POST['bm'];
	$caseshape=$_POST['cs'];
	$displaytype=$_POST['dt'];
	$modelnumber=$_POST['mn'];
	$waterresist=$_POST['wr'];
	$warranty=$_POST['wy'];
	$warrantytype=$_POST['wyt'];
	if(move_uploaded_file($_FILES['f']['tmp_name'],$_FILES['f']['name']))
		$photo=$_FILES['f']['name'];
	$price=$_POST['price'];
	
	
		mysql_connect("localhost","root","");
		mysql_select_db("cd_watch");
		$sql="INSERT INTO `specification`(`brand`, `category`, `type`, `dial colour`, `band colour`, `band material`, `case shape`, `display type`, `model number`, `water resistant`, `warranty`, `warranty type`,`image`,`price`)
		values('$brand','$category','$type','$dialcolour','$bandcolour','$bandmaterial','$caseshape','$displaytype','$modelnumber','$waterresist','$warranty','$warrantytype','$photo','$price')";
	
		$rs=mysql_query($sql);
		
		if($rs)
			echo"insert";
		else
			echo"not insert";
		
?>
