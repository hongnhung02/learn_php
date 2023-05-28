<!DOCTYPE html>
<html>
<body>
<?php
//Viết chương trình PHP để tìm số lớn thứ hai trong một mảng.
function findSecondLargest($array) {
    $max = $array[0];
    $secondMax = $array[0];
    // Tìm số lớn nhất trong mảng
    foreach ($array as $value) {
        if ($value > $max) {
            $secondMax = $max;
            $max = $value;
        } elseif ($value > $secondMax && $value < $max) {
            $secondMax = $value;
        }
    }
    return $secondMax;
}
// Mảng ban đầu
$myArray = [1, 2, 3, 4, 10];
// Tìm số lớn thứ hai trong mảng
$secondLargest = findSecondLargest($myArray);
// In số lớn thứ hai
echo "Số lớn thứ hai trong mảng là: " . $secondLargest;
?>
