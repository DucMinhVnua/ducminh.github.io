<?php 
	// Kết nối
	include_once "connect.php";

	// Lấy id
	$id = $_GET['id'];

	// Xóa
	$sql = "DELETE FROM user WHERE magv = '$id'";
	$query = mysqli_query($conn, $sql);
	if($query) {
		header("location: admin.php");
	} else {
		echo "error";
	}
?>