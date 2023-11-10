<header>
    <div class="banner">
        <div class="container">
            <div class="banner_content">
                <h1 class="title_slogan"><span class="color">АвтоТорг –</span></h1>
                <p class="info_slogan">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus,
                    hic. Quia, ut.<!-- Быстро.Качесвтенно.Удобно --></p>
                <!--  -->
            </div>
        </div>
        <div class="banner_bg">
            <img src="assets/img/catalog/bg_banne.png" alt="bannerBg" class="img">
        </div>
    </div>
</header>

<main>
    <div class="slider">
        <div class="container">
            <div class="slider_content">
                <div class="arrows">
                    <div class="arrow_icon">
                        <img src="assets/img/icon/Vector.svg" alt="arrowIcon" class="icon">
                    </div>
                    <div class="arrow_icon">
                        <img src="assets/img/icon/Vector.svg" alt="arrowIcon" class="icon"
                            style="transform: rotate(180deg);">
                    </div>
                </div>
                <div class="slider_items">
                    <div class="slide" style="background-image:url('assets/img/slider/slide1.png');"></div>
                    <div class="slide" style="background-image: url('assets/img/slider/slide2.png');"></div>
                    <div class="slide" style="background-image: url(assets/img/slider/slide3.png);"></div>
                    <div class="slide" style="background-image: url(assets/img/slider/slide3.png);"></div>
                    <div class="slide" style="background-image: url(assets/img/slider/slide3.png);"></div>
                    <div class="slide" style="background-image: url(assets/img/slider/slide3.png);"></div>
                </div>

            </div>
        </div>
    </div>
    <div class="catalog" id="catalog">
        <div class="container">
            <div class="catalog_content">
                <h2 class="title">Каталог</h2>
                <div class="categories">
                    <a href="?page=main&#catalog" class="link">
                        <div class="category">
                            <p class="text">Все</p>
                        </div>
                    </a>
                    <?
                    if (isset($_GET['category'])) {
                        $cat_id = $_GET['category'];
                        $dop_sql = "WHERE type = $cat_id";
                    } else {
                        $dop_sql = "";
                    }

                    $sql = "SELECT * FROM product_types";
                    $categories = $connect->query($sql)->fetchAll(PDO::FETCH_ASSOC);

                    foreach ($categories as $category) { ?>
                        <a href="?page=main&category=<?= $category['id'] ?>#catalog" class="link">
                            <div class="category">
                                <p class="text">
                                    <?= $category['name']; ?>
                                </p>
                            </div>
                        </a>
                    <? }
                    ?>
                </div>
                <div class="cards">
                    <?

                    $sql = "SELECT * FROM product $dop_sql";
                    $products = $connect->query($sql);

                    foreach ($products as $product) {
                        ?>
                        <div class="card">
                            <a href="?page=item&id=<?= $product['id'] ?>" class="link">
                                <div class="card_img">
                                    <img src="assets/img/catalog/card_photo_1.png" alt="" class="img">
                                    <div class="circle"></div>
                                </div>
                                <div class="card_desc">
                                    <div class="card_info">
                                        <h3 class="title">
                                            <?= $product['name'] ?>
                                        </h3>
                                    </div>
                                    <div class="cost">
                                        <p class="text color">
                                            <?= $product['price'] ?>₽
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <? } ?>
                </div>
            </div>
        </div>
    </div>
    <div class="sub">
        <div class="container">
            <div class="sub_content">
                <h3 class="text">Подписывайся и узнавай все первым</h3>
                <form action="" class="form_sub">
                    <input type="text" placeholder="email@mail.ru">
                    <button class="btn">Подписаться</button>
                </form>
            </div>
        </div>
    </div>
    <div class="location" id="location">
        <div class="container">
            <div class="loc_content">
                <div class="loc_info">
                    <h2 class="title">Наши контакты</h2>
                    <div class="info_contact">
                        <p class="text">avtotorg@mail.ru</p>
                        <p class="text">+7-856-964-85-96</p>
                        <p class="text">г.City, ул.Wqrwerwr д.65/1</p>
                    </div>
                </div>
                <div class="map"><img src="assets/img/loc/Trello Map View Drag and Drop Feature.gif" alt="" class="img">
                </div>
            </div>
        </div>
    </div>
</main>
<footer>
    <div class="container">
        <div class="footer_content">
            <a href="" class="link">
                <img src="assets/img/icon/f_logo (2).png" alt="" class="f_logo">
            </a>
            <div class="contact">
                <div class="social_network">
                    <a href="" class="f_link">
                        <img src="assets/img/icon/bxl_vk.svg" alt="" class="icon">
                    </a>
                    <a href="" class="f_link">
                        <img src="assets/img/icon/mingcute_telegram-fill.svg" alt="" class="icon">
                    </a>
                </div>
                <a href="" class="f_link">avtotorg@mail.ru</a>
                <a href="" class="f_link">+7-856-964-85-96</a>
            </div>
        </div>
    </div>
</footer>