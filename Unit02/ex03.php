<?php 
	$info=array();
	$info['name']='Nguyễn Xuân Thọ';
	$info['address']='Bắc Ninh';
	$info['mobile']='0357004230';
	$info['email']='Nxtho0109@gmail.com';
	$info['gender']='Nam';

	echo "<br> Thông Tin Sinh Viên ";
	echo "<hr> ";	
	echo "<br> Họ và Tên: ".$info['name'];
	echo "<br> Quê Quán: ".$info['address'];
	echo "<br> Số Điện Thoại: ".$info['mobile'];
	echo "<br> Email: ".$info['email'];
	echo "<br> Giới Tính: ".$info['gender'];

	
		$point=array();
		$point['Toan']=array();
		$point['Toan']['cuoiki']=20;
		$point['Toan']['giuaki']=10;
		$point['Ly']=9;
		$point['Hoa']=8;
	$info['point']=$point;
	echo  "<pre>";
       print_r($info);
    echo "</pre>";
	

	echo "<br> Điểm Toán Cuối Kỳ ".$info['point']['Toan']['cuoiki'];
	echo "<br> ";
	echo "<br> ";
	$row1=array(1,2,3,4);
	$row2=array(5,6,7,8);
	$data=array($row1,$row2);
	for ($i=0; $i < count($data); $i++) { 
		for ($j=0; $j <count($data[$i]) ; $j++) { 
			echo $data[$i][$j]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
		}
		echo "<br><br>";
	}

 ?>