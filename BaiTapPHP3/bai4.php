<?php
//cau4. Viết chương trình PHP, sử dụng câu lệnh vòng lặp For để in ra số từ 1 đến 100.
function printNumbers() {
    $result = '';
    for ($i = 1; $i <= 100; $i++) {
        $result .= $i . ' ';
    }
    return $result;
}

$numbers = printNumbers();
echo $numbers;
?>