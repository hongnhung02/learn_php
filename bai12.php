<!DOCTYPE html>
<html>
<body>
<?php
// Viết một chương trình PHP để loại bỏ ký tự cuối cùng của một chuỗi sử dụng hàm rtrim().
function boKiTu($kiTu) {
    $kiTuCuoi = $kiTu[strlen($kiTu) - 1];
    return  rtrim($kiTu,$kiTuCuoi );
}
echo boKiTu ("1 nghìn 1 miếng cu đơ, 2 nghìn 2 miếng cu đơ 1 nghìn");
?>