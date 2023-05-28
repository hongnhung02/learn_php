<!DOCTYPE html>
<html>
<body>
<?php
//Viết chương trình PHP để chèn một phần tử vào một mảng ở vị trí bất kỳ.
function insertElement($element, $position) {
    // Tạo một mảng mới để chứa phần tử được chèn
    $newArray = [];

    // Duyệt qua các phần tử của mảng ban đầu
    for ($i = 0; $i < count($array); $i++) {
        // Chèn phần tử vào vị trí chỉ định
        if ($i == $position) {
            $newArray[] = $element;
        }
        // Sao chép các phần tử khác vào mảng mới
        $newArray[] = $array[$i];
    }
    // Trả về mảng mới đã được chèn phần tử
    return $newArray;
}
// Mảng ban đầu
$myArray = [1, 2, 3, 4, 5];

// Phần tử cần chèn
$newElement = 10;

// Vị trí chèn
$insertPosition = 2;

// Chèn phần tử vào mảng ở vị trí bất kỳ
$newArray = insertElement($myArray, $newElement, $insertPosition);

// In mảng mới đã được chèn phần tử
echo "Mảng mới: " . implode(', ', $newArray);
?>
