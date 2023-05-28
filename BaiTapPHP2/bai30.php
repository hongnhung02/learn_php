<?php
function isSubstring($string, $substring) {
    $stringLength = strlen($string);
    $substringLength = strlen($substring);

    // Duyệt qua các vị trí trong chuỗi
    for ($i = 0; $i <= $stringLength - $substringLength; $i++) {
        // Kiểm tra xem chuỗi con tại vị trí hiện tại có trùng khớp với chuỗi con cần tìm hay không
        if (substr($string, $i, $substringLength) === $substring) {
            return true; // Chuỗi con tồn tại trong chuỗi ban đầu
        }
    }
    return false; // Chuỗi con không tồn tại trong chuỗi ban đầu
}
// Chuỗi ban đầu
$string = "Zui Zẻ khong quạu";

// Chuỗi con cần kiểm tra
$substring = "Zui";

// Kiểm tra xem chuỗi con có tồn tại trong chuỗi ban đầu hay không
if (isSubstring($string, $substring)) {
    echo "Chuỗi \"$substring\" là chuỗi con của chuỗi \"$string\".";
} else {
    echo "Chuỗi \"$substring\" không là chuỗi con của chuỗi \"$string\".";
}
?>
