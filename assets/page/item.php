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
    <script src="assets/js/item.js" defer></script>
</head>

<body>
    <?
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM product WHERE `id` = '$id'";
        $item = $connect->query($sql)->fetch(PDO::FETCH_ASSOC);
        if (isset($_POST['edit'])) {
            $name = $_POST['name'];
            $desc = $_POST['desc'];
            $category = $_POST['category'];
            $cost = $_POST['cost'];

            $file_name = $_FILES['photo']['name'];
            $file_path = 'assets/img/item/' . time() . $_FILES['photo']['name'];
            move_uploaded_file($_FILES['photo']['tmp_name'], $file_path);


            $sql = "UPDATE `product` SET  
            `name` = '$name', 
            `price` = '$cost',
             `type` = '$category', 
             `img` = '$file_path',
              `description` = '1231231' 
              WHERE `product`.`id` = $id";
            $connect->query($sql);
            echo '<script>document.location.href="?page=main"</script>';
        }

        if (isset($_GET['del'])) {
            $sql = "DELETE FROM `product` WHERE `product`.`id` = $id";
            $connect->query($sql);
            echo '<script>document.location.href="?page=main"</script>';
        }
    }

    ?>
    <main>

        <div class="item">
            <div class="modal modalDelete">
                <div class="modal_inner">
                    <div class="close">
                        <button class="closeBtn closeBtnDelete">×</button>
                    </div>
                    <div class="modal_content active">
                        <h2 class="title">Удаление</h2>
                        <p class="text">Вы точно хотите удалить этот товар?<br>
                            <?= $item['name'] ?>
                        </p>
                        <div class="delete_btns" style="padding-top:20px;">
                            <button class="btn"
                                onclick="location.href='?page=item&id=<?= $item['id'] ?>&del'">Удалить</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal modalEdit">
                <div class="modal_inner">
                    <div class="close">
                        <button class="closeBtn closeBtnEdit">×</button>
                    </div>
                    <div class="modal_content active">
                        <h2 class="title">Редактирование</h2>
                        <form action="" class="formEdit" method="POST" enctype="multipart/form-data">
                            <div class="input">
                                <p class="text">название</p>
                                <input type="text" class="input__item" name="name" value="<?= $item['name'] ?>" />
                            </div>
                            <div class="input">
                                <p class="text">описание</p>
                                <input type="text" class="input__item" name="desc"
                                    value="<?= $item['description'] ?>" />
                            </div>
                            <div class="input">
                                <p class="text"> цена</p>
                                <input type="text" class="input__item" name="cost" value="<?= $item['price'] ?>" />
                            </div>
                            <div class="input">
                                <p class="text">категория</p>
                                <select name="category" class="input__item">
                                    <?php
                                    $shop_category_id = $item['type'];
                                    $sql = "SELECT * FROM product_types WHERE id = $shop_category_id";
                                    $select_category = $connect->query($sql)->fetch();
                                    ?>
                                    <option value="<?= $select_category['id'] ?>">
                                        <?= $select_category['name'] ?>
                                    </option>
                                    <option value="<?= $item['type'] ?>">-- Выберите категорию --</option>
                                    <?php
                                    $sql = "SELECT * FROM product_types";
                                    $result = $connect->query($sql);
                                    foreach ($result as $cat) { ?>
                                        <option value="<?= $cat['id'] ?>" <?php
                                          if ($cat['id'] == $news['category_id']) {
                                              echo 'selected';
                                          }
                                          ?>>
                                            <?= $cat['name'] ?>
                                        </option>
                                    <? }
                                    ?>
                                </select>
                            </div>
                            <div class="input">
                                <div class="file_input">
                                    <input type="file" class="file" id="photo" name="photo" />
                                </div>
                            </div>
                            <div class="input">
                                <input type="submit" class="btn sign_btn" value="Редактировать" name="edit" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="item_content">
                    <div class="item_img">
                        <img src="assets/img/item/item.png" alt="item" class="img">
                    </div>
                    <div class="item_info">
                        <div class="item_admin">
                            <div class="item_title">
                                <h2 class="title">
                                    <?= $item['name'] ?>
                                </h2>
                                <p class="text color">wheel</p>
                            </div>
                            <?
                            if (isset($_SESSION['USER']) && $USER['level'] == 2) { ?>
                                <div class="admin_content">
                                    <button class="admin_btn edit">
                                        <img src="assets/img/icon/bx_edit.svg" alt="editIcon" class="icon">
                                    </button>
                                    <button class="admin_btn delete">
                                        <img src="assets/img/icon/ic_baseline-delete.svg" alt="deleteIcon" class="icon">
                                    </button>
                                </div>
                            <? }
                            ?>
                            <!--  -->
                        </div>
                        <div class="item_description">
                            <p class="text">
                                <?= $item['description'] ?>
                            </p>
                        </div>
                        <div class="cost">
                            <p class="text">
                                <?= $item['price'] ?> ₽/шт.
                            </p>
                            <button class="icon_btn"><img src="assets/img/icon/fa6-solid_basket-shopping.svg"
                                    alt="buyIcon" class="icon"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>