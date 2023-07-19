<?php
    require_once 'pdo.php';
    $cate = new Category();
    $id = ['id' => $_GET['id']];
    $name = $_POST['name'];
    $data = [
        'id' => $id['id'],
        'name' => $name
    ];
    $cate->updateData($data);
    header("Location: http://localhost/learn_php/baitap_lesson12/category/index.php");
?>
