<?php
	mysql_connect("localhost","root","");
	mysql_select_db("cd_watch");
	
	$id=$_GET['id'];
	
	$sql="select * from registration where id='$id'";
	
	$rs=mysql_query($sql);
	
	if($row=mysql_fetch_array($rs))
	{
		$id=$row[0];
		$firstname=$row[1];
		$lastname=$row[2];
		$gender=$row[3];
		$dob=$row[4];
		$email=$row[5];
		$mobileno=$row[6];
		$address=$row[7];
		$city=$row[8];
		
	}
?>

<form action="updateregistration1.php" method="post">
	<table width=70% border=1 align=center>
		<tr>
			<td align=center>Id</td>
			<td align=center>
				<input type="text" value="<?php echo $id;?>" name='id'>
			</td>
		</tr>
		
		<tr>
			<td align=center>First Name</td>
			<td align=center>
				<input type="text" value="<?php echo $firstname;?>" name='fn'>
			</td>
		</tr>
		<tr>
			<td align=center>Last Name</td>
			<td align=center>
				<input type="text" value="<?php echo $lastname;?>" name='ln'>
			</td>
		</tr>
		<tr>
			<td align=center>Gender</td>
			<td align=center>
				<input type="text" value="<?php echo $gender;?>" name='gn'>
			</td>
		</tr>
		<tr>
			<td align=center>Date of Birth</td>
			<td align=center>
				<input type="text" value="<?php echo $dob;?>" name='dob'>
			</td>
		</tr>
		<tr>
			<td align=center>E-mail</td>
			<td align=center>
				<input type="text" value="<?php echo $email;?>" name='em'>
			</td>
		</tr>
		<tr>
			<td align=center>Mobile Number</td>
			<td align=center>
				<input type="text" value="<?php echo $mobileno;?>" name='mob'>
			</td>
		</tr>
		<tr>
			<td align=center>Address</td>
			<td align=center>
				<input type="text" value="<?php echo $address;?>" name='ad'>
			</td>
		</tr>
		
		<tr>
			<td align=center>City</td>
			<td align=center>
				<input type="text" value="<?php echo $city;?>" name='cy'>
			</td>
		</tr>
		
		
		<tr>
			<td align=center colspan=2>
				<input type="submit" value="update">
			</td>
		</tr>
	</table>
</form>