<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sua</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php require('connect.php'); ?>
	<?php
		$id = $_GET['id'] ?? "";
		$sql = "SELECT * FROM tsx WHERE masv = '$id'";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
		}
	?>
	<form action="sua.php" method="GET">
		<input type="text" name="masv" value="<?=$row['masv']?>" style="display: none;">
		HoTen<input type="text" name="hoten" value="<?=$row['hoten']?>">
		NgaySinh<input type="text" name="ngaysinh" value="<?=$row['ngaysinh']?>">
		GioiTinh<input type="text"  name="gioitinh" value="<?=$row['gioitinh']?>">
		QueQuan<input type="text" name="quequan" value="<?=$row['quequan']?>">
		<button type="submit" name="sua">Sua</button>
	</form>

	<?php
		if (isset($_GET['sua'])) {
			$masv = $_GET['masv'];
			$hoten = $_GET['hoten'];
			$ngaysinh = $_GET['ngaysinh'];
			$gioitinh = $_GET['gioitinh'];
			$quequan = $_GET['quequan'];

			$sql = "UPDATE tsx SET hoten = '$hoten', ngaysinh = '$ngaysinh', gioitinh = '$gioitinh', quequan = '$quequan' WHERE masv = '$masv'";
			if ($conn->query($sql)) {
			    header("location: tsx.php");
			} else {
			    echo "Error: " . $sql . "<br>" . $conn->error;
			}
		}
	?>
</body>
</html>