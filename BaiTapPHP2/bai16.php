<!DOCTYPE html>
<html>
<body>
<?php
//Viết chương trình PHP để tính số lượng phần tử trong một mảng.
function tinhSoLuongPhanTu($array) {
    $count = count($array);
    return $count;
}

$array = [1, 2, 3, 4, 5];
$soLuongPhanTu = tinhSoLuongPhanTu($array);

echo "Số lượng phần tử trong mảng: " . $soLuongPhanTu;
?>
