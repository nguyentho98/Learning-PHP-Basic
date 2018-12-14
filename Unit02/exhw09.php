<?php 
	$tong=0;
	for ($i = 0; $i <19 ; $i++) {
		if ($i%2==0) {
			$tong+=$i;
		}
	}
	echo "Tổng 10 số chẵn đầu tiên là: ".$tong;
 ?>