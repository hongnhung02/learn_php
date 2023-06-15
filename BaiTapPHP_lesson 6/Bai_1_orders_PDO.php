<?php
$servername = "localhost";  // Tên máy chủ
$username = "root";         // Tên người dùng
$password = "";             // Mật khẩu
$database = "baitapphp"; // Tên cơ sở dữ liệu

    // Tạo kết nối PDO
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

    // Tạo bảng "orders"
    $stmt =$conn ->prepare('CREATE TABLE IF NOT EXiSTS orders
    (
        id  int(11) NOT NULL ,
        customer_id  int(11) NOT NULL ,
        total_amount float NOT NULL,
        order_date date NOT NULL,
        FOREIGN KEY (customer_id) REFERENCES customers(id) ON DELETE CASCADE
    )');
    $result = $stmt ->execute();
    if (!$result){
        die ('Thất bại: '. $stmt ->errorinfo());
    } else {
        echo '1.Thành công:  ' ;
    };
//thêm mới 
$stmt  =$conn ->prepare('INSERT INTO orders (id, customer_id, total_amount, order_date) values (?,?,?,?)');
$data = array (3, 3, 100.000, '2023-06-15');

$result = $stmt ->execute($data);
    if (!$result){
        die ('Thất bại: '. $stmt ->errorinfo());
    } else {
        echo '2.Thành công:  ' ;
    }

//lấy dữ liệu
$stmt = $conn->prepare("SELECT * FROM orders WHERE customer_id = :customer_id;");
$stmt ->setFetchMode(PDO::FETCH_ASSOC);
$stmt->execute(array('customer_id' => '3'));
While($row = $stmt->fetch())
{
    echo $row ['id'] ;
    echo $row ['customer_id'] ;
    echo $row ['total_amount'] ;
    echo $row [' order_date'] ;
}
$result = $stmt ->execute();
if (!$result){
    die ('Thất bại: '. $stmt ->errorinfo());
} else {
    echo '3.Thành công:  ' ;
};


// Đóng kết nối
$conn = null;
?>