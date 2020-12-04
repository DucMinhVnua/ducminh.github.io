<?php 

	include_once'connect.php';

	// Nhập giá trị number bằng phương thức post
	 
	// Kiểm tra number có lớn hơn không hay không

	 
	// Lặp từ 1 tới number để in ra màn hình
	$username = $_POST['username'];
	$password = $_POST['password'];

	$query = mysqli_query($conn,"SELECT * FROM user WHERE username='$username'");
	

	if (mysqli_num_rows($query) == 0) {
		$result = [
			'text'=>'Tài khoản không tồn tại',
		];
		echo json_encode($result);
		die();
	}
	$row = mysqli_fetch_assoc($query);



	if ( $password != $row['password']) {
			$result = [
				'text'=>'Mật khẩu không chính xác',
			];
			echo json_encode($result);
		}
		elseif ($row['position']==1) {
			# code...
			$result = [
				'type'=>'admin',
			];
			echo json_encode($result);
		}else{

			// echo json_encode($row);		
			// echo "user";
			$result = [
				'type'=>'user',
				'data'=>$row,
			];
				echo json_encode($result);
		}
		

 ?>