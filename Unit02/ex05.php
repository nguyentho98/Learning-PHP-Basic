<?php 
function kiem_Tra_so_Chan_le($number) {
	return($number%2==0)?true:false;
}
echo "11 là số ".((kiem_Tra_so_Chan_le(11))?"chẵn":"lẻ");
echo '<br>';
echo '<br>';
echo '<br>';
function kiem_Tra_so_Chan($number) {
	return($number%2==0)?"chẵn":"lẻ";
}
echo "12 là số ".(kiem_Tra_so_Chan(12));

echo '<br>';
echo '<br>';
echo '<br>';
$so1 = 12;
$so2 = 13;

// chỉ truyền 2 đối số vào
echo tinhtong($so1, $so2);
echo '<br>';
echo tinhtong($so1, $so2,13);
// $c có một giá trị mặc định
// hàm này tính tổng của 3 số
function tinhtong($a, $b, $c = false)
{
	$tong = $a + $b;
    if ($c != false){ // nếu $c được truyền vào (vì false là giá trị mặc định)
        $tong = $tong + $c; // thì thực hiện cộng thêm $c
    }
    return $tong;
}

 echo '<br>';
  echo '<br>';
   echo '<br>';
// ham kiem tra
function kiem_tra()
{
    // bien tinh
    static $a = 0;
    $a++;
    echo $a;
}
 echo '<br>'; 
kiem_tra();
echo '<br>';
kiem_tra();
echo '<br>';
kiem_tra();
echo '<br>';
kiem_tra();
?>