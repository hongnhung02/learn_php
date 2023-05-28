<!DOCTYPE html>
<html>
<body>
<?php
//Viết chương trình PHP để kiểm tra xem một số có phải là số hoàn hảo hay không.
function isPerfectNumber($number) {
    $sum = 0;
    // Tìm các ước số dương của số đó và tính tổng
    for ($i = 1; $i < $number; $i++) {
        if ($number % $i == 0) {
            $sum += $i;
        }
    }
    // Kiểm tra xem tổng ước số có bằng số gốc hay không
    if ($sum == $number) {
        return true;
    } else {
        return false;
    }
}
// Số cần kiểm tra
$number = 6;
// Kiểm tra xem số có phải là số hoàn hảo hay không
if (isPerfectNumber($number)) {
    echo "$number là số hoàn hảo.";
} else {
    echo "$number không phải là số hoàn hảo.";
}
?>
 