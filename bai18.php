<!DOCTYPE html>
<html>
<body>
<?php
// Viết một chương trình PHP để thay thế tất cả các ký tự trong một chuỗi không phải là chữ cái hoặc số bằng một ký tự khác sử dụng hàm preg_replace().
function thayThe($var_1, $var_2) {
    $var_3= '/[^a-zA-Z0-9]/';
    echo $var_1 ."<br>=>". preg_replace($var_3, $var_2, $var_1);;
}

echo thayTHe("Hoa hồng", "_");
?>