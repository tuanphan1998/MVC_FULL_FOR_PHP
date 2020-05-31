<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form action="index.php?task=insert" method="POST">
		<table border="1" class="giua">
		<thead>
			<tr>
				
					<td>
					MA 
				</td>
					<td>
					TEN
				</td>
					<td>
					NGAY
				</td>
			
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>
					<input style="border:none;" type="text" name="ma">
				</td>
					<td>
					<input style="border:none;"  type="text" name="ten">
				</td>
					<td>
					<input style="border:none;"  type="date" name="ngay">
				</td>
			</tr>
		</tbody>
	</table>
	<br/>
	<br/>
	<br/>
	<input type="submit" value="THEM MOI" class="button">
	</form>
	
</body>
</html>