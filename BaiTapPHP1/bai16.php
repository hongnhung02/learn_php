<?php
// Viết một chương trình PHP để kiểm tra xem một chuỗi có kết thúc bằng một chuỗi con khác không, sử dụng hàm strrchr().
function kiemTraChuoi($chuoi1, $chuoi2)  {
    $return = strrchr($chuoi1, $chuoi2);
    echo $return ?
    "Chuỗi không kết thúc bằng \"$chuoi2\" "
    : 
    "Chuỗi kết thúc bằng \"$chuoi2\"";
}
kiemTraChuoi("con mèo tam thể ", "con");

?>