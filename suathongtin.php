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
		$query = mysqli_query($conn,"SELECT  magv,name,password,addr,email,sdt FROM  user WHERE magv='$id'");
	    $row = mysqli_fetch_array($query);
	
     ?>


	<form  action="suathongtin.php" method="POST">
 		<div class="form-group">
		    <label for="mane">Họ và tên:</label>
		    <input type="text" class="form-control" name="name">  value="<?php echo $row['name'] ?>">
		</div>
		<div class="form-group">
		    <label for="addr">Địa chỉ:</label>
			<input type="text" class="form-control" name="addr">  value="<?php echo $row['addr'] ?>">
		</div>
		<div class="form-group">
		    <label for="phone">Số điện thoại:</label>
		    <input type="text" class="form-control" name="phone">  value="<?php echo $row['phone'] ?>">
		</div>
		<div class="form-group">
		    <label for="email">Email:</label>
		    <input type="text" class="form-control" name="email">  value="<?php echo $row['email'] ?>">
		</div>
		<a href="suagiaoan.php?id=<?php echo $id ?>" type="button" class="btn btn-info">Lưu</a>
		
	</form>
</body>
</html>