<?php 
	
		if (isset($_POST['user'])) {
			$user = $_POST['user'];
		}
		if (isset($_POST['pwd'])) {
			$pwd = $_POST['pwd'];
		}
		echo "User: ".$user;
		echo "<br>Pasword: ".$pwd;
 ?>