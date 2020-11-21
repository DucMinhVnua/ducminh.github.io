<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    	require'connect.php';
  		$id=$_GET['id'];
		$query = mysqli_query($conn,"SELECT  name,password,addr,email,sdt FROM  user WHERE id='$id'");
	    $row = mysqli_fetch_array($query);
        

	
     ?>


	<form  action="suathongtin.php" method="POST">
 		<div class="form-group">
		    <label for="email">Họ và tên:</label>
		    <input type="text" class="form-control"  value="<?php echo $row['name'] ?>">
		</div>
		<div class="form-group">
		    <label for="email">Địa chỉ:</label>
			<input type="text" class="form-control"  value="<?php echo $row['addr'] ?>">
		</div>
		<div class="form-group">
		    <label for="email">Số điện thoại:</label>
		    <input type="text" class="form-control"  value="<?php echo $row['sdt'] ?>">
		</div>
		<div class="form-group">
		    <label for="email">Email:</label>
		    <input type="text" class="form-control"   value="<?php echo $row['email'] ?>">
		</div>
		<a href="suagiaoan.php?id=<?php echo $id ?>" type="button" class="btn btn-info">Lưu</a>
		
	</form>
</body>
</html>