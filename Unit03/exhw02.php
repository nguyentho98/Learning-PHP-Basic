<?php
        function kiem_tra_chuoi_palindrome($string)   
		{  
		  if ($string == strrev($string))  
			  return "Là chuỗi palindrome";  
		  else  
			  return "Không là chuỗi palindrome";  
		}  
		$str="thoAoht";
		echo "<br> Chuỗi &nbsp".$str."&nbsp".kiem_tra_chuoi_palindrome($str);
?>