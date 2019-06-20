<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Them Sua Xoa</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php require('connect.php'); ?>
	<?php
		$sql = "SELECT * FROM tsx";
		$result = $conn->query($sql);
	?>
	<a href="them.php">Them</a>
	<table>
		<tr>
			<td>MaSV</td>
			<td>Hoten</td>
			<td>NgaySinh</td>
			<td>GioiTinh</td>
			<td>QueQuan</td>
			<td colspan="2"></td>
		</tr>

	<?php if ($result->num_rows > 0): ?>
		<?php while($row = $result->fetch_assoc()):  ?>
		    <tr>
				<td><?=$row["masv"]?></td>
				<td><?=$row["hoten"]?></td>
				<td><?=$row["ngaysinh"]?></td>
				<td><?=$row["gioitinh"]?></td>
				<td><?=$row["quequan"]?></td>
				<td><a href="sua.php?id=<?=$row["masv"]?>">sua</a></td>
				<td><a href="xoa.php?id=<?=$row["masv"]?>">xoa</a></td>
			</tr>
		<?php endwhile ?>
	<?php endif ?>
	<?php $conn->close(); ?>
	</table>
</body>
</html>