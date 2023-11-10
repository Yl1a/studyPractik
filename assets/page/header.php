<header>
    <div class="modal <?php if (isset($_SESSION['modal']) && $_SESSION['modal']) {
        echo 'active';
        unset($_SESSION['modal']);
    } ?>">
        <div class="modal_inner">
            <div class="close">
                <button class="closeBtn">×</button>
            </div>
            <div class="modal_content active" id="log">
                <form action="assets/actions/log_in.php" class="modal_form " method="POST">
                    <h2 class="title">Войти</h2>
                    <div class="log_inputs">
                        <div class="log_input">
                            <p class="text">почта</p>
                            <input type="text" placeholder="email@mail.ru" name="email">
                            <p class="error text">
                                <?= $_SESSION['errors']['erEmail'] ?>
                            </p>
                        </div>
                        <div class="log_input">
                            <p class="text">пароль</p>
                            <input type="password" placeholder="пароль" name="password">
                            <p class="error text">
                                <?= $_SESSION['errors']['erPassword'] ?>
                            </p>
                        </div>
                    </div>
                    <div class="log_in">
                        <button class="btn">Войти</button>
                        <p class="text">Еще нет аккаунта? <a href="" class="link tub" data-tab="#sign">Регистрация</a>
                        </p>
                    </div>
                </form>
            </div>
            <div class="modal_content" id="sign">
                <form class="modal_form" action="assets/actions/sign.php" method="POST">
                    <h2 class="title">Регистрация</h2>
                    <div class="log_inputs">
                        <div class="log_input">
                            <p class="text">логин</p>
                            <input type="text" placeholder="логин" name="login">
                            <p class="error text">
                                <?= $_SESSION['errors']['erLogin'] ?>
                            </p>
                        </div>

                        <div class="log_input">
                            <p class="text">почта</p>
                            <input type="text" placeholder="email@mail.ru" name="email">
                            <p class="error text">
                                <?= $_SESSION['errors']['erEmail'] ?>
                            </p>
                        </div>
                        <div class="log_input">
                            <p class="text">пароль</p>
                            <input type="password" placeholder="пароль" name="password">
                            <p class="error text">
                                <?= $_SESSION['errors']['erPassword'] ?>
                            </p>
                        </div>
                        <div class="log_input">
                            <p class="text">повторите пароль</p>
                            <input type="password" placeholder="подтвердите пароль" name="confirm">
                            <p class="error text">
                                <?= $_SESSION['errors']['erConfirm'] ?>
                            </p>
                        </div>
                    </div>
                    <div class="log_in">
                        <button class="btn">Зарегистрироваться</button>
                        <p class="text">Уже есть аккаунта? <a href="" class="link tub" data-tab="#log">Вход</a></p>
                    </div>
                </form>
            </div>
        </div>
        <?php
        unset($_SESSION['modal']);
        unset($_SESSION['errors']);
        ?>
    </div>
    <div class="modal modalAdd">
        <div class="modal_inner">
            <div class="close ">
                <button class="closeBtn closeBtnAdd">×</button>
            </div>
            <div class="modal_content active">
                <h2 class="title">Добавление</h2>
                <form action="assets/actions/add.php" class="modal_form formAdd" method="POST" enctype="multipart/form-data">
                    <div class="log_input">
                        <p class="text">название</p>
                        <input type="text" class="input__item" name="name" value="<?= $item['name'] ?>" />
                    </div>
                    <div class="log_input">
                        <p class="text">описание</p>
                        <input type="text" class="input__item" name="desc" value="<?= $item['description'] ?>" />
                    </div>
                    <div class="log_input">
                        <p class="text"> цена</p>
                        <input type="text" class="input__item" name="cost" value="<?= $item['price'] ?>" />
                    </div>
                    <div class="log_input">
                        <p class="text">категория</p>
                        <select name="category" class="input__item">

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
                    <div class="log_input">
                        <div class="file_input">
                            <input type="file" class="file" id="photo" name="photo" />
                        </div>
                    </div>
                    <div class="log_input">
                        <input type="submit" class="btn sign_btn" value="Добавить" name="add" />
                    </div>
                </form>
            </div>
        </div>
        <?php
        unset($_SESSION['modal']);
        unset($_SESSION['errors']);
        ?>
    </div>

    <div class="container">
        <div class="header_content">
            <a href="?page=main" class="link"><img src="assets/img/icon/logo (5).png" alt="logo" class="logo">
            </a>
            <?
            if (isset($_SESSION['USER'])) { ?>
                <ul class="menu">
                    <li class="menu_item"><a href="?page=main" class="link">Главная</a></li>
                    <li class="menu_item"><a href="?page=main&#catalog" class="link">Каталог</a></li>
                    <li class="menu_item"><a href="?page=profile&id=<?= $USER['id'] ?>" class="link">Профиль</a></li>
                    <?
                    if ($USER['level'] == 2) { ?>
                        <li class="menu_item"><a href="" class="link add">Добавить</a></li>
                    <? } ?>
                </ul>
                <button class="btn" onclick="location.href='?do=exit'"><img src="assets/img/icon/exit.png" alt="log"
                        class="icon"></button>
            <? } else { ?>
                <ul class="menu">
                    <li class="menu_item"><a href="?page=main" class="link">Главная</a></li>
                    <li class="menu_item"><a href="?page=main&#catalog" class="link">Каталог</a></li>
                    <li class="menu_item"><a href="?page=main&#location" class="link">Контакты</a></li>
                </ul>
                <button class="btn"><img src="assets/img/icon/log_in.svg" alt="log" class="icon log"></button>
            <? }
            ?>
        </div>
    </div>
</header>