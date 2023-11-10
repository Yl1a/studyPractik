<?
session_start();
require('./assets/database/connection.php');
require('./assets/page/head.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jura:wght@300;400;600;700&display=swap" rel="stylesheet">
    <title>Document</title>
    <script src="assets/js/main.js" defer></script>
    <script src="assets/js/add.js" defer></script>
</head>

<body>

    <?
    include('./assets/page/header.php');
    $page = $_GET['page'];
    $path = $page ? './assets/page/' . $page . '.php' : './assets/page/main.php';
    file_exists($path) ? include($path) : include('./assets/page/error.php');
    ?>

</body>

</html>