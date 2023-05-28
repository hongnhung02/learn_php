<?php
// Viết một chương trình PHP để tách một chuỗi thành một mảng các phần tử sử dụng hàm explode().
function tachChuoi($chuoi,$mang) {
    $array = explode($chuoi,$mang);
    return $array;
}
print_r(tachChuoi(",","chúc, mừng, năm, mới"));
?>