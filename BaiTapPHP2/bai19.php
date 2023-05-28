<?php
//Viết chương trình PHP để sắp xếp một mảng theo thứ tự giảm dần.
function sapXepGiamDan($array) {
    rsort($array);
    return $array;
}
$array = [5, 2, 8, 1, 4];
$mangSapXep = sapXepGiamDan($array);
echo "Mảng sau khi sắp xếp giảm dần: " . implode(", ", $mangSapXep);
?>
