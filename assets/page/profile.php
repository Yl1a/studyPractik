<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jura:wght@300;400;600;700&display=swap" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    
    <main>
        <div class="profile">
            <div class="container">
                <div class="profile_content">
                    <div class="profile_tubs">
                        <div class="p_tub" data-tab="#info"><a href="" class="link">Личная информация</a></div>
                        <div class="p_tub" data-tab="#basket"><a href="" class="link">Корзина</a></div>
                        <div class="p_tub" data-tab="#buy"><a href="" class="link">Заказы</a></div>
                    </div>
                    <div class="content p_info " id="info">
                        <div class="profile_img"><img src="assets/img/icon/log_in.svg" alt="" class="img"></div>
                        <div class="profile_info">
                            <p class="text">Логин</p>
                            <p class="text">user@gmail.ru</p>
                            <p class="text">Статус:пользователь</p>
                        </div>
                    </div>
                    <div class="content basket_block" id="basket">
                        <h2 class="title">Корзина</h2>
                        <div class="categories">
                            <div class="category">
                                <p class="text">Все</p>
                            </div>
                            <div class="category">
                                <p class="text">На проверке</p>
                            </div>
                            <div class="category">
                                <p class="text">В пути</p>
                            </div>
                            <div class="category">
                                <p class="text">Доставлено</p>
                            </div>
                        </div>
                        <div class="basket">
                            <div class="basket_item">
                                <img src="assets/img/item/item.png" alt="" class="img">
                                <div class="item_info">
                                    <p class="text">Название продукта</p>
                                    <p class="text color">катгория</p>
                                    <p class="text">описание товара</p>
                                    <p class="text color">Цена:1500₽.</p>
                                    <div class="count">

                                        <div class="flex items-center gap-4 text-2xl counter">
                                            <p
                                                class="counter-button hover:bg-gray-300 default-transition minus-el select-none">
                                                -</p>
                                            <label for="#count"
                                                class="flex justify-center py-2 px-1 output-el w-5">1</label>
                                            <input id="count" type="hidden" value="" readonly name="counts[]">
                                            <input type="hidden" value="" readonly name="cart_id">
                                            <input type="hidden" readonly name="cart_orders[]" value=""
                                                class="flex justify-center py-2 px-1 output-el w-5" />
                                            <p
                                                class="counter-button hover:bg-gray-300 default-transition plus-el select-none">
                                                +</p>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn_icon"><img src="assets/img/icon/ic_baseline-delete.svg" alt=""
                                        class="icon"></button>
                            </div>
                            <div class="basket_item">
                                <img src="assets/img/item/item.png" alt="" class="img">
                                <div class="item_info">
                                    <p class="text">Название продукта</p>
                                    <p class="text color">катгория</p>
                                    <p class="text">описание товара</p>
                                    <p class="text color">Цена:1500₽.</p>
                                    <div class="count">

                                        <div class="flex items-center gap-4 text-2xl counter">
                                            <p
                                                class="counter-button hover:bg-gray-300 default-transition minus-el select-none">
                                                -</p>
                                            <label for="#count"
                                                class="flex justify-center py-2 px-1 output-el w-5">1</label>
                                            <input id="count" type="hidden" value="" readonly name="counts[]">
                                            <input type="hidden" value="" readonly name="cart_id">
                                            <input type="hidden" readonly name="cart_orders[]" value=""
                                                class="flex justify-center py-2 px-1 output-el w-5" />
                                            <p
                                                class="counter-button hover:bg-gray-300 default-transition plus-el select-none">
                                                +</p>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn_icon"><img src="assets/img/icon/ic_baseline-delete.svg" alt=""
                                        class="icon"></button>
                            </div>
                            <div class="basket_item">
                                <img src="assets/img/item/item.png" alt="" class="img">
                                <div class="item_info">
                                    <p class="text">Название продукта</p>
                                    <p class="text color">категория</p>
                                    <p class="text">описание товара</p>
                                    <p class="text color">Цена:1500₽</p>
                                    <div class="count">

                                        <div class="flex items-center gap-4 text-2xl counter">
                                            <p
                                                class="counter-button hover:bg-gray-300 default-transition minus-el select-none">
                                                -</p>
                                            <label for="#count"
                                                class="flex justify-center py-2 px-1 output-el w-5">1</label>
                                            <input id="count" type="hidden" value="" readonly name="counts[]">
                                            <input type="hidden" value="" readonly name="cart_id">
                                            <input type="hidden" readonly name="cart_orders[]" value=""
                                                class="flex justify-center py-2 px-1 output-el w-5" />
                                            <p
                                                class="counter-button hover:bg-gray-300 default-transition plus-el select-none">
                                                +</p>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn_icon"><img src="assets/img/icon/ic_baseline-delete.svg" alt=""
                                        class="icon"></button>
                            </div>
                        </div>
                        <div class="end">
                            <h3 class="title">В корзине:</h3>
                            <div class="end_item">
                                <p class="text">Колчество: 4 шт</p>
                            </div>
                            <div class="end_item">
                                <p class="text">Сумма:4500 ₽</p>
                            </div>
                            <div class="end_btn">
                                <button class="btn">Оформить</button>
                            </div>
                        </div>
                    </div>
                    <div class="content buy_block active" id="buy">
                        <h2 class="title">Заказы</h2>
                        <div class="buy">
                            <div class="buy_item">
                                <div class="buy_info">
                                    <div class="info_item">
                                        <p class="text">Пользователь: Логин</p>
                                    </div>
                                    <div class="info_item">
                                        <p class="text">Количество: 3шт.</p>
                                    </div>
                                    <div class="info_item">
                                        <p class="text">Сумма:4500₽</p>
                                    </div>
                                    <div class="info_item">
                                        <button class="info_icon_btn">
                                            <img src="assets/img/icon/yes.svg" alt="" class="icon">
                                        </button>
                                        <button class="info_icon_btn">
                                            <img src="assets/img/icon/no.svg" alt="" class="icon">
                                        </button>
                                    </div>
                                </div>
                                <div class="buy_content">
                                    <div class="content_item">
                                        <div class="buy_img">
                                            <img src="assets/img/item/item.png" alt="" class="img">
                                        </div>
                                        <p class="text">Название товара</p>
                                    </div>
                                    <div class="content_item">
                                        <div class="buy_img">
                                            <img src="assets/img/item/item.png" alt="" class="img">
                                        </div>
                                        <p class="text">Название товара</p>
                                    </div>
                                    <div class="content_item">
                                        <div class="buy_img">
                                            <img src="assets/img/item/item.png" alt="" class="img">
                                        </div>
                                        <p class="text">Название товара</p>
                                    </div>
                                </div>
                                <p class="text color">
                                    Статус: В пути
                                </p>
                            </div>
                        </div>
                        <div class="buy">
                            <div class="buy_item">
                                <div class="buy_info">
                                    <div class="info_item">
                                        <p class="text">Пользователь: Логин</p>
                                    </div>
                                    <div class="info_item">
                                        <p class="text">Количество: 3шт.</p>
                                    </div>
                                    <div class="info_item">
                                        <p class="text">Сумма:4500₽</p>
                                    </div>
                                    <div class="info_item">
                                        <button class="info_icon_btn">
                                            <img src="assets/img/icon/yes.svg" alt="" class="icon">
                                        </button>
                                        <button class="info_icon_btn">
                                            <img src="assets/img/icon/no.svg" alt="" class="icon">
                                        </button>
                                    </div>
                                </div>
                                <div class="buy_content">
                                    <div class="content_item">
                                        <div class="buy_img">
                                            <img src="assets/img/item/item.png" alt="" class="img">
                                        </div>
                                        <p class="text">Название товара</p>
                                    </div>
                                    <div class="content_item">
                                        <div class="buy_img">
                                            <img src="assets/img/item/item.png" alt="" class="img">
                                        </div>
                                        <p class="text">Название товара</p>
                                    </div>
                                    <div class="content_item">
                                        <div class="buy_img">
                                            <img src="assets/img/item/item.png" alt="" class="img">
                                        </div>
                                        <p class="text">Название товара</p>
                                    </div>
                                </div>
                                <p class="text color">
                                    Статус: В пути
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- <footer>
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
    </footer> -->
    <script src="assets/js/profile.js">

    </script>
</body>

</html>