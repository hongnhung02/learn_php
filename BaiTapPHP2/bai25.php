<!DOCTYPE html>
<html>
<body>
<?php
//Viết chương trình PHP để kiểm tra xem một số có phải là số nguyên tố hay không.
function isPrime($number) {
    // Kiểm tra các trường hợp đặc biệt
    if ($number <= 1) {
        return false;
    }
    // Duyệt qua các số từ 2 đến căn bậc hai của số đó
    // Nếu có số nào chia hết cho số đó thì không phải số nguyên tố
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}
// Số cần kiểm tra
$number = 75;

// Kiểm tra xem số có phải là số nguyên tố hay không
if (isPrime($number)) {
    echo "$number là số nguyên tố.";
} else {
    echo "$number không phải là số nguyên tố.";
}
?>
