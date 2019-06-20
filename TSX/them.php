<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Them</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php require('connect.php'); ?>
	<form action="them.php" action="GET">
		MaSV<input type="text" name="masv">
		HoTen<input type="text" name="hoten">
		NgaySinh<input type="text" name="ngaysinh">
		GioiTinh<input type="text"  name="gioitinh">
		QueQuan<input type="text" name="quequan">
		<button type="submit" name="gui">Them</button>
	</form>

	<?php
		if (isset($_GET['gui'])) {
			$masv = $_GET['masv'];
			$hoten = $_GET['hoten'];
			$ngaysinh = $_GET['ngaysinh'];
			$gioitinh = $_GET['gioitinh'];
			$quequan = $_GET['quequan'];
			$sql = "INSERT INTO tsx (masv, hoten, ngaysinh, gioitinh, quequan)
			VALUES ('$masv', '$hoten', '$ngaysinh', '$gioitinh', '$quequan')";
			if ($conn->query($sql)) {
			    header("location: tsx.php");
			} else {
			    echo "Error: " . $sql . "<br>" . $conn->error;
			}
		}
	?>
</body>
</html>