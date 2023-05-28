<!DOCTYPE html>
<html>
<body>
<?php
//Viết chương trình PHP để tìm số dương lớn nhất trong một mảng.
function findLargestPositive($arr) {
    $largestPositive = null;

    // Duyệt qua các phần tử của mảng
    foreach ($arr as $value) {
        // Kiểm tra xem phần tử có phải là số dương và lớn hơn số dương lớn nhất hiện tại không
        if ($value > 0 && ($largestPositive === null || $value > $largestPositive)) {
            $largestPositive = $value;
        }
    }

    return $largestPositive;
}

// Mảng ban đầu
$myArray = [1, 9, 7, 5, -2, 0];

// Tìm số dương lớn nhất trong mảng
$largestPositive = findLargestPositive($myArray);

// In số dương lớn nhất
echo "Số dương lớn nhất trong mảng là: " . $largestPositive;
?>
