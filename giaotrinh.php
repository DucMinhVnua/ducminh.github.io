<?php 
	require 'connect.php';
	$id = $_GET['id'];
	$query = "SELECT * FROM `qlgt` WHERE magv='$id'";
	$result = mysqli_query($conn, $query);

 ?>

<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		
	</style>
	<title>Quản lý giáo trình</title>
	<meta charset="utf-8">
	<style type="text/css">


	*{
			margin: 0;
		}
		.img{
			height: 50px;
			width: 50px;
		}
	</style>
</head>
<body>

		
		<br>
		<table border="1" style="border-spacing: 0">
			<tr>
		        <th>ID</th>
		        <th>Mã gv</th>
		        <th>Tên</th>
		        <th>ND</th>
		        
		    </tr>
		    <?php 
		    	if(mysqli_num_rows($result)>0){
				while ($row = mysqli_fetch_assoc($result)) {
					echo "
					<tr>
				        <td>$row[id]</td>
				        <td>$row[magv]</td>
				        <td>$row[name]</td>
				        <td><a href='$row[link]'>Tải xuống</a></td>
				        
			   		</tr>
				";
				}
			}
		    ?>
		</table>
</body>
</html>