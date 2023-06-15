<?php
$servername = "localhost";  // Tên máy chủ
$username = "root";         // Tên người dùng
$password = "";             // Mật khẩu
$database = "baitapphp"; // Tên cơ sở dữ liệu

    // Tạo kết nối PDO
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

    // Tạo bảng "customers"

    $stmt =$conn ->prepare('CREATE TABLE IF NOT EXiSTS customers
    (
        id  int(11) NOT NULL ,
        name varchar(255) NOT NULL,
        email varchar(255) NOT NULL,
        phone varchar(255) NOT NULL,
        PRIMARY KEY (id)
    )');
    $result = $stmt ->execute();
    if (!$result){
        die ('Thất bại: '. $stmt ->errorinfo());
    } else {
        echo '1.Thành công:  ' ;
    };
//thêm mới 
$stmt  =$conn ->prepare('INSERT INTO customers (id, name, email, phone) values (?,?,?,?)');
$data1 = array (1, 'hong nhung 1', 'hn1@gmail.com', '0247248749');
$data2 = array (2, 'hong nhung 2', 'hn2@gmail.com', '03748674223');
$data3 = array (3, 'hong nhung 3', 'hn3@gmail.com', '03478347922');
$data4 = array (4, 'hong nhung 4', 'hn4@gmail.com', '0478264272');

$result1 = $stmt ->execute($data1);
    if (!$result1){
        die ('Thất bại: '. $stmt ->errorinfo());
    } else {
        echo '2.Thành công:  ' ;
    }
$result2 = $stmt ->execute($data2);
    if (!$result2){
        die ('Thất bại: '. $stmt ->errorinfo());
    } else {
        echo '3.Thành công:  ' ;
    }
$result3 = $stmt ->execute($data3);
    if (!$result3){
        die ('Thất bại: '. $stmt ->errorinfo());
    } else {
        echo '4.Thành công:  ' ;
    }
$result4 = $stmt ->execute($data4);
    if (!$result4){
        die ('Thất bại: '. $stmt ->errorinfo());
    } else {
        echo '5.Thành công:  ' ;
    }
//update
$stmt = $conn->prepare("UPDATE customers SET name = :name WHERE id = :id ");
$id = 1;
$name = "hong nhung 01";
$stmt->bindParam(':id', $id);
$stmt->bindParam(':name', $name);
$result = $stmt->execute();
if (!$result){
    die ('Thất bại: '. $stmt ->errorinfo());
} else {
    echo '6.Thành công:  ' ;
};
//delete 
$stmt = $conn->prepare("DELETE FROM customers WHERE id = :id");
$id = 5;
$stmt->bindParam(':id', $id);
$result = $stmt->execute();
if (!$result){
    die ('Thất bại: '. $stmt ->errorinfo());
} else {
    echo '7.Thành công:  ' ;
};

// Đóng kết nối
$conn = null;
?>