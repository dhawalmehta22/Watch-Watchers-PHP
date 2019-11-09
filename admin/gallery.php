<html>
	<head>
	</head>
	<body>
		<form action="gallerysave.php" method="post" enctype="multipart/form-data">
		<table border="2" align="center">
			<tr  align="center">
				<td colspan="2">
					Add photos Gallery
				</td>
			</tr>
			<tr align="center">
				<td>
					Description:
				</td>
				
				<td>
					<input type="text" name="dn">
				</td>
			</tr>
			
			<tr align="center">
				<td>
					Select picture:
				</td>
				
				<td>
					<input type="file" name="f">
				</td>
			</tr>
			
			<tr>
				<td colspan="2" align="center">
					<input type="submit" value="SAVE" >
					<input type="reset" value="CANCEL" >
				</td>	
			</tr>	
		</table>
	</body>
</html>