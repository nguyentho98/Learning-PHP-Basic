<?php
// khai báo các biến toàn cầu
$heso_a = "";
$heso_b = "";

// đọc các hệ số từ FORM
if (isset ( $_POST ['heso_a'] )) {
    $heso_a = $_POST ['heso_a'];
}
if (isset ( $_POST ['heso_b'] )) {
    $heso_b = $_POST ['heso_b'];
}
/**
 * giải phương trình bậc 2 trong PHP
 * 
 **/
function giaiPTB1($a, $b) {
    // kiểm tra biến đầu vào
    if ($a == "") $a = 0;
    if ($b == "") $b = 0;
    // in phương trình ra màn hình
    echo "Phương trình: " . $a . "x1 + " . $b . " = 0";
    echo "<br>";
    // kiểm tra các hệ số
    if ($a == 0) {
        if ($b == 0) { 
            echo('phương trình vô số nghiệm!');
        }else {
            echo ("Phương trình vô nghiệm!");
        }
    }else {
        echo  ("Phương trình có một nghiệm: "
                    . "x = " . (-$b / $a));
    }
        return;
}

?>
<form action="#" method="post">
    <table>
        <tr>
            <td>Hệ số bậc 1, a</td>
            <td><input type="text" name="heso_a" value="<?=$heso_a?>" /></td>
        </tr>
        <tr>
            <td>Hệ số tự do, b</td>
            <td><input type="text" name="heso_b" value="<?=$heso_b?>" /></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Kết quả"></td>
        </tr>
    </table>
</form>
<br>
<?php
// gọi hàm giải phương trình bậc 2

giaiPTB1 ( $GLOBALS ['heso_a'], $GLOBALS ['heso_b']);
?>