<?php 
	$arr = array(1,4,2,6,9,100,4,);
	asort($arr);
	echo "Dãy số tăng dần là: ";
    foreach ($arr as $val) {
    	echo ",".$val;
    }
 ?>