<!DOCTYPE html>
<html>
<body>
<?php
//Viết chương trình PHP để tính tổng của các số trong một mảng.
function tinhTong($array) {
    $tong = 0;
    foreach ($array as $value) {
        $tong += $value;
    }
    return $tong;
}
$mang = [1, 2, 3, 4, 5];
$tong = tinhTong($mang);
echo "Tổng của các số trong mảng là: $tong";
?>
