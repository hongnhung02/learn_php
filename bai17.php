<!DOCTYPE html>
<html>
<body>
<?php
// Viết một chương trình PHP để kiểm tra xem một chuỗi có chứa một chuỗi con khác không sử dụng hàm strstr().
function kiemTraChuoi($chuoi1, $chuoi2) {
    $return = strstr($chuoi1, $chuoi2);
    echo $return ?
    "Chuỗi \"$chuoi1\" chứa chuỗi con \"$chuoi2\" "
    : 
    "Chuỗi \"$chuoi1\" không chứa chuỗi \"$chuoi2\"";
}

kiemTraChuoi("bé lên 3", "bé");
?>