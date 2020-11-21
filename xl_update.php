
<?php 


$conn = new mysqli("localhost", "root", "", "qlcb");
		if ($conn->connect_error) {
			die("Không kết nối :" . $conn->connect_error);
		    exit();
		}
		mysqli_set_charset($conn, "utf8");

if (isset($_POST['update_user'])){
		
		$id = $_POST["id"];		
		$name=$_POST['name'];
		$email=$_POST['email'];
		$sdt=$_POST['sdt'];
		$sex = $_POST['sex'];
		$addr = $_POST['addr'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$sql = "UPDATE `user` SET username='$username',password='$password',name='$name',sex='$sex',addr='$addr',sdt='$sdt',email='$email' WHERE id='$id'";
		$edit = mysqli_query($conn, $sql);
		
		if ($edit=== TRUE) {
		header ('location: admin.php');
		} else {
		echo "Error updating record: " . $conn->error;
		}
	 
		$conn->close();
		}
	
?>
