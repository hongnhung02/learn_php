<?php
// Viết một chương trình PHP để đếm số từ trong một chuỗi sử dụng hàm str_word_count().
function dem($chuoi) {
    return str_word_count($chuoi);
}

echo "Số từ: " . dem ("đếm từ trong chuỗi");
?>