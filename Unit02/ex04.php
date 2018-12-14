<?php 
	$info=array();
	$info['name']='Nguyễn Xuân Thọ';
	$info['address']='Bắc Ninh';
	$info['mobile']='0357004230';
	$info['email']='Nxtho0109@gmail.com';
	$info['gender']='Nam';



	foreach ($info as $key => $value) {
		echo "<br> Key: ".$key;
		echo "<br> Value ".$value;
	}
	echo "<br>";
	echo "<br>";
	echo "<br>";
	foreach ($info as $val) {
		echo "<br>".$val;
		
	}

	
 ?>