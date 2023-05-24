<!DOCTYPE html>
<html>
<body>
<?php
// Viết một chương trình PHP để thay thế một chuỗi con trong một chuỗi bằng một chuỗi khác sử dụng hàm str_replace().
function fStrReplace($firstVar, $secondVar, $string) {
    echo "Chuỗi ban đầu: " . $string . "<br>";
    echo "Chuỗi sau khi thay thế: " . str_replace($firstVar, $secondVar, $string);
}
fStrReplace("bị", "", "con ngựa bị vằn" );
?>