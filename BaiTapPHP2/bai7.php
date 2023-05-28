<!DOCTYPE html>
<html>
<body>
<?php
//Viết chương trình PHP để tính giai thừa của một số nguyên dương.
function tinhGiaiThua($n) {
    if ($n == 0 || $n == 1) {
        return 1;
    } else {
        return $n * tinhGiaiThua($n - 1);
    }
}
$soNguyenDuong = 5;
$giaiThua = tinhGiaiThua($soNguyenDuong);
echo "Giai thừa của $soNguyenDuong là: $giaiThua";
?>
