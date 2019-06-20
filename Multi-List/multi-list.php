<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Multi List</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php
		session_start();
	?>
	<form action="multi-list.php" action="GET">
		MaSV<input type="text" name="masv">
		HoTen<input type="text" name="hoten">
		NgaySinh<input type="text" name="ngaysinh">
		GioiTinh<input type="text"  name="gioitinh">
		QueQuan<input type="text" name="quequan">
		<button type="submit" name="gui">Gui</button>
	</form>
	<?php
		$i = $_SESSION['i'];
		$_SESSION['arr'];
		if (isset($_GET['gui'])) {
			$i++;
			$_SESSION['arr'] .= $_GET['masv']."-";
			$_SESSION['arr'] .= $_GET['hoten']."-";
			$_SESSION['arr'] .= $_GET['ngaysinh']."-";
			$_SESSION['arr'] .= $_GET['gioitinh']."-";
			$_SESSION['arr'] .= $_GET['quequan']."-";
		}
		$_SESSION['i'] = $i;
	?>

	<table>
		<tr>
			<td>MaSV</td>
			<td>HoTen</td>
			<td>NgaySinh</td>
			<td>GioiTinh</td>
			<td>QueQuan</td>
		</tr>
		<?php if(isset($_GET['gui'])):?>
			<?php $arr = explode("-",$_SESSION['arr']); ?>
			<?php for ($i=0; $i < count($arr) - 1;): ?>
				<tr>
					<td><?= $arr[$i] ?></td>
					<td><?= $arr[$i+1] ?></td>
					<td><?= $arr[$i+2] ?></td>
					<td><?= $arr[$i+3] ?></td>
					<td><?= $arr[$i+4] ?></td>
				</tr>
				<?php $i += 5?>
			<?php endfor  ?>
		<?php endif?>
	</table>
</body>
</html>