<?php
//cau3. Kiểm tra năm nay là năm chẵn hay năm lẻ, in ra màn hình kết quả chẵn hay lẻ.
function checkYearEvenOdd($year) {
    if ($year % 2 == 0) {
        return "năm chẵn";
    } else {
        return "năm lẻ";
    }
}

$currentYear = date("X");
$result = checkYearEvenOdd($currentYear);

echo "Năm ($currentYear) là $result";
?>

