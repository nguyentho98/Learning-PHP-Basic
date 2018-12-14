<?php

	$name ="Zent Group - Be all you can be !";

	// Cat chuoi theo ky tu mong muon
	$data = explode(" ",$name);// cắt chuỗi bằng dấu cách

	echo "<pre>";
		print_r($data);
	echo "</pre>";
	echo implode("tho", $data);// nỗi chuỗi bằng chữ thọ


	echo "<br>strlen: ".strlen($name);// gồm 32 ký tự
	echo "<br>str_word_count: ".str_word_count($name);//8 chữ
	echo "<br>str_repeat(chuỗi , số lần lặp ): ".str_repeat("<br>Ekko ", 10);//Lặp ekko 10 lần
	echo "<br> str_replace: ".str_replace("o", "0", $name);// thay thế o bằng 0 trong câu name
	echo "<br>".md5('thotho');
	echo "<br>".sha1('thotho');
	echo "<br>".substr($name,2,6);
	echo "<br>".stripos($name,"-");

?>