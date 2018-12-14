<?php 
	$n=9;
	$s=0;
	for ($i=1; $i<=$n ; $i+=2) { 
		$s+=($i*$i);
	}
	echo "<br> S= ".$s;
	$s=0;
	$i=1;
	while ($i<=$n) {
		$s+=($i*$i);
		$i+=2;
	}
	echo "<br><hr>S = ".$s;

	$s=0;
	$i=1;
	do {
		$s+=($i*$i);
		$i+=2;
	} while ($i<=$n);
	echo "<br><hr>S = ".$s;
 ?>