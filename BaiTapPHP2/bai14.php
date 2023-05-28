<?php
function findElementIndex($array, $element) {
    // Duyệt qua các phần tử của mảng
    for ($i = 0; $i < count($array); $i++) {
        // Kiểm tra xem phần tử hiện tại có trùng khớp với phần tử cần tìm hay không
        if ($array[$i] === $element) {
            return $i; // Trả về vị trí của phần tử trong mảng
        }
    }
    return -1; // Trả về -1 nếu phần tử không được tìm thấy trong mảng
}
// Mảng ban đầu
$array = [1, 9, 7, 5];

// Phần tử cần tìm
$element = 8;

// Tìm vị trí của phần tử trong mảng
$index = findElementIndex($array, $element);

// In kết quả
if ($index !== -1) {
    echo "Phần tử $element được tìm thấy tại vị trí $index trong mảng.";
} else {
    echo "Phần tử $element không tồn tại trong mảng.";
}
?>
