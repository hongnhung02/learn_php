<?php
// Viết một chương trình PHP để loại bỏ ký tự đầu tiên của một chuỗi sử dụng hàm ltrim().
function boKyTu($kyTu) {
    return ltrim($kyTu, $kyTu[0]);
}
 echo boKyTu("cCon hổ giấy");
?>