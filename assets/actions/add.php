<?php

require_once '../database/connection.php';

session_start();

global $connection;

if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $desc = $_POST['desc'];
    $category = $_POST['category'];
    $cost = $_POST['cost'];

    $file_name = $_FILES['photo']['name'];
    $file_path = 'assets/img/item/' . time() . $_FILES['photo']['name'];
    move_uploaded_file($_FILES['photo']['tmp_name'], $file_path);


    $sql = "INSERT INTO `product` (`name`, `price`, `type`, `img`, `description`) VALUES ('$name', '$cost', '$category', '$file_path', '$desc');";
    $connect->query($sql);
    echo '<script>document.location.href="?page=main"</script>';
}
header('Location: ../../?page=main');
