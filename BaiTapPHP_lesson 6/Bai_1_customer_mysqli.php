<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "baitapphp";
$connection = mysqli_connect($servername,$username,$password);

if(!$connection)
    die("Thất bại " . mysqli_error()); 
    // Thông báo lỗi nếu kết nối thất bại 
if (!mysqli_select_db($connection, $database))     
    die("thất bại " . mysql_error()); 
   // Thông báo lỗi nếu chọn CSDL thất bại
$createtable = "
   CREATE TABLE IF NOT EXiSTS customers (

    id  int(11) NOT NULL ,
    name varchar(255) NOT NULL,
    email varchar(255) NOT NULL,
    phone varchar(255) NOT NULL,
    PRIMARY KEY (id)
  
   )"; 
$result = mysqli_query($connection,$createtable);
if (!$result){
    die ('Thất bại: '. mysqli_error($connection));
} else {
    echo 'Thành công: '. $createtable. '</br>';
};

echo "____________________INSERT _______________________ <br/>";
    // Thêm mới

    $sql_insert = "
    INSERT INTO customers (id,name,email,phone)
    VALUES
    (1, 'hong nhung 1', 'hn1@gmail.com', '0247248749'),
    (2, 'hong nhung 2', 'hn2@gmail.com', '03748674223'),
    (3, 'hong nhung 3', 'hn3@gmail.com', '03478347922'),
    (4, 'hong nhung 4', 'hn4@gmail.com', '0478264272')
    ";
    $result = mysqli_query($connection,$sql_insert);
    if (!$result){
        die ('Thất bại: '. mysqli_error($connection));
    } else {
        echo 'Thành công: '. $sql_insert. '</br>';
    };
    
echo "___________________UPDATE________________________ <br/>";
    // Update

    $sql_update = "UPDATE customers SET name = 'hong nhung 01' WHERE id = '1'";
    $result = mysqli_query($connection,$sql_update);
    if (!$result){
        die ('Thất bại: '. mysqli_error($connection));
    } else {
        echo 'Thành công: '. $sql_update. '</br>';
    };

echo "____________________DELETE_______________________ <br/>";
    // Xoá

    $sql_dlt = "DELETE FROM customers WHERE id = '4'"; 
     $result = mysqli_query($connection,$sql_dlt);
    if (!$result){
        die ('Thất bại: '. mysqli_error($connection));
    } else {
        echo 'Thành công: '. $sql_dlt. '</br>';
    };

echo "___________________________________________ <br/>";

$sql = "SELECT * FROM customers WHERE email = 'hn2@gmail.com';"; 
$result = mysqli_query($connection,$sql);
if (!$result){
   die ('Thất bại: '. mysqli_error($connection));
} else {
   echo 'Thành công: '. $sql. '</br>';
};
    mysqli_close($connection);
?>

   

    
