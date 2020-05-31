<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form action="" method="GET">
		<table>
			<tr>
				<td>
					<input style="padding: 10px; position: absolute;" type="text" name="tukhoa" placeholder="Nhap vao day">
					<input type="image" src="2.png" style="position: relative; left: 210px; height: 15px;" value="SEARCH" class="button">
				</td>
				
			</tr>
		</table>
		<input type="hidden" name="task" value="search">
	</form>
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
				<td>
					ACTION
				</td>
			</tr>
		</thead>
		<tbody>
			<?php
				if($vas)
				{
					foreach ($vas as $value) 
					{
						# code...
						?>
							<tr style="height: 60px;">
								<td>
									<?php echo $value->getID() ?>
								</td>
								<td>
									<?php echo $value->getMa() ?>
								</td>
								<td>
									<?php echo $value->getTen() ?>
								</td>
								<td>
									<?php echo $value->getNgay() ?>
								</td>
								<td>
									<a class="button" href="index.php?task=edit&id=<?php echo $value->getID() ?>">EDIT</a>
										<a  class="button" href="index.php?task=delete&id=<?php echo $value->getID() ?>">DELETE</a>
								</td>
							</tr>
						<?php
					}
				}
			?>
		</tbody>
	</table>
	<br/>
	<br/>
	<br/>
	<a  class="button" href="index.php?task=add">them moi</a>
	<div style="float: right">
				<form action="" method="GET">
				<select style="padding: 10px;" name="kieu">
					<option value="DESC">Tang</option>
						<option value="ASC">Giam</option>
				</select>
				<input type="submit" value="SEARCH" class="button">
				<input type="hidden" name="task" value="sapxep">
			</form>
	</div>
</body>
</html>