<?php include_once 'header.inc.php';?>



    <div class="item_rest row_restaurant">
            <div class="col_1 dib">
                <a href="#" class="img_holder"><img src="img/restaurant_logo_sample_01.svg" alt=""></a>
            </div>
            <div class="col_2 dib">
                <div class="desc">
                    <a href="#" class="title_strong color_dark">Osteria Bianca</a>
                    <p>Адрес: Санкт-Петербург, Богатырский пр., 4</p>
                    <p>Кухня: Итальянская / Европейская / Американская</p>
                    <p>Открыто: пн-пт 10.00-20.00, сб-вс выходной</p>
                </div>
                <div class="contacts dib">
                    <p class="color_dark">+7 812 652 86 60</p>
                    <p class="soc_links"><a href="#">vkontakte</a><a href="#">facebook</a><a href="#">twitter</a></p>
                    <p><a href="#">www.osteriabianca.ru</a></p>
                </div>
                <div class="date_open dib">
                    <p>Дата открытия:</p>
                    <p>20.09.2016</p>
                </div>
                <div class="main_desc dib">
                    <p><span class="title_param dib">Мин. сумма заказа:</span><span class="value_param color_dark dib">700 р.</span></p>
                    <p><span class="title_param dib">Стоимость доставки:</span><span class="value_param color_dark dib">бесплатно</span></p>
                    <p><span class="title_param dib">Время доставки:</span><span class="value_param color_dark dib">от 50 мин.</span></p>
                    <p><span class="title_param dib">Средний счет:</span><span class="value_param color_dark dib">1200 р.</span></p>
                </div>
                <div class="payment dib">
                    <img src="img/mastercard.svg" class="dibm" alt="">
                    <img src="img/visa.svg" class="dibm" alt="">
                    <p>картой курьеру</p>
                    <p>картой онлайн</p>
                </div>
            </div>
            <div class="col_3 dib">
                <div class="param favorite">
                    <a href="#" class="add_favorite" class="dib"><img src="img/favorites_gray.svg"  alt=""></a>
                    <a href="#" class="dib" data-event="show" data-id=".review_holder,.fog"title="Написать отзыв">
                        <img src="img/message_gray.svg" class="icon_grey" alt="">
                        <img src="img/message_green.svg" class="icon_color" alt="">
                    </a>
                </div>
                <div class="param"><img src="img/rating_rg.svg" class="dibm" alt=""><i class="dibm">7,6</i></div>
                <div class="param"><img src="img/rating_users.svg" class="dibm" alt=""><i class="dibm">7,3</i></div>
                <div class="param comments"><img src="img/comments.svg" class="dibm" alt=""><i class="dibm">58</i></div>
                <div class="param links">
                    <a href="#" class="dibm"><img src="img/order_food.svg" alt="" title="Заказ еды"></a>
                    <a href="#" class="dibm" data-event="show" data-id=".order_table_holder_id_1,.fog" title="Заказ столика"><img src="img/order_table.svg" alt=""></a>
                    <a href="#" class="dibm" data-event="show" data-id=".order_banket_holder_id_1,.fog"title="Заказ банкета"><img src="img/order_banket.svg" alt=""></a>
                    <div class="order_holder order_table_holder_id_1 in_center_window">
                        <?php include 'order_table_form.inc.php';?>
                    </div>
                    <div class="order_holder order_banket_holder_id_1 in_center_window">
                        <?php include 'order_banket_form.inc.php';?>
                    </div>
                    <div class="order_holder review_holder in_center_window">
                        <?php include 'review_form.inc.php';?>
                    </div>
                </div>
            </div>
    </div><!--item_rest-->


    <div id="tabs">
        <ul class="dib">
            <li class="dib"><a href="#">Описание</a></li>
            <li class="dib active"><a href="#">Меню</a></li>
            <li class="dib"><a href="#">Отзывы</a></li>
            <li class="dib"><a href="#">Новости, акции</a></li>
        </ul>
    </div>
    <aside class="dib pad_r_30">
        <?php include 'filter_in_rest.inc.php';?>
    </aside>
    <div class="dib row-n">
            <div class="list_food">

                <div class="item dib">
                    <div class="img_holder">
                        <img src="img/content/03_restaurant_menu/roll_01.jpg" alt="">
                    </div>
                    <p>Каи хотатэ</p>
                    <p class="color_dark">285 руб.</p>
                </div>



                <div class="item dib">
                    <div class="img_holder">
                        <img src="img/content/03_restaurant_menu/roll_02.jpg" alt="">
                    </div>
                    <p>Эби ниватори 105 г</p>
                    <p class="color_dark">285 руб.</p>
                </div>



                <div class="item dib">
                    <div class="img_holder">
                        <img src="img/content/03_restaurant_menu/roll_03.jpg" alt="">
                    </div>
                    <p>Канаяма ролл 110 г</p>
                    <p class="color_dark">285 руб.</p>
                </div>



                <div class="item dib">
                    <div class="img_holder">
                        <img src="img/content/03_restaurant_menu/roll_04.jpg" alt="">
                    </div>
                    <p>Хияши унаги 170 г</p>
                    <p class="color_dark">285 руб.</p>
                </div>



                <div class="item dib">
                    <div class="img_holder">
                        <img src="img/content/03_restaurant_menu/roll_05.jpg" alt="">
                    </div>
                    <p>Сякэ темпура 160 г</p>
                    <p class="color_dark">285 руб.</p>
                </div>



                <div class="item dib">
                    <div class="img_holder">
                        <img src="img/content/03_restaurant_menu/roll_06.jpg" alt="">
                    </div>
                    <p>Отори ролл 235 г</p>
                    <p class="color_dark">285 руб.</p>
                </div>


            </div>
    </div>



<?php include_once 'footer.inc.php';?>