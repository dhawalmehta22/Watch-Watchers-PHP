<html>
	<head>
		<title>
			Brand 
		</title>
	</head>
	<body >
	<table border=1 align=center width=100% height=70%>
	<tr>
		<td colspan=2>
			<?php
				include("adminhead.php");
			?>
		</td>
	</tr>	
		<td height=10% width=60%><font face="Algerian" color="black">
			<marquee><h1>welcome to admin panel</h1></marquee></font>
		</td>
	</tr>
	<tr width=100% height=100%>
		<td >
			<?php
				include("adminleft.php");
			?>	<br>
		<form action="brandsave.php" method="post">
		<table border="2" align="center" height=300px width=50%>
			<tr  align="center">
				<td colspan="2" bgcolor="black">
					<font color="white" size="6" face="Colonna MT"> Brand</font>
				</td>
			</tr>	
			<tr align="center" >
				<td>
					<font size="6" face="Colonna MT"><b>Enter Brand:</b></font>
				</td>
				
				<td>
					<input type="text" name="bd" id="b">
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input type="submit" value="Save" onclick="return validate();">&emsp;&emsp;
					<input type="reset" value="CANCEL" >
				</td>
			</tr>		
		</table>
		</form>
		<table width=100%>
				<tr>
		<td align=center colspan=2>
			<?php
				include("adminfoot.php");
			?>
		</td>
	</tr>
			</table>
		
		
		<script>
			function validate()
			{
				var x=document.getElementById("b").value;
				
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