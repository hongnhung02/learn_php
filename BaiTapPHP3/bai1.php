<?php
//Viết chương trình PHP, sử dụng câu lệnh điều kiện if else để kiểm tra 1 số là số chẵn hay số lẻ?
function checkEvenOddNumber($number) {
    if ($number % 2 == 0) {
        return "Số $number là số chẵn";
    } else {
        return "Số  $number là số lẻ";
    }
}
$check = checkEvenOddNumber(99);
echo $check;
?>
