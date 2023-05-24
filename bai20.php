
<!DOCTYPE html>
<html>
<body>
<?php
// Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một email hợp lệ hay không sử dụng hàm filter_var().
function check ($email) {
    if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "\"$email\" là email quá trời hợp lệ";
    } else {
        echo "\"$email \" không phải là email hợp lệ đâuu";
    }
}

check ("hongnhung120802@gmail.com");
?>