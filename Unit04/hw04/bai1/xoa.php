<?php 
session_start();
	if (isset($_GET['msv'])) {
		$msv=$_GET['msv'];
		unset($_SESSION['info'][$msv]);
	}
	setcookie('msg','Xóa Thành Công !',time()+5);
	header("location: list.php")
 ?>