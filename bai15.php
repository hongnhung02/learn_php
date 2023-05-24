<!DOCTYPE html>
<html>
<body>
<?php
// Viết một chương trình PHP để thêm một chuỗi vào đầu hoặc cuối của một chuỗi sử dụng hàm str_pad().
function themChuoi($string) {
    return str_pad($string , 30, "*", STR_PAD_BOTH );
}
echo "Đi đâu " . themChuoi("chơi nhớ biết đường về sớm nghe chưa") . "<br>";
?>