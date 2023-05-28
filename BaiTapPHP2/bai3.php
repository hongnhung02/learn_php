<!DOCTYPE html>
<html>
<body>
<?php
//Viết chương trình PHP để in ra bảng cửu chương từ 1 đến 10.
function inBangCuuChuong() {
    for ($i = 1; $i <= 10; $i++) {
        echo "Bảng cửu chương $i:<p>"; 
        for ($j = 1; $j <= 10; $j++) {
            $tich = $i * $j;
            echo "$i x $j = $tich <p>";
        }
    }
}
inBangCuuChuong();
?>
