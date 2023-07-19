<?php
    require_once 'pdo.php';
    $cate = new Category();
    $data = ['name' => $_POST['name']];
    $cate->createNewData($data);
    header("Location: http://localhost/learn_php/baitap_lesson12/category/index.php");
?>