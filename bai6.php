<!DOCTYPE html>
<html>
<body>
<?php
// Viết một chương trình PHP để kiểm tra xem một chuỗi có bắt đầu bằng một chuỗi con khác không sử dụng hàm strncmp().
function fStrncmp($string, $var) {
    // biến thứ 3 biểu thị cho số kí tự đầu tiên được so sánh
    $check = strncmp($string, $var, $length = strlen($var)); 
    if($check === 0){
        echo "Chuỗi \"$string\" bắt đầu bằng \"$var\"";
    } else {
        echo "Chuỗi \"$string\" không bắt đầu bằng \"$var\"";
    }   
}

fStrncmp("Death is like the wind; always by my side","Follow the wind, but watch your back");
?>