<html>
	<head>
		<title>
			Admin login page
		</title>
	</head>
	<body >
		<form action="adminloginsave.php" method="post">
		<table border="2" align="center" height=300px width=50%>
			<tr  align="center">
				<td colspan="2" bgcolor="black">
					<font color="white" size="6" face="Colonna MT"> admin login</font>
				</td>
			</tr>	
			<tr align="center" >
				<td>
					<font size="6" face="Colonna MT"><b>Enter Login ID:</b></font>
				</td>
				
				<td>
					<input type="text" name="username">
				</td>
			</tr>
			<tr align="center" >
				<td>
					<font size="6" face="Colonna MT"><b> Enter Password:</b></font>
				</td>
				
				<td>
					<input type="password" name="pw">
				</td>
			</tr>
			
			<tr>
				<td colspan="2" align="center">
					<input type="submit" value="login" onclick="return validate();">&emsp;&emsp;
					<input type="reset" value="CANCEL" >
				</td>
			</tr>		
		</table>
		</form>
		<script>
			function validate()
			{
				var x=document.getElementById("a").value;
				
				if(x=="")
				{
					alert("Enter Brand");
					return false;
				}
				return true;
			}
		</script>
		
	</body>
</html>