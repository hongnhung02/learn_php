<!DOCTYPE html>
<html>
<body>
<?php
//Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần.
function xapXep ($array){
    sort($array);
    return $array;
}
$mang = [1, 9, 7, 5];
$xapXep = xapXep($mang);

echo "Mảng đã được sắp xếp theo thứ tự tăng dần: ";
foreach ($xapXep as $value) {
    echo $value . " ";
}
?>
