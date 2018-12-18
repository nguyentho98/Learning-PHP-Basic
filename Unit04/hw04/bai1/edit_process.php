<?php 
	session_start();
		if (isset($_POST['msv'])) {
			$msv = $_POST['msv'];
		}
		if (isset($_POST['hoten'])) {
			$hoten = $_POST['hoten'];
		}
		if (isset($_POST['sdt'])) {
			$sdt = $_POST['sdt'];
		}
		if (isset($_POST['email'])) {
			$email = $_POST['email'];
		}
		if (isset($_POST['gioitinh'])) {
			$gioitinh = $_POST['gioitinh'];
		}
		if (isset($_POST['diachi'])) {
			$diachi = $_POST['diachi'];
		}
		$_SESSION['info'][$msv]=[
			'msv'=>$msv,
			'hoten'=>$hoten,
			'sdt'=>$sdt,
			'email'=>$email,
			'gioitinh'=>$gioitinh,
			'diachi'=>$diachi,
		];
		setcookie('msg','Sửa Thành Công !',time()+5);
		header('location: list.php');
?>