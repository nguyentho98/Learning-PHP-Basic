<?php 
 session_start();
 	if (isset($_SESSION['info'])) {
 		$data_arr=$_SESSION['info'];
 	}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	 <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<h3 style="text-align: center;">Danh Sách Người Dùng</h3>
		
		<a class="btn btn-primary" href="add.php" role="button" style="margin-bottom: 40px;">Thêm mới</a>
		<?php 
		 		if (isset($_COOKIE['msg'])) {
		 	?>
		 		<div class="alert alert-success">
  					<strong>Success!</strong>
  					<?php
  						echo $_COOKIE['msg']; 
  					 ?>
				</div>
		 	<?php
		 	}
		 ?>
		<table class="table">
		  <thead>
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Mã sinh viên</th>
		      <th scope="col">Họ và tên</th>
		      <th scope="col">Action</th>
		    </tr>
		  </thead>
		  <tbody>
		   <?php
		   		$i=0;
		   		foreach ($data_arr as $value) {
		   		 	$i++;
		   ?>	 	
		   		
		  
		    <tr>
		    	<td> <?php echo $i; ?></td>
				<td> <?php echo $value['msv']; ?></td>
				<td> <?php echo $value['hoten']; ?></td>
				<td>
					<a class="btn btn-success" href="detail.php?msv=<?php echo $value['msv'] ?>" role="button">Xem TT</a>
					<a class="btn btn-danger" href="xoa.php?msv=<?php echo $value['msv'] ?>" role="button">Xóa TT</a>
					<a class="btn btn-success" href="edit.php?msv=<?php echo $value['msv'] ?>" role="button">Sửa TT</a>
				</td>
			 </tr>
			<?php
				} 
			 ?>
		   
		  </tbody>
		</table>	
	</div>
</body>
</html>