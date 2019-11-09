<html>

	<body>
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
<table border=1 align=center width=100% height=70%>
	<tr>
		<td colspan=2>
			<?php
				include("adminhead.php");
			?>
		</td>
	</tr>	
		<td height=10% width=60%><font face="Algerian" color="black">
			<marquee><h1>!!..welcome to admin panel..!!</h1></marquee></font>
		</td>
	</tr>
	<tr width=100% height=100%>
		<td >
			<?php
				include("adminleft.php");
			?>	<br>
			<form action="catsave1.php" method="post">
			<table border=5 height=450 width=500 align=center>
				<tr align=center bgcolor="black">
					<td colspan="2" ><font color="white" size="6" face="Colonna MT"><b>ADD CATEGORY</b></font></td>
				</tr>
				<tr align=center>
					<td><font size="6" face="Colonna MT">Enter category</font></td>
					<td><input type="text" name="ct"></td>
				</tr>
				<tr align=center>
					<td colspan="2"><input type="submit" name="save" onclick="return validate();"></td>
				</tr>
		</td>
	</tr>
	</table>
	<table width=100%>
				<tr>
		<td align=center colspan=2>
			<?php
				include("adminfoot.php");
			?>
		</td>
	</tr>
			</table>
		</form>
	</body>
</html>