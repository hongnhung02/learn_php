<!DOCTYPE html>
<html>
<body>
<?php
//Viết chương trình PHP để tìm giá trị lớn nhất và nhỏ nhất trong một mảng.
function timGiaTriLonNhat($mang) {
    $lonNhat = $mang[0];
    foreach ($mang as $so) {
        if ($so > $lonNhat) {
            $lonNhat = $so;
        }
    }
    return $lonNhat;
}
function timGiaTriNhoNhat($mang) {
    $nhoNhat = $mang[0];
    foreach ($mang as $so) {
        if ($so < $nhoNhat) {
            $nhoNhat = $so;
        }
    }
    return $nhoNhat;
}
$mang = array(10, 5, 8, 3, 12, 7);
$giaTriLonNhat = timGiaTriLonNhat($mang);
echo "Giá trị lớn nhất trong mảng là: $giaTriLonNhat <p>";
$giaTriNhoNhat = timGiaTriNhoNhat($mang);
echo "Giá trị nhỏ nhất trong mảng là: $giaTriNhoNhat";
?>
