<?php 
 session_start();
 	if (isset($_GET['msv'])) {
 		$msv=$_GET['msv'];
 	}
 	if (isset($_SESSION['info'])) {
 		$data_arr=$_SESSION['info'][$msv];
 		
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
		<h3 style="text-align: center;">Thông Tin sinh viên </h3>
 		<ul>
 			<li>
 				<span>Mã sinh viên: </span>
 				<?php 
 					echo $data_arr['msv'];
 				 ?>
 			</li>
 			<li>
 				<span>Họ và tên: </span>
 				<?php 
 					echo $data_arr['hoten'];
 				 ?>
 			</li>
 			<li>
 				<span>Số điện thoại: </span>
 				<?php 
 					echo $data_arr['sdt'];
 				 ?>
 			</li>
 			<li>
 				<span>Email: </span>
 				<?php 
 					echo $data_arr['email'];
 				 ?>
 			</li>
 			<li>
 				<span>Giới tính: </span>
 				<?php 
 					echo $data_arr['gioitinh'];
 				 ?>
 			</li>
 			<li>
 				<span>Địa chỉ: </span>
 				<?php 
 					echo $data_arr['diachi'];
 				 ?>
 			</li>

 		</ul>
 	</div>
 </body>
 </html>