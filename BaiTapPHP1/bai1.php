<!DOCTYPE html>
<html>
<body>
<?php
    //Viết một chương trình PHP để đếm số ký tự trong một chuỗi sử dụng hàm strlen().
    function kyTu($chuoi) {
        return strlen($chuoi);
    }

    echo "Số ký tự: " . kyTu("đi đâu chơi nhớ về sớm nghe chưa");
    ?>