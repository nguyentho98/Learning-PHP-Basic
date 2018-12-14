<?php
	function chuan_hoa_dau_vao($str)
	{
			trim(" ",$str);
			return mb_convert_case($str, MB_CASE_TITLE, "UTF-8");
	}	
		$str=" nGuyễN xuÂn thọ ";
		$str = chuan_hoa_dau_vao($str);
		echo $str;
?>