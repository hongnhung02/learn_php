<!DOCTYPE html>
<html>
<body>
<?php
//Viết chương trình PHP để tính tổng của các số từ 1 đến n.
function tinhTong($n) {
    $tong = 0;
    for ($i = 1; $i <= $n; $i++) {
        $tong += $i;
    }
    return $tong;
}
$n = 10;
$ketQua = tinhTong($n);
echo "Tổng các số từ 1 đến $n là: $ketQua";
?>
