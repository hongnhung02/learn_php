<!DOCTYPE html>
<html>
<body>
<?php
//Viết chương trình PHP để kiểm tra xem một số có phải là số chẵn hay không.
function kTChanLe($number) {
    if ($number % 2 == 0) {
        echo "Số $number là số chẵn.";
    } else {
        echo "Số $number là số lẻ.";
    }
}
$soCanKiemTra = 10;
kTChanLe($soCanKiemTra);
?>
