<?php
/* câu 6. Viết chương trình PHP, sử dụng vòng lặp For each in ra các năm trong mảng có sẵn dưới đây:
$nam = array(1990, 1991, 1992, 1993, 1994, 1995);*/
function printYears($array) {
    foreach ($array as $year) {
        echo $year . "<br>";
    }
}

$nam = array(1990, 1991, 1992, 1993, 1994, 1995);
printYears($nam);
?>
