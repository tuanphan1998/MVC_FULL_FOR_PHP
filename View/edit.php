<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form action="index.php?task=update" method="POST">
		<table border="1" class="giua">
		<thead>
			<tr>
				<td>
					ID 
				</td>
				
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
			<?php
				if($vas)
				{
					foreach ($vas as  $value) 
					{
						# code...
						?>
								<td>
									<input style="border:none;" type="text" name="id" value="<?php echo $value->getID() ?>">
								</td>
								<td>
									<input style="border:none;" type="text" name="ma" value="<?php echo $value->getMa() ?>">
								</td>
									<td>
									<input style="border:none;"  type="text" name="ten" value="<?php echo $value->getTen() ?>">
								</td>
									<td>
									<input style="border:none;"  type="date" name="ngay" value="<?php echo $value->getNgay() ?>">
								</td>
						<?php
					}
				}
			?>
		</tbody>
	</table>
	<br/>
	<br/>
	<br/>
	<input type="submit" value="SUA DOI" class="button">
	</form>
	
</body>
</html>