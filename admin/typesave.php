
<?php
	$brnd=$_POST['bd'];
	$typ=$_POST['te'];
		mysql_connect("localhost","root","");
		mysql_select_db("cd_watch");
		$sql="INSERT INTO `type`(`brand`,`type`)values('$brnd','$typ')";
	
		$rs=mysql_query($sql);
		
		if($rs)
			echo"insert";
		else
			echo"not insert";
		
?>
