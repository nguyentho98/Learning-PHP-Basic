<?php 
	$arr = array(1,4,2,6,9,100,4,);
	echo "Mảng đầu vào: ";
	for ($i = 0; $i <count($arr) ; $i++) {
		echo ",".$arr[$i];
	}
    echo "<br>";
	echo "Mảng đảo ra: ";
    for ($i = count($arr)-1; $i >=0 ; $i--) {
		echo ",".$arr[$i];
	}
 ?>