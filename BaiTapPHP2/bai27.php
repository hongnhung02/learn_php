<!DOCTYPE html>
<html>
<body>
<?php
//Viết chương trình PHP để tìm số âm lớn nhất trong một mảng.
function findLargestNegative($arr) {
    $largestNegative = null;
    // Duyệt qua các phần tử của mảng
    foreach ($arr as $value) {
        // Kiểm tra xem phần tử có phải là số âm và lớn hơn số âm lớn nhất hiện tại không
        if ($value < 0 && ($largestNegative === null || $value > $largestNegative)) {
            $largestNegative = $value;
        }
    }
    return $largestNegative;
}

// Mảng ban đầu
$myArray = [1, -9, 7, 5, -2, 0];

// Tìm số âm lớn nhất trong mảng
$largestNegative = findLargestNegative($myArray);

// In số âm lớn nhất
echo "Số âm lớn nhất trong mảng là: " . $largestNegative;
?>
