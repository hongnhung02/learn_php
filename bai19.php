<!DOCTYPE html>
<html>
<body>
<?php
// Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một số nguyên hay không sử dụng hàm is_int().
function kiemTraSoNguyen($so) {
    if (is_int($so)){
        echo "\"$so\" là một số nguyên";
    } else {
        echo "\"$so\" không phải là một số nguyên";
    }
}
kiemTraSoNguyen(10);
echo "<br>";
?>