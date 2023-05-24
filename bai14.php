<!DOCTYPE html>
<html>
<body>
<?php
// Viết một chương trình PHP để nối các phần tử của một mảng thành một chuỗi sử dụng hàm implode().
function noiChuoi($chuoi) {
    echo implode($chuoi);
}

noiChuoi (["hai", "con", "thằn", "lằn", "con" ]) ;
?>