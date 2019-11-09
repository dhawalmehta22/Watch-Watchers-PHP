<?php
	mysql_connect("localhost","root","");
	mysql_select_db("cd_watch");
	$r=mysql_query("select * from gallery");
	$count=0;
	echo"<table width='94%' bgcolor='white' align='center'>";
	while($row=mysql_fetch_array($r))
	{
		echo"<tr>
		<td>
		<image src='$row[2]' height=120 width=134>
		<br>
		Rs $row[1]
		</td>";
		$count++;
		
		if(($count==4)||($count==8)||($count==12))
			echo"</tr></tr>";
	}
?>