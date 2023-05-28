<!DOCTYPE html>
<html>
<body>
<?php
//Viết chương trình PHP để tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương.
function find_UC_Max($a, $b) {
    while ($b != 0) {
        $number = $b;
        $b = $a % $b;
        $a = $number;
    }
    return $a;
}
function find_BC_Max($a, $b) {
    $ucMax = find_UC_Max($a, $b);
    $bcMax = ($a * $b) / $ucMax;
    return $bcMax;
}

// Đầu vào
$num1 = 75;
$num2 = 94;

// Tìm ước số chung lớn nhất 
$ucMax = find_UC_Max($num1, $num2);

// Tìm bội số chung nhỏ nhất 
$bcMax= find_BC_Max($num1, $num2);

// In kết quả
echo "Ước số chung lớn nhất của $num1 và $num2 là: " . $ucMax . "<br>";
echo "Bội số chung nhỏ nhất của $num1 và $num2 là: " . $bcMax;
?>
