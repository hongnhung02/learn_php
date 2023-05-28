<!DOCTYPE html>
<html>
<body>
<?php
function sumNumbers($n) {
    $sum = 0;
    // Duyệt qua các số từ 1 đến n
    for ($i = 1; $i <= $n; $i++) {
        // Kiểm tra xem số hiện tại có phải số lẻ không
        if ($i % 2 != 0) {
            $sum += $i;
        }
    }
    return $sum;
}

// Số n
$n = 2002;

// Tính tổng các số lẻ từ 1 đến n
$sum = sumNumbers($n);

// In kết quả
echo "Tổng các số lẻ từ 1 đến $n là: " . $sum;
?>
