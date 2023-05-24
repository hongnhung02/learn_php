<!DOCTYPE html>
<html>
<body>
<?php
// Viết một chương trình PHP để tìm kiếm một chuỗi con trong một chuỗi sử dụng hàm strpos().
function timKiem ($chuoi, $tim) {
    return strpos($chuoi, $tim);
}

echo "Vị trí: " . timKiem ("con trâu vàng ", "trâu");
?>