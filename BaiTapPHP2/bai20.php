<?php
//Viết chương trình PHP để thêm một phần tử vào đầu hoặc cuối của một mảng.
function themVaoDau($array, $element) {
    array_unshift($array, $element);
    return $array;
}

$array = [2, 3, 4, 5];
$element = 1;
$mangSauKhiThemVaoDau = themVaoDau($array, $element);
echo "Mảng sau khi thêm $element vào đầu: " . implode(", ", $mangSauKhiThemVaoDau);
?>
