<!DOCTYPE html>
<html>
<body>
<?php
// Viết một chương trình PHP để đảo ngược một chuỗi sử dụng hàm strrev().
function daoNguocChuoi ($chuoi) {
    return strrev($chuoi);
}
echo "Chuỗi sau khi đảo: " . daoNguocChuoi("con ga luoc");
?>