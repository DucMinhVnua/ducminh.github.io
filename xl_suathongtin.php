<?php 
	include_once "connect.php";
	
		
	if ($_POST['submit-edittt']) {
		$magv = $_GET['id'];
		$name = $_POST['name'];
		$sex = $_POST['sex'];
		$addr = $_POST['addr'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];

		$sql = "UPDATE user SET name = '$name', sex = '$sex', addr = '$addr', phone = '$phone', email = '$email' WHERE magv = '$magv'";
		$edit = mysqli_query($conn,$sql);
		if ($edit=== TRUE) {
			header ("location: user.php?id=$magv");

		} else {
		echo "Error updating record: " . $conn->error;
		}
	 
		$conn->close();
		}
	
?>