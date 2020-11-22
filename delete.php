<?php 
	include_once "connect.php";

	$magv = $_GET['id'];

	$sql = "DELETE FROM user WHERE magv = '$magv'";
	$query = mysqli_query($conn, $sql);
	if($query){
		header("location: admin.php");
	}
?>