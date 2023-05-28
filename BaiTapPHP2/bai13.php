<!DOCTYPE html>
<html>
<body>
<?php
//Viết chương trình PHP để loại bỏ các phần tử trùng lặp trong một mảng.
function loaiBoTrunglap($array) {
    $uniqueArray = array_unique($array);
    return $uniqueArray;
}

$array = [1, 2, 3, 2, 4, 3, 5, 6, 5];
$uniqueArray = loaiBoTrunglap($array);

echo "Mảng sau khi loại bỏ các phần tử trùng lặp: ";
foreach ($uniqueArray as $value) {
    echo $value . " ";
}
?>
