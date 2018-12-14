<?php 
	 $arr = array(1,4,2,6,9,100,45,8,20); 
	 $max=0;
	 for ($i = 0; $i < count($arr); $i++) {
	 	if ($arr[$i]>$max) {
	 		$max=$arr[$i];
	 	}
	 }
	 echo "Phần tử lớn nhất trong mảng là: ".$max;
 ?>