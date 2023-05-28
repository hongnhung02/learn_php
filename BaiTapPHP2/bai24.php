<!DOCTYPE html>
<html>
<body>
<?php
function findLargestNumber($arr) {
    $largestNumber = null;

    // Duyệt qua các phần tử của mảng
    foreach ($arr as $value) {
        // Kiểm tra xem phần tử có phải là số lẻ và lớn hơn số lẻ lớn nhất hiện tại không
        if ($value % 2 != 0 && ($largestNumber === null || $value > $largestNumber)) {
            $largestNumber = $value;
        }
    }
    return $largestNumber;
}
// Mảng ban đầu
$myArray = [1, 9, 7, 5];

// Tìm số lẻ lớn nhất trong mảng
$largestNumber = findLargestNumber($myArray);

// In số lẻ lớn nhất
echo "Số lẻ lớn nhất trong mảng là: " . $largestNumber;
?>
   