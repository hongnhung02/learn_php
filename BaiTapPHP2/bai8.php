<!DOCTYPE html>
<html>
<body>
<?php
//Viết chương trình PHP để tìm số nguyên tố trong một khoảng cho trước.
function isPrime($number) {
    if ($number < 2) {
        return false; // Số nhỏ hơn 2 không phải số nguyên tố
    }
    // Duyệt qua các số từ 2 đến căn bậc hai của số
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false; // Số có ước số khác 1 và chính nó, không phải số nguyên tố
        }
    }
    return true; // Số là số nguyên tố
}
function findPrimes($start, $end) {
    $primes = [];
    // Duyệt qua các số trong khoảng từ start đến end
    for ($i = $start; $i <= $end; $i++) {
        // Kiểm tra xem số hiện tại có phải là số nguyên tố không
        if (isPrime($i)) {
            $primes[] = $i;
        }
    }
    return $primes;
}
// Khoảng ban đầu
$start = 1;
$end = 21;

// Tìm số nguyên tố trong khoảng
$primeNumbers = findPrimes($start, $end);

// In các số nguyên tố
echo "Các số nguyên tố trong khoảng từ $start đến $end là: ";
echo implode(', ', $primeNumbers); //Nốic ác phần tử thành môtj chuỗi
?>
