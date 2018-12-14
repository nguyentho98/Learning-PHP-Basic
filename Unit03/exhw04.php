<?php 
	$name="Nguyễn Xuân Thọ";
	$data = explode(" ",$name);
	echo "<pre>";
		print_r($data);
	echo "</pre>";
	
	echo "<br> Họ: ".$data[0];
	$dem="";
	for ($i = 1; $i <count($data)-1 ; $i++) {
		$dem=$dem.$data[$i]."&nbsp";
		
	}
	if ($dem=="") {
		echo "<br> Đệm: không có tên đêm!";
	}else {
		echo "<br> Đêm: ".$dem;
	}
	
	echo "<br> Tên: ".$data[count($data)-1];
 ?>