<?php
//Viết chương trình PHP để đảo ngược một chuỗi.
function reverseString($string) {
    $length = strlen($string);
    $reversedString = '';

    // Duyệt qua các ký tự của chuỗi từ cuối đến đầu
    for ($i = $length - 1; $i >= 0; $i--) {
        $reversedString .= $string[$i];
    }

    return $reversedString;
}

// Chuỗi ban đầu
$string = "Con Ong";

// Đảo ngược chuỗi
$reversedString = reverseString($string);

// In chuỗi đã đảo ngược
echo "Chuỗi đã đảo ngược: $reversedString";
?>
