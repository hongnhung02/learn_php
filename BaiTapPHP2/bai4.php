<!DOCTYPE html>
<html>
<body>
<?php
//Viết chương trình PHP để kiểm tra xem một chuỗi có chứa một từ cụ thể hay không.
function kiemTraChuoi($chuoi, $tuCanTim) {
    if (strpos($chuoi, $tuCanTim) !== false) {
        echo "Chuỗi '$chuoi' chứa từ '$tuCanTim'.";
    } else {
        echo "Chuỗi '$chuoi' không chứa từ '$tuCanTim'.";
    }
}
$chuoi = "bé lên ba";
$tuCanTim = "ba";
kiemTraChuoi($chuoi, $tuCanTim);
?>
