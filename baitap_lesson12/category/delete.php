<?php
    require_once 'pdo.php';
    $cate = new Category();
    $id = ['id' => $_POST['id']];
    $cate->deleteData($id);
    header("Location: http://localhost/learn_php/baitap_lesson12/category/index.php");
?>
?>