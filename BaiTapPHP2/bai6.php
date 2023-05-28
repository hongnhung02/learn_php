<!DOCTYPE html>
<html>
<body>
<?php
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