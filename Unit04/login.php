<?php 
	if (isset($_POST['user'])&&isset($_POST['pwd'])) {
		$username = $_POST['user'];
		$password = $_POST['pwd'];
	}
	if ($username=="admin" && $password==123456) {
		$_SESSION['username']=$username;
		$_SESSION['password']=$password;
		setcookie('msg','Đăng Nhập Thành công !',time()+6)
?>
		 <!DOCTYPE html>
		 <html lang="en">
		 <head>
		 	<meta charset="UTF-8">
		 	<title>Document</title>
		 	<meta name="viewport" content="width=device-width, initial-scale=1">
  			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		 </head>
		 <body>
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
		 	<a href="logout.php">Đăng Xuất</a>
		 </body>
		 </html>
<?php 
	}else{
		echo "Bạn Vừa Nhập Tài Khoản Mật khẩu không đúng !";
?>

		 <!DOCTYPE html>
		 <html lang="en">
		 <head>
		 	<meta charset="UTF-8">
		 	<title>Document</title>
		 </head>
		 <body>
		 	<a href="ex01.html">Đăng Nhập Lại</a>
		 </body>
		 </html>
<?php		 		
	}
?>
 