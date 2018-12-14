<?php 
	for ($i = 8; $i >=1; $i--) {
		for ($j = 1; $j <=8 ; $j++) {
			if ($j>=$i) {
				echo "#&nbsp";
			}else {
				echo "&nbsp&nbsp&nbsp";
			}
		}
		echo "<br>";
	}
 ?>