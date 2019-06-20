<?php
	require('connect.php');
	$id = $_GET['id'] ?? "";
	$sql = "DELETE FROM tsx WHERE masv = '$id'";
	if ($conn->query($sql)) {
	    header("location: tsx.php");
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}
?>