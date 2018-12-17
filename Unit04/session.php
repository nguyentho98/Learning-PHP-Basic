<?php 
	session_start();

	 $_SESSION['username'] = "Zent Group";
	 echo "<pre>";
       print_r($_SESSION);
   	 echo "</pre>";
 ?>